<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/bootstrap5/templates/form/input.html.twig */
class __TwigTemplate_e0287cc8120341914c68056444ef8b02bb36538d99ae3b2dea6c27a684e69a43 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", [0 => "button"], "method", false, false, true, 14) &&  !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", [0 => "field-add-more-submit"], "method", false, false, true, 14))) {
            // line 15
            echo "  ";
            // line 16
            $context["classes"] = [0 => "btn", 1 => ((twig_get_attribute($this->env, $this->source,             // line 18
($context["attributes"] ?? null), "hasClass", [0 => "button--danger"], "method", false, false, true, 18)) ? ("btn-danger") : ("btn-primary"))];
            // line 21
            echo "  <input";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 21), 21, $this->source), "html", null, true);
            echo " />
";
        } else {
            // line 23
            echo "  <input";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 23, $this->source), "html", null, true);
            echo " />
";
        }
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 25, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap5/templates/form/input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 25,  55 => 23,  49 => 21,  47 => 18,  46 => 16,  44 => 15,  42 => 14,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap5/templates/form/input.html.twig", "C:\\xampp\\htdocs\\drupaltuto\\web\\themes\\bootstrap5\\templates\\form\\input.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14, "set" => 16);
        static $filters = array("escape" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
