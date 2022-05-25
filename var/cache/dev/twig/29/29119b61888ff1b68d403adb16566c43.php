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

/* @OroEmail/Email/Thread/userEmails.html.twig */
class __TwigTemplate_c88492a3425288ee1eab27c4b602e25a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_data' => [$this, 'block_content_data'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroEmail/Email/Thread/view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/Email/Thread/userEmails.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/Thread/userEmails.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/Thread/userEmails.html.twig"));

        $this->parent = $this->loadTemplate("@OroEmail/Email/Thread/view.html.twig", "@OroEmail/Email/Thread/userEmails.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 3));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 4
        echo "    <div class=\"container-fluid\">
        <div class=\"responsive-section\">
            ";
        // line 6
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderWidget($this->env, ["widgetType" => "block", "wid" => "thread-view", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_user_thread_widget", ["id" => twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "renderContexts" => false, "showSingleEmail" =>  !$this->extensions['Oro\Bundle\ConfigBundle\Twig\ConfigExtension']->getConfigValue("oro_email.threads_grouping")]), "alias" => "thread-view", "contextsRendered" => true]);
        // line 13
        echo "
        </div>
        <div class=\"widget-content email-activity-widget\">
            <h4 class=\"scrollspy-title\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activity.sections.activities"), "html", null, true);
        echo "</h4>
            <div class=\"scrollspy-nav-target\"></div>
            <div class=\"responsive-section\">
                ";
        // line 19
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("view_content_data_activities", $context)) ? (_twig_default_filter((isset($context["view_content_data_activities"]) || array_key_exists("view_content_data_activities", $context) ? $context["view_content_data_activities"] : (function () { throw new RuntimeError('Variable "view_content_data_activities" does not exist.', 19, $this->source); })()), "view_content_data_activities")) : ("view_content_data_activities")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 19, $this->source); })())]);
        // line 20
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroEmail/Email/Thread/userEmails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 20,  95 => 19,  89 => 16,  84 => 13,  82 => 9,  81 => 6,  77 => 4,  64 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@OroEmail/Email/Thread/view.html.twig\" %}

{% block content_data %}
    <div class=\"container-fluid\">
        <div class=\"responsive-section\">
            {{ oro_widget_render({
                'widgetType': 'block',
                'wid': 'thread-view',
                'url': path('oro_email_user_thread_widget', {'id': entity.id, 'renderContexts': false,
                    'showSingleEmail': not oro_config_value('oro_email.threads_grouping')}),
                'alias': 'thread-view',
                'contextsRendered': true
            }) }}
        </div>
        <div class=\"widget-content email-activity-widget\">
            <h4 class=\"scrollspy-title\">{{ 'oro.activity.sections.activities'|trans }}</h4>
            <div class=\"scrollspy-nav-target\"></div>
            <div class=\"responsive-section\">
                {% placeholder view_content_data_activities with {entity: entity} %}
            </div>
        </div>
    </div>
{% endblock content_data %}
", "@OroEmail/Email/Thread/userEmails.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/Email/Thread/userEmails.html.twig");
    }
}
