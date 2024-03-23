import axios from "axios";
import jQuery from "jquery";
import gsap from "gsap";
import slick from "slick-carousel";

window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

window.$ = window.jQuery = jQuery;

window.gsap = window.gsap = gsap;

window.slick = window.slick = slick;
import "slick-carousel/slick/slick.scss";
