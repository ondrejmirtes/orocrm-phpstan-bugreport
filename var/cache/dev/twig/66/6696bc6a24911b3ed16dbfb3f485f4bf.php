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

/* @OroActivityList/ActivityList/js/view.html.twig */
class __TwigTemplate_789b76a1438add2e9e649aacc6d115c0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'activityIcon' => [$this, 'block_activityIcon'],
            'activityDetails' => [$this, 'block_activityDetails'],
            'activityShortMessage' => [$this, 'block_activityShortMessage'],
            'activityDate' => [$this, 'block_activityDate'],
            'activityActions' => [$this, 'block_activityActions'],
            'activityContent' => [$this, 'block_activityContent'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroActivityList/ActivityList/js/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroActivityList/ActivityList/js/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroActivityList/ActivityList/js/view.html.twig"));

        // line 1
        echo "<script type=\"text/html\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1, $this->source); })()), "html_attr");
        echo "\">
    <% var labelId = _.uniqueId('label-') %>
    <% var regionId = _.uniqueId('region-') %>
    <div class=\"accordion-group\">
        <div class=\"accordion-heading\">
            <a href=\"#<%- regionId %>\" data-toggle=\"collapse\" aria-expanded=\"<%- collapsed ? 'false' : 'true' %>\"
               aria-controls=\"<%- regionId %>\"
               class=\"btn btn-icon btn-light-custom accordion-icon<% if (collapsed) { %> collapsed<% } %>\"
               title=\"<%- _.__(collapsed ? 'Expand' : 'Collapse')%>\"
               data-collapsed-title=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Expand"), "html", null, true);
        echo "\"
               data-expanded-title=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collapse"), "html", null, true);
        echo "\"
               role=\"button\"
            >
                <span class=\"fa-icon\"></span>
            </a>
            <div class=\"icon\">
                ";
        // line 17
        $this->displayBlock('activityIcon', $context, $blocks);
        // line 19
        echo "            </div>
            <div id=\"<%- labelId %>\" class=\"details\">
                ";
        // line 21
        $this->displayBlock('activityDetails', $context, $blocks);
        // line 23
        echo "            </div>
            <div class=\"extra-info\">
                <div class=\"message-item message\">
                    <div class=\"message-description\">
                        <b class=\"message-subject\"><%- _.unescape(subject) %></b>
                        <% if (!_.isUndefined(description) && !_.isEmpty(description)) { %>
                        - <%= description %>
                        <% } %>
                    </div>
                    ";
        // line 32
        $this->displayBlock('activityShortMessage', $context, $blocks);
        // line 34
        echo "                </div>
                <div class=\"comment-count\"<% if (!commentCount) { %> style=\"display:none\"<% } %>
                    title=\"<%- _.__('oro.activitylist.comment.quantity_label') %>\">
                    <span class=\"fa-comment\" aria-hidden=\"true\"></span><span class=\"count\"><%- commentCount %></span>
                </div>
            ";
        // line 39
        $this->displayBlock('activityDate', $context, $blocks);
        // line 44
        echo "            </div>
            <div class=\"actions\">
                ";
        // line 46
        $this->displayBlock('activityActions', $context, $blocks);
        // line 48
        echo "            </div>
        </div>
        <div id=\"<%- regionId %>\" role=\"region\" aria-labelledby=\"<%- labelId %>\" class=\"accordion-body collapse<% if (!collapsed) { %> show<% } %>\">
            <div class=\"message\">
                ";
        // line 52
        $this->displayBlock('activityContent', $context, $blocks);
        // line 64
        echo "            </div>
        </div>
    </div>
</script>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
    public function block_activityIcon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("activityIcon", $this->getTemplateName(), 17));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityIcon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityIcon"));

        // line 18
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 21
    public function block_activityDetails($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("activityDetails", $this->getTemplateName(), 21));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityDetails"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityDetails"));

        // line 22
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 32
    public function block_activityShortMessage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("activityShortMessage", $this->getTemplateName(), 32));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityShortMessage"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityShortMessage"));

        // line 33
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 39
    public function block_activityDate($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("activityDate", $this->getTemplateName(), 39));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityDate"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityDate"));

        // line 40
        echo "                <div class=\"created-at\">
                    <span class=\"date\"><%- updatedAt %></span>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 46
    public function block_activityActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("activityActions", $this->getTemplateName(), 46));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityActions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityActions"));

        // line 47
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 52
    public function block_activityContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("activityContent", $this->getTemplateName(), 52));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityContent"));

        // line 53
        echo "                    <div class=\"activity-item-content\">
                        ";
        // line 55
        echo "                        <div class=\"info responsive-cell\"></div>
                        <% if (has_comments && commentable) { %>
                        <div class=\"responsive-cell\">
                            ";
        // line 59
        echo "                            <div class=\"comment\"></div>
                        </div>
                    </div>
                    <% } %>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroActivityList/ActivityList/js/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 59,  288 => 55,  285 => 53,  272 => 52,  259 => 47,  246 => 46,  230 => 40,  217 => 39,  204 => 33,  191 => 32,  178 => 22,  165 => 21,  152 => 18,  139 => 17,  122 => 64,  120 => 52,  114 => 48,  112 => 46,  108 => 44,  106 => 39,  99 => 34,  97 => 32,  86 => 23,  84 => 21,  80 => 19,  78 => 17,  69 => 11,  65 => 10,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/html\" id=\"{{ id|e('html_attr')|raw }}\">
    <% var labelId = _.uniqueId('label-') %>
    <% var regionId = _.uniqueId('region-') %>
    <div class=\"accordion-group\">
        <div class=\"accordion-heading\">
            <a href=\"#<%- regionId %>\" data-toggle=\"collapse\" aria-expanded=\"<%- collapsed ? 'false' : 'true' %>\"
               aria-controls=\"<%- regionId %>\"
               class=\"btn btn-icon btn-light-custom accordion-icon<% if (collapsed) { %> collapsed<% } %>\"
               title=\"<%- _.__(collapsed ? 'Expand' : 'Collapse')%>\"
               data-collapsed-title=\"{{ 'Expand'|trans }}\"
               data-expanded-title=\"{{ 'Collapse'|trans }}\"
               role=\"button\"
            >
                <span class=\"fa-icon\"></span>
            </a>
            <div class=\"icon\">
                {% block activityIcon %}
                {% endblock %}
            </div>
            <div id=\"<%- labelId %>\" class=\"details\">
                {% block activityDetails %}
                {% endblock %}
            </div>
            <div class=\"extra-info\">
                <div class=\"message-item message\">
                    <div class=\"message-description\">
                        <b class=\"message-subject\"><%- _.unescape(subject) %></b>
                        <% if (!_.isUndefined(description) && !_.isEmpty(description)) { %>
                        - <%= description %>
                        <% } %>
                    </div>
                    {% block activityShortMessage %}
                    {% endblock %}
                </div>
                <div class=\"comment-count\"<% if (!commentCount) { %> style=\"display:none\"<% } %>
                    title=\"<%- _.__('oro.activitylist.comment.quantity_label') %>\">
                    <span class=\"fa-comment\" aria-hidden=\"true\"></span><span class=\"count\"><%- commentCount %></span>
                </div>
            {% block activityDate %}
                <div class=\"created-at\">
                    <span class=\"date\"><%- updatedAt %></span>
                </div>
            {% endblock %}
            </div>
            <div class=\"actions\">
                {% block activityActions %}
                {% endblock %}
            </div>
        </div>
        <div id=\"<%- regionId %>\" role=\"region\" aria-labelledby=\"<%- labelId %>\" class=\"accordion-body collapse<% if (!collapsed) { %> show<% } %>\">
            <div class=\"message\">
                {% block activityContent %}
                    <div class=\"activity-item-content\">
                        {# Do NOT remove. Placeholder for activity view #}
                        <div class=\"info responsive-cell\"></div>
                        <% if (has_comments && commentable) { %>
                        <div class=\"responsive-cell\">
                            {# placeholder for comments block#}
                            <div class=\"comment\"></div>
                        </div>
                    </div>
                    <% } %>
                {% endblock %}
            </div>
        </div>
    </div>
</script>
", "@OroActivityList/ActivityList/js/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ActivityListBundle/Resources/views/ActivityList/js/view.html.twig");
    }
}
