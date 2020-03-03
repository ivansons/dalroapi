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

/* themes/porto/templates/menu/menu--main.html.twig */
class __TwigTemplate_b7df4d3a9e4419904dc67dc672fa05471c6a314bdfd8dabe42fa0a6c0bf6ffbf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 21, "macro" => 29, "if" => 31, "for" => 38, "set" => 40];
        $filters = ["escape" => 33];
        $functions = ["link" => 48];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['link']
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
        // line 21
        $context["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0));
        echo "

";
    }

    // line 29
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 30
            echo "  ";
            $context["menus"] = $this;
            // line 31
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 32
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 33
                    echo "<ul";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "mobile-side-menu"], "method")), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 35
                    echo "        <ul>
            ";
                }
                // line 37
                echo "            ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 38
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 39
                        echo "                ";
                        // line 40
                        $context["classes"] = [0 => "", 1 => (($this->getAttribute(                        // line 42
$context["item"], "is_expanded", [])) ? ("dropdown") : ("")), 2 => (($this->getAttribute(                        // line 43
$context["item"], "is_collapsed", [])) ? ("dropdown") : ("")), 3 => (($this->getAttribute(                        // line 44
$context["item"], "in_active_trail", [])) ? ("active") : (""))];
                        // line 47
                        echo "                <li";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
                        echo ">
                    ";
                        // line 48
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", []))), "html", null, true);
                        echo "
                    ";
                        // line 49
                        if ($this->getAttribute($context["item"], "below", [])) {
                            // line 50
                            echo "                        <span class=\"mmenu-toggle\"></span>
                        ";
                            // line 51
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                            echo "
                    ";
                        }
                        // line 53
                        echo "                </li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "            ";
                } else {
                    // line 56
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 57
                        echo "                    ";
                        // line 58
                        $context["classes"] = [0 => "", 1 => (($this->getAttribute(                        // line 60
$context["item"], "is_expanded", [])) ? ("dropdown-submenu") : ("")), 2 => (($this->getAttribute(                        // line 61
$context["item"], "is_collapsed", [])) ? ("dropdown") : ("")), 3 => (($this->getAttribute(                        // line 62
$context["item"], "in_active_trail", [])) ? ("active") : (""))];
                        // line 65
                        echo "                    <li";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
                        echo ">
                        ";
                        // line 66
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", []))), "html", null, true);
                        echo "
                        ";
                        // line 67
                        if ($this->getAttribute($context["item"], "below", [])) {
                            // line 68
                            echo "                            <span class=\"mmenu-toggle\"></span>
                            ";
                            // line 69
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                            echo "
                        ";
                        }
                        // line 71
                        echo "                    </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 73
                    echo "            ";
                }
                // line 74
                echo "        </ul>
    ";
            }
            // line 76
            echo "    ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/menu/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 76,  185 => 74,  182 => 73,  175 => 71,  170 => 69,  167 => 68,  165 => 67,  161 => 66,  156 => 65,  154 => 62,  153 => 61,  152 => 60,  151 => 58,  149 => 57,  144 => 56,  141 => 55,  134 => 53,  129 => 51,  126 => 50,  124 => 49,  120 => 48,  115 => 47,  113 => 44,  112 => 43,  111 => 42,  110 => 40,  108 => 39,  103 => 38,  100 => 37,  96 => 35,  90 => 33,  87 => 32,  84 => 31,  81 => 30,  67 => 29,  60 => 27,  57 => 22,  55 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% if items %}
    {% if menu_level == 0 %}
<ul{{ attributes.addClass('mobile-side-menu') }}>
    {% else %}
        <ul>
            {% endif %}
            {% if menu_level == 0 %}
            {% for item in items %}
                {%
                set classes = [
                '',
                item.is_expanded ? 'dropdown',
                item.is_collapsed ? 'dropdown',
                item.in_active_trail ? 'active',
                ]
                %}
                <li{{ item.attributes.addClass(classes) }}>
                    {{ link(item.title, item.url) }}
                    {% if item.below %}
                        <span class=\"mmenu-toggle\"></span>
                        {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
                    {% endif %}
                </li>
            {% endfor %}
            {% else %}
                {% for item in items %}
                    {%
                    set classes = [
                    '',
                    item.is_expanded ? 'dropdown-submenu',
                    item.is_collapsed ? 'dropdown',
                    item.in_active_trail ? 'active',
                    ]
                    %}
                    <li{{ item.attributes.addClass(classes) }}>
                        {{ link(item.title, item.url) }}
                        {% if item.below %}
                            <span class=\"mmenu-toggle\"></span>
                            {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
                        {% endif %}
                    </li>
                {% endfor %}
            {% endif %}
        </ul>
    {% endif %}
    {% endmacro %}
", "themes/porto/templates/menu/menu--main.html.twig", "/Applications/MAMP/htdocs/dalro-dev/themes/porto/templates/menu/menu--main.html.twig");
    }
}
