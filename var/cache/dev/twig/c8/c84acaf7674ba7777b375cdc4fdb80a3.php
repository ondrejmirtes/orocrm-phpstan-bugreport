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

/* @OroImap/Form/accountTypeAuthorized.html.twig */
class __TwigTemplate_da68ced731cac5b8be38916a431d51fd extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroImap/Form/accountTypeAuthorized.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroImap/Form/accountTypeAuthorized.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroImap/Form/accountTypeAuthorized.html.twig"));

        // line 1
        echo "<fieldset class=\"form-horizontal\">
    ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imapAccountType", [], "any", false, true, false, 2), "userEmailOrigin", [], "any", true, true, false, 2)) {
            // line 3
            echo "        <div>";
            // line 4
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "imapAccountType", [], "any", false, false, false, 4), "userEmailOrigin", [], "any", false, false, false, 4), "parent", [], "any", false, false, false, 4))) {
                // line 5
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "imapAccountType", [], "any", false, false, false, 5), "userEmailOrigin", [], "any", false, false, false, 5), 'errors');
            }
            // line 8
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imapAccountType", [], "any", false, true, false, 8), "userEmailOrigin", [], "any", false, true, false, 8), "check", [], "any", true, true, false, 8)) {
                // line 9
                echo "                <div class=\"control-group\">
                    <div class=\"controls\">
                        ";
                // line 11
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "imapAccountType", [], "any", false, false, false, 11), "userEmailOrigin", [], "any", false, false, false, 11), "check", [], "any", false, false, false, 11), 'widget');
                echo "
                    </div>
                </div>
            ";
            }
            // line 15
            echo "
            ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "imapAccountType", [], "any", false, true, false, 16), "userEmailOrigin", [], "any", false, true, false, 16), "checkFolder", [], "any", true, true, false, 16)) {
                // line 17
                echo "                <div class=\"control-group\">
                    <div class=\"controls\">
                        ";
                // line 19
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "imapAccountType", [], "any", false, false, false, 19), "userEmailOrigin", [], "any", false, false, false, 19), "checkFolder", [], "any", false, false, false, 19), 'widget');
                echo "
                    </div>
                </div>
            ";
            }
            // line 23
            echo "
            <div class=\"control-group\">
                <div class=\"controls\">
                    <div class=\"google-alert google-connection-status alert alert-error\" role=\"alert\" style=\"display: none\"></div>
                </div>
            </div>";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "imapAccountType", [], "any", false, false, false, 30), "userEmailOrigin", [], "any", false, false, false, 30), 'rest');
            // line 31
            echo "</div>
    ";
        }
        // line 33
        echo "</fieldset>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroImap/Form/accountTypeAuthorized.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  96 => 31,  94 => 30,  87 => 23,  80 => 19,  76 => 17,  74 => 16,  71 => 15,  64 => 11,  60 => 9,  58 => 8,  55 => 5,  53 => 4,  51 => 3,  49 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<fieldset class=\"form-horizontal\">
    {% if form.imapAccountType.userEmailOrigin is defined %}
        <div>
            {%- if form.imapAccountType.userEmailOrigin.parent is empty -%}
                {{ form_errors(form.imapAccountType.userEmailOrigin) }}
            {%- endif -%}

            {% if form.imapAccountType.userEmailOrigin.check is defined %}
                <div class=\"control-group\">
                    <div class=\"controls\">
                        {{ form_widget(form.imapAccountType.userEmailOrigin.check) }}
                    </div>
                </div>
            {% endif %}

            {% if form.imapAccountType.userEmailOrigin.checkFolder is defined %}
                <div class=\"control-group\">
                    <div class=\"controls\">
                        {{ form_widget(form.imapAccountType.userEmailOrigin.checkFolder) }}
                    </div>
                </div>
            {% endif %}

            <div class=\"control-group\">
                <div class=\"controls\">
                    <div class=\"google-alert google-connection-status alert alert-error\" role=\"alert\" style=\"display: none\"></div>
                </div>
            </div>

            {{- form_rest(form.imapAccountType.userEmailOrigin) -}}
        </div>
    {% endif %}
</fieldset>
", "@OroImap/Form/accountTypeAuthorized.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ImapBundle/Resources/views/Form/accountTypeAuthorized.html.twig");
    }
}
