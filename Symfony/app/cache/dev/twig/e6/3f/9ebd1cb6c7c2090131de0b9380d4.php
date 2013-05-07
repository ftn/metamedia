<?php

/* SecurityBundle:Collector:security.html.twig */
class __TwigTemplate_e63f9ebd1cb6c7c2090131de0b9380d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user")) {
            // line 5
            echo "        ";
            $context["color_code"] = ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled") && $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated"))) ? ("green") : ("yellow"));
            // line 6
            echo "        ";
            $context["authentication_color_code"] = ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled") && $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated"))) ? ("green") : ("red"));
            // line 7
            echo "        ";
            $context["authentication_color_text"] = ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled") && $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated"))) ? ("Yes") : ("No"));
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        ";
            $context["color_code"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled")) ? ("red") : ("black"));
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user")) {
            // line 13
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Logged in as</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["color_code"]) ? $context["color_code"] : $this->getContext($context, "color_code")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user"), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Authenticated</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["authentication_color_code"]) ? $context["authentication_color_code"] : $this->getContext($context, "authentication_color_code")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["authentication_color_text"]) ? $context["authentication_color_text"] : $this->getContext($context, "authentication_color_text")), "html", null, true);
            echo "</span>
            </div>
            ";
            // line 21
            if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass") != null)) {
                // line 22
                echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Token class</b>
                ";
                // line 24
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass"));
                echo "
            </div>
            ";
            }
            // line 27
            echo "        ";
        } elseif ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled")) {
            // line 28
            echo "            You are not authenticated.
        ";
        } else {
            // line 30
            echo "            The security is disabled.
        ";
        }
        // line 32
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 33
        echo "    ";
        ob_start();
        // line 34
        echo "        <img width=\"24\" height=\"28\" alt=\"Security\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAcCAYAAAB75n/uAAAC70lEQVR42u2V3UtTYRzHu+mFwCwK+gO6CEryPlg7yiYx50vDqUwjFIZDSYUk2ZTmCysHvg9ZVggOQZiRScsR4VwXTjEwdKZWk8o6gd5UOt0mbev7g/PAkLONIOkiBx+25/v89vuc85zn2Q5Fo9F95UDwnwhS5HK5TyqVRv8m1JN6k+AiC+fn54cwbgFNIrTQ/J9IqDcJJDGBHsgDgYBSq9W6ysvLPf39/SSUUU7zsQ1yc3MjmN90OBzfRkZG1umzQqGIxPSTkIBjgdDkaGNjoza2kcFgUCE/QvMsq6io2PV6vQu1tbV8Xl7etkql2qqvr/+MbDE/Pz8s9OP2Cjhwwmw29+4R3Kec1WZnZ4fn5uamc3Jyttra2qbH8ero6JgdHh5+CvFHq9X6JZHgzODgoCVW0NPTY0N+ltU2Nzdv4GqXsYSrPp+vDw80aLFYxru6uhyQ/rDb7a8TCVJDodB1jUazTVlxcXGQ5/mbyE+z2u7u7veY38BVT3Z2djopm5qa6isrK/tQWVn5qb29fSGR4DC4PDAwMEsZHuArjGnyGKutq6v7ajQaF6urq9/MzMz0QuSemJiwQDwGkR0POhhXgILjNTU1TaWlpTxlOp1uyWQyaUjMajMzM8Nut/tJQUHBOpZppbCwkM/KytrBznuL9xDVxBMo8KXHYnu6qKjIivmrbIy67x6Px4Yd58W672ApfzY0NCyNjo7OZmRkiAv8fr+O47iwmABXtoXaG3uykF6vX7bZbF6cgZWqqiqezYkKcNtmjO+CF2AyhufgjsvlMiU7vXEF+4C4ALf9CwdrlVAqlcFkTdRqdQSHLUDgBEeSCrArAsiGwENs0XfJBE6ncxm1D8Aj/B6tigkkJSUlmxSwLYhMDeRsyyUCd+lHrWxtbe2aTCbbZTn1ZD92F0Cr8GBfgnsgDZwDt8EzMBmHMXBLqD0PDMAh9Gql3iRIESQSIAXp4CRIBZeEjIvDFZAm1J4C6UK9ROiZcvCn/+8FvwHtDdJEaRY+oQAAAABJRU5ErkJggg==\" />
        <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["color_code"]) ? $context["color_code"] : $this->getContext($context, "color_code")), "html", null, true);
        echo "\"></span>
        ";
        // line 36
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user")) {
            echo "<div class=\"sf-toolbar-status sf-toolbar-info-piece-additional\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user"), "html", null, true);
            echo "</div>";
        }
        // line 37
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    // line 41
    public function block_menu($context, array $blocks = array())
    {
        // line 42
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAYAAABaKIzgAAADqUlEQVR42u2YXUiTYRTHs6wbg4Toru4iI7qIrgoFv3XOj0BRpoE4U5n4AV6UOg0UhhaKwvLCr2ZeTPwIsbL50Yb5Oc0hrFU2WY55sUJB2wK3qbn+J15jvJhvay9S4MWfPe95znme357znPOOHXO73f+FjkD/OdDQ0FBf5DPo6bi4OC0Wch+WaD/a11vQyxR82KJ9vQUN2QvWarUWPE9CY4xeu1yucfqkZ5Ymyd8H0BBvQcM8gqsgAdmgqJaWlgdRUVEOgUBgLy4uHpqamhLDHsHMC8h/PwihUOiuqKhwNTU12eVyuV0mkzkSEhJ2WaBhvoAKIH/Gfi45Ofmj5+KJiYnvYQ+kwmD8BGzI0tLSzfX19ZmJiQlNa2vrbG1traGnp2fObDbPNTY22vkAZQdfjY2NdbJBpqenKWV+BOsZS6qsrLSvra31ZmVlLdFzUlKSDRnZonF0dLQTV2WEfPgGvYmUu9igSL+ITpMNKhKJtm02mzI9Pd2CNNt0Ol2P1Wp9otfrB1Qqlaazs3M4LS3ts8lkGuQb9EZeXt4q6+5tOxwOIeZOskGbm5uNdXV1wzQeGBgYWlhYaKD7nZGRYYJfaUFBwWJ4ePgOxg/xucsn6BW1Wv0Ui/4Cxam8oS8AHWeDjoyMvMzOzjbjNB2wS4uKijRkl0gkeqfTmY5r5ED/dNjtdhmzVyhfoGehXJziDtOkv+P5LnSeINmg/f39zwC1kpqa+hX2O4A2kl2j0SgxV0vjhoYGPb5sH9+p99/Y2IiLiYn5CYq79w22WOjUfqBVVVU6hUIxRWnFPb4Hyfv6+sbb29ubl5eXJR0dHaMGg0GBzsFbMfnV19efEYvFtwGn25sjgJycnOdQJHxOsEGR2q2lpaXHiLNS3y0pKXm1V/2ZmZm6wsLCWap8vtpTRHV19XUs+OWgtwpAPtTU1FyCf7inPTc314gsPAKkiR0THx+/ib76Dmvv8gF6KyUlRUdjLsFvBv5JbDtOdBG9VI6qV7e1tVm6u7st8/Pzc0aj8YVUKl2h4uQDVEIt5E9AqYrhn7ffHNqSKz8/34BTny0rK3uLwvoUGRm5zdsrtKurq436HDQKjR2gYahGqVS2UJwX8h30b3UEygXK/m3K9bvTy1j+QfE26cVcIonGHHAcsfyABqNCV3+z2AUSF5i3sbQf7estaBB0H1J5VPUgVA5dZFTO2MY4xR2rYvYL8hY0gAkKhsI8dA0KJNGYsXGLOzaY2S/g6A+II1CWfgAh4q3QhpOWjAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
    <strong>Security</strong>
</span>
";
    }

    // line 48
    public function block_panel($context, array $blocks = array())
    {
        // line 49
        echo "    <h2>Security</h2>
    ";
        // line 50
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user")) {
            // line 51
            echo "        <table>
            <tr>
                <th>Username</th>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Authenticated?</th>
                <td>
                    ";
            // line 59
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated")) {
                // line 60
                echo "                        yes
                    ";
            } else {
                // line 62
                echo "                        no ";
                if ((!twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "roles")))) {
                    echo "<em>(probably because the user has no roles)</em>";
                }
                // line 63
                echo "                    ";
            }
            // line 64
            echo "                </td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "roles")), "html", null, true);
            echo "</td>
            </tr>
            ";
            // line 70
            if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass") != null)) {
                // line 71
                echo "            <tr>
                <th>Token class</th>
                <td>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass"), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            // line 76
            echo "        </table>
    ";
        } elseif ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled")) {
            // line 78
            echo "        <p>
            <em>No token</em>
        </p>
    ";
        } else {
            // line 82
            echo "        <p>
            <em>The security component is disabled</em>
        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SecurityBundle:Collector:security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 78,  189 => 71,  149 => 51,  144 => 49,  133 => 42,  95 => 28,  86 => 24,  48 => 9,  57 => 12,  51 => 10,  34 => 5,  31 => 4,  791 => 473,  788 => 472,  777 => 470,  773 => 469,  769 => 467,  756 => 466,  730 => 461,  727 => 460,  708 => 458,  691 => 457,  687 => 455,  683 => 454,  679 => 453,  675 => 452,  671 => 451,  667 => 450,  663 => 449,  660 => 448,  658 => 447,  641 => 446,  630 => 445,  615 => 440,  610 => 438,  606 => 437,  603 => 436,  601 => 435,  587 => 434,  550 => 399,  532 => 396,  515 => 395,  512 => 394,  510 => 393,  505 => 391,  500 => 389,  196 => 92,  182 => 68,  176 => 64,  173 => 63,  170 => 84,  163 => 82,  68 => 30,  62 => 27,  28 => 3,  344 => 119,  332 => 116,  321 => 112,  318 => 111,  315 => 110,  309 => 108,  306 => 107,  300 => 105,  297 => 104,  291 => 102,  283 => 100,  278 => 98,  274 => 97,  263 => 95,  258 => 94,  224 => 81,  136 => 71,  122 => 37,  117 => 39,  112 => 35,  109 => 34,  104 => 32,  85 => 24,  75 => 19,  58 => 25,  44 => 10,  178 => 66,  175 => 65,  161 => 63,  158 => 80,  154 => 54,  125 => 38,  121 => 50,  118 => 49,  87 => 41,  49 => 14,  46 => 13,  27 => 3,  91 => 33,  63 => 18,  385 => 160,  382 => 159,  374 => 157,  367 => 156,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  351 => 150,  349 => 149,  339 => 146,  336 => 145,  330 => 141,  324 => 113,  322 => 138,  317 => 135,  311 => 131,  308 => 130,  303 => 106,  292 => 121,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  265 => 96,  261 => 105,  255 => 93,  249 => 100,  244 => 136,  242 => 96,  237 => 93,  231 => 83,  228 => 88,  225 => 87,  223 => 86,  218 => 83,  212 => 78,  206 => 77,  204 => 76,  199 => 76,  193 => 73,  190 => 76,  187 => 70,  180 => 63,  174 => 65,  171 => 58,  166 => 56,  159 => 53,  151 => 59,  148 => 46,  143 => 51,  140 => 58,  107 => 27,  103 => 32,  100 => 39,  97 => 23,  88 => 25,  82 => 22,  76 => 34,  61 => 15,  39 => 6,  36 => 5,  79 => 21,  72 => 18,  69 => 17,  54 => 11,  47 => 11,  42 => 7,  40 => 11,  37 => 10,  22 => 1,  246 => 32,  164 => 60,  157 => 56,  145 => 74,  139 => 49,  131 => 45,  120 => 40,  115 => 39,  111 => 47,  108 => 37,  106 => 33,  101 => 31,  98 => 45,  92 => 27,  83 => 33,  80 => 21,  74 => 14,  66 => 11,  60 => 13,  55 => 24,  52 => 12,  50 => 22,  41 => 19,  32 => 6,  29 => 6,  409 => 183,  400 => 180,  396 => 179,  393 => 178,  388 => 177,  386 => 176,  378 => 170,  376 => 158,  369 => 165,  362 => 161,  355 => 157,  348 => 153,  341 => 118,  334 => 145,  327 => 114,  312 => 109,  305 => 129,  298 => 125,  293 => 118,  288 => 101,  285 => 115,  276 => 113,  273 => 112,  271 => 111,  262 => 104,  259 => 103,  251 => 101,  248 => 96,  243 => 92,  240 => 92,  235 => 85,  229 => 87,  221 => 85,  219 => 84,  209 => 82,  202 => 77,  195 => 71,  191 => 67,  188 => 90,  185 => 74,  177 => 64,  172 => 64,  168 => 62,  165 => 83,  162 => 59,  156 => 62,  153 => 77,  150 => 55,  147 => 50,  141 => 48,  134 => 54,  130 => 41,  123 => 61,  119 => 40,  116 => 36,  113 => 48,  105 => 34,  102 => 40,  99 => 30,  96 => 37,  90 => 42,  84 => 40,  81 => 23,  73 => 19,  70 => 15,  67 => 24,  64 => 15,  59 => 14,  53 => 12,  45 => 8,  43 => 12,  38 => 7,  35 => 6,  33 => 4,  30 => 3,);
    }
}
