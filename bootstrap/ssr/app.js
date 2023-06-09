import loadash from "lodash";
import * as Popper from "@popperjs/core";
import "bootstrap";
import axios from "axios";
/* empty css      */window._ = loadash;
window.Popper = Popper;
window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
const app = "";
