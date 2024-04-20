class TextSign {
    constructor() {
        this.x = 0;
        this.y = 0;
        this.top = 0;
        this.left = 0;
        this.height = 0;
        this.width = 0;
        this.scale = 1;
    }

    draw(ctx) {
        ctx.save();
        ctx.font = "20px Arial";
        ctx.fillStyle = "#ffffff33";
        ctx.textAlign = "center";
        ctx.textBaseline = "middle";
        ctx.translate(this.left + this.x, this.top + this.y);
        ctx.fillText("</>", 0, 0);
        ctx.restore();
    }
}

$(document).ready(function () {
    const heroBgGrid = $("#hero-bg-grid");

    if (heroBgGrid.length > 0) {
        const context = heroBgGrid[0].getContext("2d");
        const signs = [];
        const mouse = { x: 0, y: 0 };

        let gridLength;
        let gridHeight;

        function setGridDimensions() {
            gridLength = Math.round(window.innerWidth / 75);
            gridHeight = Math.round(window.innerHeight / 75);
        }

        setGridDimensions();
        let mouseOver = false;
        let mouseMoved = false;

        heroBgGrid[0].width = window.innerWidth;
        heroBgGrid[0].height = window.innerHeight;

        function createSignGrid() {
            for (let i = 0; i < gridLength; i++) {
                signs[i] = [];
                for (let j = 0; j < gridHeight; j++) {
                    const min = Math.min(
                        heroBgGrid[0].width,
                        heroBgGrid[0].height
                    );
                    const sign = new TextSign();
                    sign.width = min / (gridLength * 2);
                    sign.height = min / (gridHeight * 2);

                    sign.left =
                        (heroBgGrid[0].width / gridLength) * i + sign.width;
                    sign.top =
                        (heroBgGrid[0].height / gridHeight) * j + sign.height;

                    signs[i][j] = sign;
                }
            }
        }

        function draw() {
            context.clearRect(0, 0, heroBgGrid[0].width, heroBgGrid[0].height);

            if (mouseOver && mouseMoved) {
                calculateSigns();
                mouseMoved = false;
            }

            signs.forEach((row) => {
                row.forEach((sign) => {
                    sign.draw(context);
                });
            });
        }

        function calculateSigns() {
            signs.forEach((row) => {
                row.forEach((sign) => {
                    const hyp =
                        Math.min(heroBgGrid[0].width, heroBgGrid[0].height) /
                        (gridLength + 1) /
                        2;
                    const d = dist([sign.left, sign.top], [mouse.x, mouse.y]);
                    const ax = mouse.x - sign.left;
                    const ay = mouse.y - sign.top;
                    const angle = Math.atan2(ay, ax);
                    const targetScale = d < hyp + sign.width ? 2 : 1;

                    gsap.to(sign, 0.3, { scale: targetScale });
                    gsap.to(sign, 0.3, {
                        x: Math.cos(angle) * hyp,
                        y: Math.sin(angle) * hyp,
                    });
                });
            });
        }

        function handleMouseMove(e) {
            if (e.targetTouches && e.targetTouches[0]) {
                e = e.targetTouches[0];
            }
            const rect = heroBgGrid[0].getBoundingClientRect();
            mouse.x = e.clientX - rect.left;
            mouse.y = e.clientY - rect.top;
            mouseMoved = true;
        }

        function handleMouseLeave() {
            mouseOver = false;
            signs.forEach((row) => {
                row.forEach((sign) => {
                    if (!mouseOver) {
                        gsap.to(sign, 0.3, { x: 0, y: 0, scale: 1 });
                    }
                });
            });
        }

        heroBgGrid.on("mousemove", handleMouseMove);
        heroBgGrid.on("touchmove", handleMouseMove);

        heroBgGrid.on("mouseenter", () => {
            mouseOver = true;
        });

        heroBgGrid.on("touchstart", (e) => {
            mouseOver = true;
            handleMouseMove(e);
        });

        heroBgGrid.on("mouseleave", handleMouseLeave);
        heroBgGrid.on("touchend", handleMouseLeave);

        function dist([x1, y1], [x2, y2]) {
            const dx = x1 - x2;
            const dy = y1 - y2;
            return Math.sqrt(dx * dx + dy * dy) || 1;
        }

        createSignGrid();
        gsap.ticker.add(draw);
    }
});
