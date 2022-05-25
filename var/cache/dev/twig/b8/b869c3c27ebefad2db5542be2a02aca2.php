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

/* @OroEmail/Email/Reply/parentBody.html.twig */
class __TwigTemplate_94f4fb7bac1654e1289b92f083565f65 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/Email/Reply/parentBody.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/Reply/parentBody.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/Reply/parentBody.html.twig"));

        // line 1
        echo "<body> ";
        // line 2
        echo "    <br><br>
    <div class=\"quote\">
        <p>
            ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.parent_message_header", ["%date%" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDate(twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 6, $this->source); })()), "sentAt", [], "any", false, false, false, 6)), "%user%" => twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 7, $this->source); })()), "fromName", [], "any", false, false, false, 7)]), "html", null, true);
        // line 8
        echo "
        </p>
        <div class=\"email-prev-body\">
            ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 11, $this->source); })()), "emailBody", [], "any", false, false, false, 11)) {
            // line 12
            echo "                ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 12, $this->source); })()), "emailBody", [], "any", false, false, false, 12), "bodyContent", [], "any", false, false, false, 12);
            echo "
            ";
        }
        // line 14
        echo "        </div>
    </div>
</body>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroEmail/Email/Reply/parentBody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  64 => 12,  62 => 11,  57 => 8,  55 => 7,  54 => 6,  53 => 5,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<body> {# this template requires body tag because it will be cut depending on it by the component #}
    <br><br>
    <div class=\"quote\">
        <p>
            {{ 'oro.email.parent_message_header'|trans({
                '%date%': email.sentAt|oro_format_date,
                '%user%': email.fromName
            }) }}
        </p>
        <div class=\"email-prev-body\">
            {% if email.emailBody %}
                {{ email.emailBody.bodyContent|raw }}
            {% endif %}
        </div>
    </div>
</body>
", "@OroEmail/Email/Reply/parentBody.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/Email/Reply/parentBody.html.twig");
    }
}
