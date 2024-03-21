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

const heroBgGrid = document.getElementById("hero-bg-grid");
const context = heroBgGrid.getContext("2d");
const signs = [];
const mouse = { x: 0, y: 0 };

let gridLength;
let gridHeight;

gridLength = 20;
gridHeight = 15;

// 1024px
// gridLength = 10;
// gridHeight = 10;

// 798px
// gridLength = 8;
// gridHeight = 10;

// 580px
// gridLength = 5;
// gridHeight = 11;

let mouseOver = false;
let mouseMoved = false;

heroBgGrid.width = window.innerWidth;
heroBgGrid.height = window.innerHeight;

function createSignGrid() {
    for (let i = 0; i < gridLength; i++) {
        signs[i] = [];
        for (let j = 0; j < gridHeight; j++) {
            const min = Math.min(heroBgGrid.width, heroBgGrid.height);
            const sign = new TextSign();
            sign.width = min / (gridLength * 2);
            sign.height = min / (gridHeight * 2);
            sign.left = (heroBgGrid.width / gridLength) * i + sign.width / 0.9;
            sign.top = (heroBgGrid.height / gridHeight) * j + sign.height / 0.9;

            // 1024px
            // sign.left = (heroBgGrid.width / gridLength) * i + sign.width / 1.5;
            // sign.top = (heroBgGrid.height / gridHeight) * j + sign.height / 0.9;

            // 798px
            // sign.left = (heroBgGrid.width / gridLength) * i + sign.width / 1.5;
            // sign.top = (heroBgGrid.height / gridHeight) * j + sign.height / 0.7;

            // 580px
            // sign.left = (heroBgGrid.width / gridLength) * i + sign.width / 1.5;
            // sign.top = (heroBgGrid.height / gridHeight) * j + sign.height / 0.3;

            signs[i][j] = sign;
        }
    }
}

function draw() {
    context.clearRect(0, 0, heroBgGrid.width, heroBgGrid.height);

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
                Math.min(heroBgGrid.width, heroBgGrid.height) /
                (gridLength + 1) /
                2;
            const d = dist([sign.left, sign.top], [mouse.x, mouse.y]);
            const ax = mouse.x - sign.left;
            const ay = mouse.y - sign.top;
            const angle = Math.atan2(ay, ax);
            const targetScale = d < hyp + sign.width ? 2 : 1;

            TweenMax.to(sign, 0.3, { scale: targetScale });
            TweenMax.to(sign, 0.3, {
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
    const rect = heroBgGrid.getBoundingClientRect();
    mouse.x = e.clientX - rect.left;
    mouse.y = e.clientY - rect.top;
    mouseMoved = true;
}

function handleMouseLeave() {
    mouseOver = false;
    signs.forEach((row) => {
        row.forEach((sign) => {
            if (!mouseOver) {
                TweenMax.to(sign, 0.3, { x: 0, y: 0, scale: 1 });
            }
        });
    });
}

heroBgGrid.addEventListener("mousemove", handleMouseMove);
heroBgGrid.addEventListener("touchmove", handleMouseMove);

heroBgGrid.addEventListener("mouseenter", () => {
    mouseOver = true;
});

heroBgGrid.addEventListener("touchstart", (e) => {
    mouseOver = true;
    handleMouseMove(e);
});

heroBgGrid.addEventListener("mouseleave", handleMouseLeave);
heroBgGrid.addEventListener("touchend", handleMouseLeave);

window.addEventListener("resize", () => {
    heroBgGrid.width = window.innerWidth;
    heroBgGrid.height = window.innerHeight;
    createSignGrid();
});

function dist([x1, y1], [x2, y2]) {
    const dx = x1 - x2;
    const dy = y1 - y2;
    return Math.sqrt(dx * dx + dy * dy) || 1;
}

createSignGrid();
gsap.ticker.add(draw);
