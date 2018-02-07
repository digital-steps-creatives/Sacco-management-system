import "./bootstrap";

import "./components";
import "./customComponents";
import "./animations";
import "./icons";
import "./tables";
import "./Forms";
import GlobalMixin from "./mixins/GlobalMixin";
const app = new Vue({
    el: "#app",
    mixins: ["GlobalMixin"]
});
