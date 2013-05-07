<?php

/* @WebProfiler/Profiler/toolbar.css.twig */
class __TwigTemplate_5cbcd92c21cf4bdd1828e29bc271f301 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo ".sf-minitoolbar {
    display: none;

    position: fixed;
    bottom: 0;
    right: 0;

    padding: 5px 5px 0;

    background-color: #f7f7f7;
    background-image: -moz-linear-gradient(top, #e4e4e4, #ffffff);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#e4e4e4), to(#ffffff));
    background-image: -o-linear-gradient(top, #e4e4e4, #ffffff);
    background: linear-gradient(top, #e4e4e4, #ffffff);

    -moz-border-radius: 16px 0 0 0;
    -webkit-border-radius: 16px 0 0 0;
    border-radius: 16px 0 0 0;

    z-index: 6000000;
}

.sf-toolbarreset {
    position: fixed;
    background-color: #f7f7f7;
    left: 0;
    right: 0;
    height: 38px;
    margin: 0;
    padding: 0 40px 0 0;
    z-index: 6000000;
    font: 11px Verdana, Arial, sans-serif;
    text-align: left;
    color: #2f2f2f;

    background-image: -moz-linear-gradient(top, #e4e4e4, #ffffff);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#e4e4e4), to(#ffffff));
    background-image: -o-linear-gradient(top, #e4e4e4, #ffffff);
    background: linear-gradient(top, #e4e4e4, #ffffff);

    bottom: 0;
    border-top: 1px solid #bbb;
}
.sf-toolbarreset abbr {
    border-bottom: 1px dotted #000000;
    cursor: help;
}
.sf-toolbarreset span,
.sf-toolbarreset div {
    font-size: 11px;
}
.sf-toolbarreset img {
    width: auto;
    display: inline;
}

.sf-toolbarreset .hide-button {
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    width: 40px;
    height: 40px;
    cursor: pointer;
    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAMAAAAMCGV4AAAAllBMVEXDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PExMTPz8/Q0NDR0dHT09Pb29vc3Nzf39/h4eHi4uLj4+P6+vr7+/v8/Pz9/f3///+Nh2QuAAAAIXRSTlMABgwPGBswMzk8QktRV4SKjZOWmaKlq7TAxszb3urt+fy1vNEpAAAAiklEQVQIHUXBBxKCQBREwRFzDqjoGh+C2YV//8u5Sll2S0E/dof1tKdKM6GyqCto7PjZRJIS/mbSELgXOSd/BzpKIH1ZefVWpDDTHsi8mZVnwImPi5ndCLbaAZk3M58Bay0h9VbeSvMpjDUAHj4jL55AW1rxN5fU2PLjIgVRzNdxVFOlGzvnJi0Fb1XNGBHA9uQOAAAAAElFTkSuQmCC');
    background-repeat: no-repeat;
    background-position: 13px 11px;
}

.sf-toolbar-block {
    white-space: nowrap;
    color: #2f2f2f;
    display: block;
    min-height: 28px;
    border-right: 1px solid #e4e4e4;
    padding: 0;
    float: left;
    cursor: default;
}

.sf-toolbar-block span {
    display: inline-block;
}

.sf-toolbar-block .sf-toolbar-info-piece {
    line-height: 19px;
    margin-bottom: 5px;
}

.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status {
    padding: 0px 5px;
    border-radius: 5px;
    margin-bottom: 0px;
    vertical-align: top;
}

.sf-toolbar-block .sf-toolbar-info-piece:last-child {
    margin-bottom: 0;
}

.sf-toolbar-block .sf-toolbar-info-piece a,
.sf-toolbar-block .sf-toolbar-info-piece abbr {
    color: #2f2f2f;
}

.sf-toolbar-block .sf-toolbar-info-piece b {
    display: inline-block;
    width: 110px;
    vertical-align: top;
}

.sf-toolbar-block .sf-toolbar-info-with-next-pointer:after {
    content: ' :: ';
    color: #999;
}

.sf-toolbar-block .sf-toolbar-info-with-delimiter {
    border-right: 1px solid #999;
    padding-right: 5px;
    margin-right: 5px;
}

.sf-toolbar-block .sf-toolbar-info {
    display: none;
    position: absolute;
    background-color: #fff;
    border: 1px solid #bbb;
    padding: 9px 0;
    margin-left: -1px;

    bottom: 38px;
    border-bottom-width: 0;
    border-bottom: 1px solid #bbb;
    border-radius: 4px 4px 0 0;
}

.sf-toolbarreset > div:last-of-type .sf-toolbar-info {
    right: -1px;
}

.sf-toolbar-block .sf-toolbar-info:empty {
    visibility: hidden;
}

.sf-toolbar-block .sf-toolbar-status {
    display: inline-block;
    color: #fff;
    background-color: #666;
    padding: 3px 6px;
    border-radius: 3px;
    margin-bottom: 2px;
    vertical-align: middle;
    min-width: 6px;
    min-height: 13px;
}

.sf-toolbar-block .sf-toolbar-status abbr {
    color: #fff;
    border-bottom: 1px dotted black;
}

.sf-toolbar-block .sf-toolbar-status-green {
    background-color: #759e1a;
}

.sf-toolbar-block .sf-toolbar-status-red {
    background-color: #a33;
}

.sf-toolbar-block .sf-toolbar-status-yellow {
    background-color: #ffcc00;
    color: #000;
}

.sf-toolbar-block .sf-toolbar-status-black {
    background-color: #000;
}

.sf-toolbar-block .sf-toolbar-icon {
    display: block;
}

.sf-toolbar-block .sf-toolbar-icon > a,
.sf-toolbar-block .sf-toolbar-icon > span {
    display: block;
    text-decoration: none;
    margin: 0;
    padding: 5px 8px;
    min-width: 20px;
    text-align: center;
    vertical-align: middle;
}

.sf-toolbar-block .sf-toolbar-icon > a,
.sf-toolbar-block .sf-toolbar-icon > a:link
.sf-toolbar-block .sf-toolbar-icon > a:hover {
    color: black !important;
}

.sf-toolbar-block .sf-toolbar-icon img {
    border-width: 0;
    vertical-align: middle;
}

.sf-toolbar-block .sf-toolbar-icon img + span {
    margin-left: 5px;
    margin-top: 2px;
}

.sf-toolbar-block .sf-toolbar-icon .sf-toolbar-status {
    border-radius: 12px;
    border-bottom-left-radius: 0;
    margin-top: 0;
}

.sf-toolbar-block .sf-toolbar-info-method {
    border-bottom: 1px dashed #ccc;
    cursor: help;
}

.sf-toolbar-block .sf-toolbar-info-method[onclick=\"\"] {
    border-bottom: none;
    cursor: inherit;
}

.sf-toolbar-info-php {}
.sf-toolbar-info-php-ext {}

.sf-toolbar-info-php-ext .sf-toolbar-status {
    margin-left: 2px;
}

.sf-toolbar-info-php-ext .sf-toolbar-status:first-child {
    margin-left: 0;
}

.sf-toolbar-block a .sf-toolbar-info-piece-additional,
.sf-toolbar-block a .sf-toolbar-info-piece-additional-detail {
    display: inline-block;
}

.sf-toolbar-block a .sf-toolbar-info-piece-additional:empty,
.sf-toolbar-block a .sf-toolbar-info-piece-additional-detail:empty {
    display: none;
}

.sf-toolbarreset:hover {
    box-shadow: rgba(0, 0, 0, 0.3) 0 0 50px;
}

.sf-toolbar-block:hover {
    box-shadow: rgba(0, 0, 0, 0.35) 0 0 5px;
    border-right: none;
    margin-right: 1px;
    position: relative;
}

.sf-toolbar-block:hover .sf-toolbar-icon {
    background-color: #fff;
    border-top: 1px dotted #DDD;
    position: relative;
    margin-top: -1px;
    z-index: 10002;
}

.sf-toolbar-block:hover .sf-toolbar-info {
    display: block;
    min-width: -webkit-calc(100% + 2px);
    min-width: calc(100% + 2px);
    z-index: 10001;
    box-sizing: border-box;
    padding: 9px;
    line-height: 19px;
}

/***** Override the setting when the toolbar is on the top *****/
";
        // line 277
        if (((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")) == "top")) {
            // line 278
            echo "    .sf-minitoolbar {
        top: 0;
        bottom: auto;
        right: 0;

        background-color: #f7f7f7;

        background-image: -moz-linear-gradient(225deg, #e4e4e4, #ffffff);
        background-image: -webkit-gradient(linear, 100% 0%, 0% 0%, from(#e4e4e4), to(#ffffff));
        background-image: -o-linear-gradient(135deg, #e4e4e4, #ffffff);
        background: linear-gradient(225deg, #e4e4e4, #ffffff);

        -moz-border-radius: 0 0 0 16px;
        -webkit-border-radius: 0 0 0 16px;
        border-radius: 0 0 0 16px;
    }

    .sf-toolbarreset {
        background-image: -moz-linear-gradient(225deg, #e4e4e4, #ffffff);
        background-image: -webkit-gradient(linear, 100% 0%, 0% 0%, from(#e4e4e4), to(#ffffff));
        background-image: -o-linear-gradient(135deg, #e4e4e4, #ffffff);
        background: linear-gradient(225deg, #e4e4e4, #ffffff);

        top: 0;
        bottom: auto;
        border-bottom: 1px solid #bbb;
    }

    .sf-toolbar-block .sf-toolbar-info {
        top: 39px;
        bottom: auto;
        border-top-width: 0;
        border-radius: 0 0 4px 4px;
    }

    .sf-toolbar-block:hover .sf-toolbar-icon {
        border-top: none;
        border-bottom: 1px dotted #DDD;
        margin-top: 0;
        margin-bottom: -1px;
    }
";
        }
        // line 320
        echo "
";
        // line 321
        if ((!(isset($context["floatable"]) ? $context["floatable"] : $this->getContext($context, "floatable")))) {
            // line 322
            echo "    .sf-toolbarreset {
        position: static;
        background: #cbcbcb;

        background-image: -moz-linear-gradient(90deg, #cbcbcb, #e8e8e8); !important;
        background-image: -webkit-gradient(linear, 0% 0%, 100% 0%, from(#cbcbcb), to(#e8e8e8)); !important;
        background-image: -o-linear-gradient(180deg, #cbcbcb, #e8e8e8); !important;
        background: linear-gradient(90deg, #cbcbcb, #e8e8e8); !important;
    }
";
        }
        // line 332
        echo "
/***** Media query *****/
@media screen and (max-width: 779px) {
    .sf-toolbar-block .sf-toolbar-icon > * > :first-child ~ * {
        display: none;
    }

    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional,
    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional-detail {
        display: none !important;
    }
}

@media screen and (min-width: 880px) {
    .sf-toolbar-block .sf-toolbar-icon a[href\$=\"config\"] .sf-toolbar-info-piece-additional {
        display: inline-block;
    }
}

@media screen and (min-width: 980px) {
    .sf-toolbar-block .sf-toolbar-icon a[href\$=\"security\"] .sf-toolbar-info-piece-additional {
        display: inline-block;
    }
}

@media screen and (max-width: 1179px) {
    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional {
        display: none;
    }
}

@media screen and (max-width: 1439px) {
    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional-detail {
        display: none;
    }
}
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 321,  343 => 320,  299 => 278,  24 => 3,  19 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  407 => 131,  402 => 130,  398 => 129,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  368 => 112,  365 => 111,  360 => 332,  337 => 103,  314 => 99,  294 => 90,  268 => 85,  264 => 84,  252 => 80,  247 => 78,  241 => 77,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  132 => 51,  128 => 49,  93 => 38,  71 => 17,  183 => 70,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  78 => 21,  203 => 78,  189 => 71,  149 => 51,  144 => 53,  133 => 42,  95 => 39,  86 => 24,  48 => 8,  57 => 11,  51 => 10,  34 => 5,  31 => 4,  791 => 473,  788 => 472,  777 => 470,  773 => 469,  769 => 467,  756 => 466,  730 => 461,  727 => 460,  708 => 458,  691 => 457,  687 => 455,  683 => 454,  679 => 453,  675 => 452,  671 => 451,  667 => 450,  663 => 449,  660 => 448,  658 => 447,  641 => 446,  630 => 445,  615 => 440,  610 => 438,  606 => 437,  603 => 436,  601 => 435,  587 => 434,  550 => 399,  532 => 396,  515 => 395,  512 => 394,  510 => 393,  505 => 391,  500 => 389,  196 => 92,  182 => 66,  176 => 64,  173 => 63,  170 => 84,  163 => 82,  68 => 30,  62 => 27,  28 => 3,  344 => 119,  332 => 116,  321 => 112,  318 => 111,  315 => 110,  309 => 97,  306 => 107,  300 => 105,  297 => 277,  291 => 102,  283 => 88,  278 => 86,  274 => 97,  263 => 95,  258 => 81,  224 => 71,  136 => 71,  122 => 43,  117 => 39,  112 => 35,  109 => 41,  104 => 32,  85 => 25,  75 => 23,  58 => 25,  44 => 10,  178 => 66,  175 => 65,  161 => 63,  158 => 80,  154 => 54,  125 => 44,  121 => 50,  118 => 49,  87 => 41,  49 => 14,  46 => 12,  27 => 3,  91 => 33,  63 => 18,  385 => 160,  382 => 159,  374 => 116,  367 => 156,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  351 => 150,  349 => 149,  339 => 146,  336 => 145,  330 => 141,  324 => 113,  322 => 101,  317 => 135,  311 => 131,  308 => 130,  303 => 106,  292 => 121,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  265 => 96,  261 => 105,  255 => 93,  249 => 100,  244 => 136,  242 => 96,  237 => 93,  231 => 83,  228 => 88,  225 => 87,  223 => 86,  218 => 83,  212 => 78,  206 => 77,  204 => 76,  199 => 67,  193 => 73,  190 => 76,  187 => 70,  180 => 63,  174 => 65,  171 => 61,  166 => 56,  159 => 53,  151 => 57,  148 => 46,  143 => 56,  140 => 55,  107 => 36,  103 => 37,  100 => 39,  97 => 23,  88 => 25,  82 => 22,  76 => 28,  61 => 23,  39 => 6,  36 => 8,  79 => 21,  72 => 27,  69 => 26,  54 => 10,  47 => 9,  42 => 11,  40 => 11,  37 => 10,  22 => 2,  246 => 32,  164 => 59,  157 => 56,  145 => 74,  139 => 50,  131 => 45,  120 => 40,  115 => 39,  111 => 37,  108 => 47,  106 => 33,  101 => 43,  98 => 31,  92 => 33,  83 => 35,  80 => 29,  74 => 14,  66 => 11,  60 => 13,  55 => 24,  52 => 12,  50 => 10,  41 => 19,  32 => 7,  29 => 3,  409 => 132,  400 => 180,  396 => 179,  393 => 126,  388 => 177,  386 => 176,  378 => 170,  376 => 158,  369 => 165,  362 => 110,  355 => 106,  348 => 322,  341 => 105,  334 => 145,  327 => 114,  312 => 98,  305 => 95,  298 => 91,  293 => 118,  288 => 101,  285 => 89,  276 => 113,  273 => 112,  271 => 111,  262 => 104,  259 => 103,  251 => 101,  248 => 96,  243 => 92,  240 => 92,  235 => 74,  229 => 73,  221 => 85,  219 => 84,  209 => 82,  202 => 77,  195 => 71,  191 => 67,  188 => 90,  185 => 74,  177 => 65,  172 => 64,  168 => 66,  165 => 64,  162 => 62,  156 => 58,  153 => 77,  150 => 55,  147 => 58,  141 => 51,  134 => 54,  130 => 41,  123 => 61,  119 => 42,  116 => 36,  113 => 48,  105 => 34,  102 => 40,  99 => 30,  96 => 37,  90 => 37,  84 => 28,  81 => 23,  73 => 19,  70 => 20,  67 => 15,  64 => 24,  59 => 22,  53 => 12,  45 => 8,  43 => 12,  38 => 6,  35 => 5,  33 => 4,  30 => 3,);
    }
}
