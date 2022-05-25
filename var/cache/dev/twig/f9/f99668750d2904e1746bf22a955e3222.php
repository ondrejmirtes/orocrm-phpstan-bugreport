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

/* @OroCron/Schedule/Datagrid/command.html.twig */
class __TwigTemplate_16bb8ef14586b4f848686d7d27eccf5f extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCron/Schedule/Datagrid/command.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCron/Schedule/Datagrid/command.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCron/Schedule/Datagrid/command.html.twig"));

        // line 1
        echo "<code>
    ";
        // line 2
        $context["argumentsStr"] = twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 2, $this->source); })()), "getValue", [0 => "arguments"], "method", false, false, false, 2), " ");
        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 3, $this->source); })()), "getValue", [0 => "command"], "method", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (((twig_length_filter($this->env, (isset($context["argumentsStr"]) || array_key_exists("argumentsStr", $context) ? $context["argumentsStr"] : (function () { throw new RuntimeError('Variable "argumentsStr" does not exist.', 3, $this->source); })())) <= 30)) ? ((isset($context["argumentsStr"]) || array_key_exists("argumentsStr", $context) ? $context["argumentsStr"] : (function () { throw new RuntimeError('Variable "argumentsStr" does not exist.', 3, $this->source); })())) : ((twig_trim_filter(twig_slice($this->env, (isset($context["argumentsStr"]) || array_key_exists("argumentsStr", $context) ? $context["argumentsStr"] : (function () { throw new RuntimeError('Variable "argumentsStr" does not exist.', 3, $this->source); })()), 0, 30), null, "right") . "..."))), "html", null, true);
        echo "
</code>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroCron/Schedule/Datagrid/command.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 3,  49 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<code>
    {% set argumentsStr = record.getValue('arguments')|join(' ') %}
    {{ record.getValue('command') }} {{ argumentsStr|length <= 30 ? argumentsStr : argumentsStr|slice(0, 30)|trim(side='right') ~ '...' }}
</code>
", "@OroCron/Schedule/Datagrid/command.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/CronBundle/Resources/views/Schedule/Datagrid/command.html.twig");
    }
}
