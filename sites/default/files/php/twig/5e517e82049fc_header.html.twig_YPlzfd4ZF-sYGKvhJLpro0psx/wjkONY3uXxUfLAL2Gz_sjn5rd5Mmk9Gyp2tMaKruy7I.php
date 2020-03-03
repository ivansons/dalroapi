<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/porto/templates/includes/header.html.twig */
class __TwigTemplate_54cc22adb8b9950124d57dceb1038f3f34eb80ab0769405fb6893f55819cb853 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 7];
        $filters = ["escape" => 9];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<header id=\"header\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": false, \"stickyStartAt\": 147, \"stickySetTop\": \"-147px\", \"stickyChangeLogo\": false}'>
<div class=\"header-body\">
<div class=\"header-top\">
    <div class=\"container\">
        <div class=\"dropdowns-container\">

            ";
        // line 7
        if ($this->getAttribute(($context["page"] ?? null), "language_switcher", [])) {
            // line 8
            echo "            <div class=\"header-dropdown lang-dropdown\">
                <a href=\"#\">";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name_language"] ?? null)), "html", null, true);
            echo " <i class=\"fa fa-caret-down\"></i></a>

                <ul class=\"header-dropdownmenu\">
                    ";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "language_switcher", [])), "html", null, true);
            echo "
                </ul>
            </div>
            ";
        }
        // line 16
        echo "
        </div>
        ";
        // line 18
        if ($this->getAttribute(($context["page"] ?? null), "nav_top", [])) {
            // line 19
            echo "        <div class=\"top-menu-area\">
            ";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "nav_top", [])), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 23
        echo "
    </div>
</div>
<div class=\"header-container container\">
    <div class=\"header-row\">
        ";
        // line 28
        if (($context["logopath"] ?? null)) {
            // line 29
            echo "        <div class=\"header-column\">
            <div class=\"header-logo\">
                <a href=\"";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
            echo "\">
                    <img alt=\"Porto\" width=\"111\" height=\"51\" src=\"";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logopath"] ?? null)), "html", null, true);
            echo "\">
                </a>
            </div>
        </div>
        ";
        }
        // line 37
        echo "        <div class=\"header-column\">
            <div class=\"row\">
                <div class=\"cart-area\">
                    ";
        // line 40
        if ($this->getAttribute(($context["page"] ?? null), "nav_bottom", [])) {
            // line 41
            echo "                    <div class=\"custom-block\">
                        ";
            // line 42
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "nav_bottom", [])), "html", null, true);
            echo "
                    </div>
                    ";
        }
        // line 45
        echo "
                    <div class=\"cart-dropdown\">
                        <a href=\"#\" class=\"cart-dropdown-icon\">
                            <i class=\"minicart-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"cart-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"cart-qty\" class=\"cart-qty\">0</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"cart-text\">item(s)</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                        </a>

                        <div class=\"cart-dropdownmenu right\">
                            <div class=\"dropdownmenu-wrapper\">
                               ";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "cart", [])), "html", null, true);
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 62
        if ($this->getAttribute(($context["page"] ?? null), "search", [])) {
            // line 63
            echo "                    <div class=\"header-search\">
                        <a href=\"#\" class=\"search-toggle\"><i class=\"fa fa-search\"></i></a>
                        <div class=\"header-search-wrapper\">
                            ";
            // line 66
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        // line 70
        echo "                <a href=\"#\" class=\"mmenu-toggle-btn\" title=\"Toggle menu\">
                    <i class=\"fa fa-bars\"></i>
                </a>
            </div>
        </div>
    </div>
</div>
";
        // line 77
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 78
            echo "<div class=\"header-container header-nav\">
<div class=\"container\">
<div class=\"header-nav-main\">
<nav>
    ";
            // line 82
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
</nav>
</div>
</div>
</div>
";
        }
        // line 88
        echo "</div>
</header>
";
        // line 90
        if ($this->getAttribute(($context["page"] ?? null), "menu_mobile", [])) {
            // line 91
            echo "<div class=\"mobile-nav\">
<div class=\"mobile-nav-wrapper\">
    <ul class=\"mobile-side-menu\">
        ";
            // line 94
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "menu_mobile", [])), "html", null, true);
            echo "
    </ul>
</div>
</div>
";
        }
        // line 99
        echo "<div id=\"mobile-menu-overlay\"></div>";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 99,  210 => 94,  205 => 91,  203 => 90,  199 => 88,  190 => 82,  184 => 78,  182 => 77,  173 => 70,  166 => 66,  161 => 63,  159 => 62,  151 => 57,  137 => 45,  131 => 42,  128 => 41,  126 => 40,  121 => 37,  113 => 32,  109 => 31,  105 => 29,  103 => 28,  96 => 23,  90 => 20,  87 => 19,  85 => 18,  81 => 16,  74 => 12,  68 => 9,  65 => 8,  63 => 7,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\" data-plugin-options='{\"stickyEnabled\": true, \"stickyEnableOnBoxed\": true, \"stickyEnableOnMobile\": false, \"stickyStartAt\": 147, \"stickySetTop\": \"-147px\", \"stickyChangeLogo\": false}'>
<div class=\"header-body\">
<div class=\"header-top\">
    <div class=\"container\">
        <div class=\"dropdowns-container\">

            {% if page.language_switcher %}
            <div class=\"header-dropdown lang-dropdown\">
                <a href=\"#\">{{ name_language }} <i class=\"fa fa-caret-down\"></i></a>

                <ul class=\"header-dropdownmenu\">
                    {{ page.language_switcher }}
                </ul>
            </div>
            {% endif %}

        </div>
        {% if page.nav_top %}
        <div class=\"top-menu-area\">
            {{ page.nav_top }}
        </div>
        {% endif %}

    </div>
</div>
<div class=\"header-container container\">
    <div class=\"header-row\">
        {% if logopath %}
        <div class=\"header-column\">
            <div class=\"header-logo\">
                <a href=\"{{ front_page }}\">
                    <img alt=\"Porto\" width=\"111\" height=\"51\" src=\"{{ logopath }}\">
                </a>
            </div>
        </div>
        {% endif %}
        <div class=\"header-column\">
            <div class=\"row\">
                <div class=\"cart-area\">
                    {% if page.nav_bottom %}
                    <div class=\"custom-block\">
                        {{ page.nav_bottom }}
                    </div>
                    {% endif %}

                    <div class=\"cart-dropdown\">
                        <a href=\"#\" class=\"cart-dropdown-icon\">
                            <i class=\"minicart-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"cart-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"cart-qty\" class=\"cart-qty\">0</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"cart-text\">item(s)</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                        </a>

                        <div class=\"cart-dropdownmenu right\">
                            <div class=\"dropdownmenu-wrapper\">
                               {{ page.cart }}
                            </div>
                        </div>
                    </div>
                </div>
                {% if page.search %}
                    <div class=\"header-search\">
                        <a href=\"#\" class=\"search-toggle\"><i class=\"fa fa-search\"></i></a>
                        <div class=\"header-search-wrapper\">
                            {{ page.search }}
                        </div>
                    </div>
                {% endif %}
                <a href=\"#\" class=\"mmenu-toggle-btn\" title=\"Toggle menu\">
                    <i class=\"fa fa-bars\"></i>
                </a>
            </div>
        </div>
    </div>
</div>
{% if page.primary_menu %}
<div class=\"header-container header-nav\">
<div class=\"container\">
<div class=\"header-nav-main\">
<nav>
    {{ page.primary_menu }}
</nav>
</div>
</div>
</div>
{% endif %}
</div>
</header>
{% if page.menu_mobile %}
<div class=\"mobile-nav\">
<div class=\"mobile-nav-wrapper\">
    <ul class=\"mobile-side-menu\">
        {{ page.menu_mobile }}
    </ul>
</div>
</div>
{% endif %}
<div id=\"mobile-menu-overlay\"></div>", "themes/porto/templates/includes/header.html.twig", "/Applications/MAMP/htdocs/dalro-dev/themes/porto/templates/includes/header.html.twig");
    }
}
