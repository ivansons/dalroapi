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

/* themes/porto/templates/page.html.twig */
class __TwigTemplate_7eebae187f39d82a9e6893f22e089e706fdd03e5327841ed8a918347f8c28566 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 2, "if" => 6];
        $filters = ["escape" => 7];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
        echo "<div id=\"wrapper\">
    ";
        // line 2
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/header.html.twig"), "themes/porto/templates/page.html.twig", 2)->display($context);
        // line 3
        echo "    <div role=\"main\" class=\"main\">
        ";
        // line 4
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/custom-breadcrumb.html.twig"), "themes/porto/templates/page.html.twig", 4)->display($context);
        // line 5
        echo "
        ";
        // line 6
        if ($this->getAttribute(($context["page"] ?? null), "slide_show", [])) {
            // line 7
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slide_show", [])), "html", null, true);
            echo "
        ";
        }
        // line 9
        echo "
        ";
        // line 10
        if (($context["messages"] ?? null)) {
            // line 11
            echo "            <section id=\"messages\" class=\"messages\">
                <div class=\"container\">
                    ";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null)), "html", null, true);
            echo "
                </div>
            </section>
        ";
        }
        // line 17
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "region_messages", [])) {
            // line 18
            echo "            <section>
                <div class=\"container\">
                    ";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "region_messages", [])), "html", null, true);
            echo "
                </div>
            </section>

        ";
        }
        // line 25
        echo "        ";
        if ((($context["arg"] ?? null) == "page-coming-soon")) {
            // line 26
            echo "            <div class=\"page-coming-soon\">
                ";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
                ";
            // line 28
            if ($this->getAttribute(($context["page"] ?? null), "after_content", [])) {
                // line 29
                echo "                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-6 col-md-offset-3\">
                                ";
                // line 32
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "after_content", [])), "html", null, true);
                echo "
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 37
            echo "            </div>
        ";
        } else {
            // line 39
            echo "            ";
            if (($this->getAttribute(($context["page"] ?? null), "left_sidebar", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "right_sidebar", [])))) {
                // line 40
                echo "                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3 sidebar shop-sidebar\">
                            <div class=\"panel-group\">
                                ";
                // line 44
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "left_sidebar", [])), "html", null, true);
                echo "
                            </div>
                        </div>
                        <div class=\"col-md-9\">
                            ";
                // line 48
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
                echo "
                        </div>
                    </div>
                </div>
            ";
            } elseif (($this->getAttribute(            // line 52
($context["page"] ?? null), "right_sidebar", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "left_sidebar", [])))) {
                // line 53
                echo "                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-9\">
                            ";
                // line 56
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
                echo "
                            ";
                // line 57
                if ($this->getAttribute(($context["page"] ?? null), "related_product", [])) {
                    // line 58
                    echo "                            ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "related_product", [])), "html", null, true);
                    echo "
                            ";
                }
                // line 60
                echo "                        </div>
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                ";
                // line 63
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "right_sidebar", [])), "html", null, true);
                echo "
                            </aside>
                        </div>
                    </div>
                </div>
            ";
            } elseif (($this->getAttribute(            // line 68
($context["page"] ?? null), "right_sidebar", []) && $this->getAttribute(($context["page"] ?? null), "left_sidebar", []))) {
                // line 69
                echo "                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                ";
                // line 73
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "left_sidebar", [])), "html", null, true);
                echo "
                            </aside>
                        </div>
                        <div class=\"col-md-6\">
                            ";
                // line 77
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
                echo "
                        </div>
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                ";
                // line 81
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "right_sidebar", [])), "html", null, true);
                echo "
                            </aside>
                        </div>
                    </div>
                </div>
            ";
            } else {
                // line 87
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "before_content", [])) {
                    // line 88
                    echo "                    ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "before_content", [])), "html", null, true);
                    echo "
                ";
                }
                // line 90
                echo "                <div class=\"container\">
                    ";
                // line 91
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
                echo "
                    ";
                // line 92
                if ($this->getAttribute(($context["page"] ?? null), "related_product", [])) {
                    // line 93
                    echo "                        ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "related_product", [])), "html", null, true);
                    echo "
                    ";
                }
                // line 95
                echo "                </div>
            ";
            }
            // line 97
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "after_content", [])) {
                // line 98
                echo "                ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "after_content", [])), "html", null, true);
                echo "
            ";
            }
            // line 100
            echo "        ";
        }
        // line 101
        echo "    </div>
    ";
        // line 102
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/includes/footer.html.twig"), "themes/porto/templates/page.html.twig", 102)->display($context);
        // line 103
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 103,  265 => 102,  262 => 101,  259 => 100,  253 => 98,  250 => 97,  246 => 95,  240 => 93,  238 => 92,  234 => 91,  231 => 90,  225 => 88,  222 => 87,  213 => 81,  206 => 77,  199 => 73,  193 => 69,  191 => 68,  183 => 63,  178 => 60,  172 => 58,  170 => 57,  166 => 56,  161 => 53,  159 => 52,  152 => 48,  145 => 44,  139 => 40,  136 => 39,  132 => 37,  124 => 32,  119 => 29,  117 => 28,  113 => 27,  110 => 26,  107 => 25,  99 => 20,  95 => 18,  92 => 17,  85 => 13,  81 => 11,  79 => 10,  76 => 9,  70 => 7,  68 => 6,  65 => 5,  63 => 4,  60 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"wrapper\">
    {% include directory ~ '/templates/includes/header.html.twig' %}
    <div role=\"main\" class=\"main\">
        {% include directory ~ '/templates/includes/custom-breadcrumb.html.twig' %}

        {% if page.slide_show %}
                {{ page.slide_show }}
        {% endif %}

        {% if messages %}
            <section id=\"messages\" class=\"messages\">
                <div class=\"container\">
                    {{ messages }}
                </div>
            </section>
        {% endif %}
        {% if page.region_messages %}
            <section>
                <div class=\"container\">
                    {{ page.region_messages }}
                </div>
            </section>

        {% endif %}
        {% if arg == 'page-coming-soon' %}
            <div class=\"page-coming-soon\">
                {{ page.content }}
                {% if page.after_content %}
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-6 col-md-offset-3\">
                                {{ page.after_content }}
                            </div>
                        </div>
                    </div>
                {% endif %}
            </div>
        {% else %}
            {% if page.left_sidebar and page.right_sidebar is empty %}
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3 sidebar shop-sidebar\">
                            <div class=\"panel-group\">
                                {{ page.left_sidebar }}
                            </div>
                        </div>
                        <div class=\"col-md-9\">
                            {{ page.content }}
                        </div>
                    </div>
                </div>
            {% elseif page.right_sidebar and page.left_sidebar is empty %}
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-9\">
                            {{ page.content }}
                            {% if page.related_product %}
                            {{ page.related_product }}
                            {% endif %}
                        </div>
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                {{ page.right_sidebar }}
                            </aside>
                        </div>
                    </div>
                </div>
            {% elseif page.right_sidebar and page.left_sidebar %}
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                {{ page.left_sidebar }}
                            </aside>
                        </div>
                        <div class=\"col-md-6\">
                            {{ page.content }}
                        </div>
                        <div class=\"col-md-3\">
                            <aside class=\"sidebar\">
                                {{ page.right_sidebar }}
                            </aside>
                        </div>
                    </div>
                </div>
            {% else %}
                {% if page.before_content %}
                    {{ page.before_content }}
                {% endif %}
                <div class=\"container\">
                    {{ page.content }}
                    {% if page.related_product %}
                        {{ page.related_product }}
                    {% endif %}
                </div>
            {% endif %}
            {% if page.after_content %}
                {{ page.after_content }}
            {% endif %}
        {% endif %}
    </div>
    {% include directory ~ '/templates/includes/footer.html.twig' %}
</div>

", "themes/porto/templates/page.html.twig", "/Applications/MAMP/htdocs/dalro-dev/themes/porto/templates/page.html.twig");
    }
}
