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

/* themes/porto/templates/includes/footer.html.twig */
class __TwigTemplate_23023cebaf8d350ddddc298e05037926c501c52e62d23a87e921f717debef7ae extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 4];
        $filters = ["escape" => 6];
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
        echo "<footer id=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 4
        if ($this->getAttribute(($context["page"] ?? null), "label_footer", [])) {
            // line 5
            echo "            <div class=\"footer-ribbon\">
                ";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "label_footer", [])), "html", null, true);
            echo "
            </div>
            ";
        }
        // line 9
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_11", [])) {
            // line 10
            echo "            <div class=\"col-md-3\">
                ";
            // line 11
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_11", [])), "html", null, true);
            echo "

            </div>
            ";
        }
        // line 15
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_12", [])) {
            // line 16
            echo "            <div class=\"col-md-3\">
                ";
            // line 17
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_12", [])), "html", null, true);
            echo "

            </div>
            ";
        }
        // line 21
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_13", [])) {
            // line 22
            echo "            <div class=\"col-md-3\">
                ";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_13", [])), "html", null, true);
            echo "

            </div>
            ";
        }
        // line 27
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_14", [])) {
            // line 28
            echo "            <div class=\"col-md-3\">
                <div class=\"newsletter\">
                    ";
            // line 30
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_14", [])), "html", null, true);
            echo "
                </div>
            </div>
            ";
        }
        // line 34
        echo "        </div>
    </div>
    ";
        // line 36
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])) {
            // line 37
            echo "    <div class=\"footer-copyright\">
        <div class=\"container\">
            ";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
            echo "

        </div>
    </div>
    ";
        }
        // line 44
        echo "</footer>";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/includes/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 44,  134 => 39,  130 => 37,  128 => 36,  124 => 34,  117 => 30,  113 => 28,  110 => 27,  103 => 23,  100 => 22,  97 => 21,  90 => 17,  87 => 16,  84 => 15,  77 => 11,  74 => 10,  71 => 9,  65 => 6,  62 => 5,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer id=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            {% if page.label_footer %}
            <div class=\"footer-ribbon\">
                {{ page.label_footer }}
            </div>
            {% endif %}
            {% if page.footer_11 %}
            <div class=\"col-md-3\">
                {{ page.footer_11 }}

            </div>
            {% endif %}
            {% if page.footer_12 %}
            <div class=\"col-md-3\">
                {{ page.footer_12 }}

            </div>
            {% endif %}
            {% if page.footer_13 %}
            <div class=\"col-md-3\">
                {{ page.footer_13 }}

            </div>
            {% endif %}
            {% if page.footer_14 %}
            <div class=\"col-md-3\">
                <div class=\"newsletter\">
                    {{ page.footer_14 }}
                </div>
            </div>
            {% endif %}
        </div>
    </div>
    {% if page.footer_bottom %}
    <div class=\"footer-copyright\">
        <div class=\"container\">
            {{ page.footer_bottom }}

        </div>
    </div>
    {% endif %}
</footer>", "themes/porto/templates/includes/footer.html.twig", "/Applications/MAMP/htdocs/dalro-dev/themes/porto/templates/includes/footer.html.twig");
    }
}
