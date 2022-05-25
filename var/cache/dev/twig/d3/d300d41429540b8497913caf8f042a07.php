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

/* @OroComment/Comment/form.html.twig */
class __TwigTemplate_7bc7c429a0b6ab647f730f7c009c98da extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroComment/Comment/form.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroComment/Comment/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroComment/Comment/form.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), [0 => "@OroForm/Form/fields.html.twig", 1 => $this->getTemplateName()], true);
        // line 2
        echo "
<form method=\"post\" class=\"comment-form\">
    <fieldset class=\"form-horizontal\">
        <label class=\"comment-message-label\">
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "message", [], "any", false, false, false, 6), 'widget');
        echo "
        </label>
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "attachment", [], "any", false, false, false, 8), 'widget');
        echo "
        <% if (attachmentURL) { %>
        <div class=\"attachment-item\">
            <span class=\"attachment-item__icon fa-paperclip\" aria-hidden=\"true\"></span>
            <a href=\"<%- attachmentURL.url %>\" class=\"no-hash attachment-item__filename\" title=\"<%- attachmentFileName %>\"><%- attachmentFileName %></a>
            <span class=\"attachment-item__file-size\">(<%- attachmentSize %>)</span>
            <button class=\"btn btn-icon btn-square-lighter attachment-item__remove\" type=\"button\" data-role=\"remove\">
                <span class=\"fa-close\" aria-hidden=\"true\"></span>
            </button>
        </div>
        <% } %>
        <div class=\"widget-actions\">
            <button class=\"btn cancel-comment-button\" type=\"reset\">
                <%- _.__('oro.comment.from.button.cancel_comment.label')  %>
            </button>
            <% if (!isNew) { %>
            <button class=\"btn btn-primary\" type=\"submit\">
                <%- _.__('oro.comment.from.button.edit_comment.label') %>
            </button>
            <% } else { %>
            <button class=\"btn btn-primary\" type=\"submit\">
                <%- _.__('oro.comment.from.button.send_comment.label') %>
            </button>
            <% } %>
        </div>
    </fieldset>
</form>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroComment/Comment/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  54 => 6,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme form with ['@OroForm/Form/fields.html.twig', _self] %}

<form method=\"post\" class=\"comment-form\">
    <fieldset class=\"form-horizontal\">
        <label class=\"comment-message-label\">
            {{ form_widget(form.message) }}
        </label>
        {{ form_widget(form.attachment) }}
        <% if (attachmentURL) { %>
        <div class=\"attachment-item\">
            <span class=\"attachment-item__icon fa-paperclip\" aria-hidden=\"true\"></span>
            <a href=\"<%- attachmentURL.url %>\" class=\"no-hash attachment-item__filename\" title=\"<%- attachmentFileName %>\"><%- attachmentFileName %></a>
            <span class=\"attachment-item__file-size\">(<%- attachmentSize %>)</span>
            <button class=\"btn btn-icon btn-square-lighter attachment-item__remove\" type=\"button\" data-role=\"remove\">
                <span class=\"fa-close\" aria-hidden=\"true\"></span>
            </button>
        </div>
        <% } %>
        <div class=\"widget-actions\">
            <button class=\"btn cancel-comment-button\" type=\"reset\">
                <%- _.__('oro.comment.from.button.cancel_comment.label')  %>
            </button>
            <% if (!isNew) { %>
            <button class=\"btn btn-primary\" type=\"submit\">
                <%- _.__('oro.comment.from.button.edit_comment.label') %>
            </button>
            <% } else { %>
            <button class=\"btn btn-primary\" type=\"submit\">
                <%- _.__('oro.comment.from.button.send_comment.label') %>
            </button>
            <% } %>
        </div>
    </fieldset>
</form>
", "@OroComment/Comment/form.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/CommentBundle/Resources/views/Comment/form.html.twig");
    }
}
