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

/* themes/porto/templates/html.html.twig */
class __TwigTemplate_82574f22257c2b2cbb3cecb83ef3ccd690b5007c98aa4b4b27a609131f0dfb93 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "if" => 12];
        $filters = ["clean_class" => 4, "escape" => 12, "raw" => 15, "safe_join" => 16, "t" => 64];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'raw', 'safe_join', 't'],
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
        // line 2
        $context["body_classes"] = [0 => ((        // line 3
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 4
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null)))))), 2 => ((        // line 5
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null))))) : ("")), 3 => ((        // line 6
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), 4 => ((        // line 7
($context["current_path"] ?? null)) ? (("context" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["current_path"] ?? null))))) : (""))];
        // line 10
        echo "
<!DOCTYPE html>
<html";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null)), "html", null, true);
        echo " class=\"";
        if ((($context["h_semi_transparent_option"] ?? null) == 1)) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header side-header-semi-transparent ");
        } else {
            if ((($context["arg"] ?? null) == "index-header-side-header-semi-transparent")) {
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header side-header-semi-transparent");
            }
        }
        if ((($context["header_option"] ?? null) == "h_left")) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header");
        } elseif ((($context["header_option"] ?? null) == "h_right")) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header side-header-right");
        } else {
            if ((($context["arg"] ?? null) == "index-header-side-header-left")) {
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header");
            } elseif ((($context["arg"] ?? null) == "index-header-side-header-right")) {
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("side-header side-header-right");
            }
        }
        echo " ";
        if ((($context["arg"] ?? null) == "index-layout-boxed")) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("boxed");
        } elseif ((($context["arg"] ?? null) == "index-layout-dark")) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("dark");
        } else {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["layout_option"] ?? null)), "html", null, true);
        }
        echo "\">

  <head>
    <head-placeholder token=\"";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    <title>";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null)), " | "));
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light\" rel=\"stylesheet\" type=\"text/css\">
    <css-placeholder token=\"";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    ";
        // line 20
        if ((($context["skin_option"] ?? null) == "none")) {
            // line 21
            echo "    ";
            if ((($context["arg"] ?? null) == "index-corporate-3")) {
                // line 22
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_root"] ?? null)), "html", null, true);
                echo "/css/skins/skin-corporate-3.css' type='text/css' media='all' />
    ";
            } elseif ((            // line 23
($context["arg"] ?? null) == "index-corporate-4")) {
                // line 24
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_root"] ?? null)), "html", null, true);
                echo "/css/skins/skin-corporate-4.css' type='text/css' media='all' />
    ";
            } elseif ((            // line 25
($context["arg"] ?? null) == "index-corporate-5")) {
                // line 26
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_root"] ?? null)), "html", null, true);
                echo "/css/skins/skin-corporate-5.css' type='text/css' media='all' />
    ";
            } elseif ((            // line 27
($context["arg"] ?? null) == "index-corporate-6")) {
                // line 28
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_root"] ?? null)), "html", null, true);
                echo "/css/skins/skin-corporate-6.css' type='text/css' media='all' />
    ";
            } elseif ((            // line 29
($context["arg"] ?? null) == "index-corporate-7")) {
                // line 30
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_root"] ?? null)), "html", null, true);
                echo "/css/skins/skin-corporate-7.css' type='text/css' media='all' />
    ";
            } elseif ((            // line 31
($context["arg"] ?? null) == "index-corporate-8")) {
                // line 32
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_root"] ?? null)), "html", null, true);
                echo "/css/skins/skin-corporate-8.css' type='text/css' media='all' />
    ";
            } elseif ((            // line 33
($context["arg"] ?? null) == "index-corporate-hosting")) {
                // line 34
                echo "        <link rel='stylesheet' href='";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_root"] ?? null)), "html", null, true);
                echo "/css/skins/skin-corporate-hosting.css' type='text/css' media='all' />
   ";
                // line 37
                echo "    ";
            }
            // line 38
            echo "    ";
        } else {
            // line 39
            echo "        <link rel='stylesheet' href='";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_root"] ?? null)), "html", null, true);
            echo "/css/skins/";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["skin_option"] ?? null)), "html", null, true);
            echo ".css' type='text/css' media='all' />
    ";
        }
        // line 41
        echo "    ";
        if ((($context["rtl"] ?? null) == 1)) {
            // line 42
            echo "        <link rel='stylesheet' href='";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_root"] ?? null)), "html", null, true);
            echo "/css/rtl-theme.css' type='text/css' media='all' />
        <link rel='stylesheet' href='";
            // line 43
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_root"] ?? null)), "html", null, true);
            echo "/css/rtl-theme-elements.css' type='text/css' media='all' />
        <link rel='stylesheet' href='";
            // line 44
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_root"] ?? null)), "html", null, true);
            echo "/css/rtl-theme-blog.css' type='text/css' media='all' />
        <link rel='stylesheet' href='";
            // line 45
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_root"] ?? null)), "html", null, true);
            echo "/css/rtl-theme-shop.css' type='text/css' media='all' />
    ";
        }
        // line 47
        echo "    ";
        if ( !twig_test_empty(($context["your_css"] ?? null))) {
            // line 48
            echo "        <style>
            ";
            // line 49
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["your_css"] ?? null)), "html", null, true);
            echo "
        </style>
    ";
        }
        // line 52
        echo "    </script>
    <js-placeholder token=\"";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    <meta name=\"HandheldFriendly\" content=\"true\" />
    <meta name=\"apple-touch-fullscreen\" content=\"YES\" />
  </head>
  <body ";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method")), "html", null, true);
        echo " ";
        if ((($context["arg"] ?? null) == "index-one-page")) {
            echo " class=\"one-page\" ";
        }
        echo " data-target=\"";
        if ((($context["arg"] ?? null) == "index-corporate-hosting")) {
            echo "#navSecondary";
        } else {
            echo "#header";
        }
        echo "\" data-spy=\"scroll\" data-offset=\"100\">
  ";
        // line 58
        if ((($context["loader"] ?? null) == 1)) {
            // line 59
            echo "  <div class=\"preloader\">
      <div class=\"status\">&nbsp;</div>
  </div>
  ";
        }
        // line 63
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 64
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content"));
        echo "
    </a>
    <div class=\"body\">
        ";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null)), "html", null, true);
        echo "
        ";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null)), "html", null, true);
        echo "
        ";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null)), "html", null, true);
        echo "
    </div>
    <js-bottom-placeholder token=\"";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
  </body>
</html>

";
    }

    public function getTemplateName()
    {
        return "themes/porto/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 71,  261 => 69,  257 => 68,  253 => 67,  247 => 64,  244 => 63,  238 => 59,  236 => 58,  222 => 57,  215 => 53,  212 => 52,  206 => 49,  203 => 48,  200 => 47,  195 => 45,  191 => 44,  187 => 43,  182 => 42,  179 => 41,  171 => 39,  168 => 38,  165 => 37,  160 => 34,  158 => 33,  153 => 32,  151 => 31,  146 => 30,  144 => 29,  139 => 28,  137 => 27,  132 => 26,  130 => 25,  125 => 24,  123 => 23,  118 => 22,  115 => 21,  113 => 20,  109 => 19,  103 => 16,  99 => 15,  66 => 12,  62 => 10,  60 => 7,  59 => 6,  58 => 5,  57 => 4,  56 => 3,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{%
set body_classes = [
logged_in ? 'user-logged-in',
not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class,
node_type ? 'page-node-type-' ~ node_type|clean_class,
db_offline ? 'db-offline',
current_path ? 'context' ~ current_path|clean_class,
]
%}

<!DOCTYPE html>
<html{{ html_attributes }} class=\"{% if h_semi_transparent_option == 1 %}{{ 'side-header side-header-semi-transparent ' }}{% else %}{% if arg == 'index-header-side-header-semi-transparent' %}{{ 'side-header side-header-semi-transparent' }}{% endif %}{% endif %}{% if header_option == 'h_left' %}{{ 'side-header' }}{% elseif header_option == 'h_right' %}{{ 'side-header side-header-right' }}{% else %}{% if arg == 'index-header-side-header-left' %}{{ 'side-header' }}{% elseif arg == 'index-header-side-header-right' %}{{ 'side-header side-header-right' }}{% endif %}{% endif %} {% if arg == 'index-layout-boxed' %}{{ 'boxed' }}{% elseif arg == 'index-layout-dark' %}{{ 'dark' }}{% else %}{{ layout_option }}{% endif %}\">

  <head>
    <head-placeholder token=\"{{ placeholder_token|raw }}\">
    <title>{{ head_title|safe_join(' | ') }}</title>
    <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light\" rel=\"stylesheet\" type=\"text/css\">
    <css-placeholder token=\"{{ placeholder_token|raw }}\">
    {% if skin_option == 'none' %}
    {% if arg == 'index-corporate-3' %}
        <link rel='stylesheet' href='{{ theme_root }}/css/skins/skin-corporate-3.css' type='text/css' media='all' />
    {% elseif arg == 'index-corporate-4' %}
        <link rel='stylesheet' href='{{ theme_root }}/css/skins/skin-corporate-4.css' type='text/css' media='all' />
    {% elseif arg == 'index-corporate-5' %}
        <link rel='stylesheet' href='{{ theme_root }}/css/skins/skin-corporate-5.css' type='text/css' media='all' />
    {% elseif arg == 'index-corporate-6' %}
        <link rel='stylesheet' href='{{ theme_root }}/css/skins/skin-corporate-6.css' type='text/css' media='all' />
    {% elseif arg == 'index-corporate-7' %}
        <link rel='stylesheet' href='{{ theme_root }}/css/skins/skin-corporate-7.css' type='text/css' media='all' />
    {% elseif arg == 'index-corporate-8' %}
        <link rel='stylesheet' href='{{ theme_root }}/css/skins/skin-corporate-8.css' type='text/css' media='all' />
    {% elseif arg == 'index-corporate-hosting' %}
        <link rel='stylesheet' href='{{ theme_root }}/css/skins/skin-corporate-hosting.css' type='text/css' media='all' />
   {#{% else %}
        <link rel='stylesheet' href='{{ theme_root }}/ css/skins/default.css' type='text/css' media='all' />#}
    {% endif %}
    {% else %}
        <link rel='stylesheet' href='{{ theme_root }}/css/skins/{{ skin_option }}.css' type='text/css' media='all' />
    {% endif %}
    {% if rtl == 1 %}
        <link rel='stylesheet' href='{{ theme_root }}/css/rtl-theme.css' type='text/css' media='all' />
        <link rel='stylesheet' href='{{ theme_root }}/css/rtl-theme-elements.css' type='text/css' media='all' />
        <link rel='stylesheet' href='{{ theme_root }}/css/rtl-theme-blog.css' type='text/css' media='all' />
        <link rel='stylesheet' href='{{ theme_root }}/css/rtl-theme-shop.css' type='text/css' media='all' />
    {% endif %}
    {% if your_css is not empty %}
        <style>
            {{ your_css }}
        </style>
    {% endif %}
    </script>
    <js-placeholder token=\"{{ placeholder_token|raw }}\">
    <meta name=\"HandheldFriendly\" content=\"true\" />
    <meta name=\"apple-touch-fullscreen\" content=\"YES\" />
  </head>
  <body {{ attributes.addClass(body_classes) }} {% if arg == 'index-one-page' %} class=\"one-page\" {% endif %} data-target=\"{% if arg == 'index-corporate-hosting' %}#navSecondary{% else %}#header{% endif %}\" data-spy=\"scroll\" data-offset=\"100\">
  {% if loader == 1 %}
  <div class=\"preloader\">
      <div class=\"status\">&nbsp;</div>
  </div>
  {% endif %}
    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      {{ 'Skip to main content'|t }}
    </a>
    <div class=\"body\">
        {{ page_top }}
        {{ page }}
        {{ page_bottom }}
    </div>
    <js-bottom-placeholder token=\"{{ placeholder_token|raw }}\">
  </body>
</html>

", "themes/porto/templates/html.html.twig", "/Applications/MAMP/htdocs/dalro-dev/themes/porto/templates/html.html.twig");
    }
}
