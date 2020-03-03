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

/* themes/porto/templates/includes/custom-breadcrumb.html.twig */
class __TwigTemplate_eb2ac69cbabc46f9530cc8ef590856efc8cf80078772ed6dcc822be5420461e7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 1];
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
        if (($context["page_title"] ?? null)) {
            // line 2
            if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])) {
                // line 3
                echo "<section class=\"page-header mb-lg\">
    <div class=\"container\">
        <ul class=\"breadcrumb\">
            ";
                // line 6
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
                echo "
        </ul>
    </div>
</section>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/includes/custom-breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 6,  59 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page_title %}
{% if page.breadcrumb %}
<section class=\"page-header mb-lg\">
    <div class=\"container\">
        <ul class=\"breadcrumb\">
            {{ page.breadcrumb }}
        </ul>
    </div>
</section>
{% endif %}
{% endif %}
", "themes/porto/templates/includes/custom-breadcrumb.html.twig", "/Applications/MAMP/htdocs/dalro-dev/themes/porto/templates/includes/custom-breadcrumb.html.twig");
    }
}
