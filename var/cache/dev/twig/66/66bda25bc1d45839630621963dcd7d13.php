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

/* @OroMarketingActivity/MarketingActivity/js/marketingActivitySectionItem.html.twig */
class __TwigTemplate_caefb40d22d8ea1cdd5fd4996614743d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'activityContent' => [$this, 'block_activityContent'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroMarketingActivity/MarketingActivity/js/marketingActivitySectionItem.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroMarketingActivity/MarketingActivity/js/marketingActivitySectionItem.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroMarketingActivity/MarketingActivity/js/marketingActivitySectionItem.html.twig"));

        // line 1
        echo "<script type=\"text/html\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1, $this->source); })()), "html_attr");
        echo "\">
    <% var labelId = _.uniqueId('label-') %>
    <% var regionId = _.uniqueId('region-') %>
    <div class=\"accordion-group\">
        <div class=\"accordion-heading clearfix\">
            <a href=\"#<%- regionId %>\" data-toggle=\"collapse\" aria-expanded=\"<%- collapsed ? 'false' : 'true' %>\"
               aria-controls=\"<%- regionId %>\"
               class=\"accordion-icon accordion-toggle<% if (collapsed) { %> collapsed<% } %>\"
               title=\"<%- _.__(collapsed ? 'Expand' : 'Collapse')%>\"
               data-collapsed-title=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Expand"), "html", null, true);
        echo "\"
               data-expanded-title=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collapse"), "html", null, true);
        echo "\"></a>
            <div class=\"icon\">
                <span class=\"fa-volume-up\" aria-hidden=\"true\"></span>
            </div>
            <div class=\"campaign-name\" id=\"<%- labelId %>\">
                <strong><%- campaignName %></strong>
            </div>
            <div class=\"actions\">
                ";
        // line 19
        ob_start();
        // line 20
        echo "                    <a href=\"<%- routing.generate('oro_campaign_view', {'id': id}) %>\"
                       title=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketingactivity.view_campaign.label"), "html", null, true);
        echo "\"><i
                                class=\"fa-eye hide-text\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketingactivity.view_campaign.label"), "html", null, true);
        echo "</i>
                        ";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketingactivity.view_campaign.label"), "html", null, true);
        echo "
                    </a>
                ";
        $context["action"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 26
        echo "                ";
        $context["actions"] = [0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 26, $this->source); })())];
        // line 27
        echo "
                <% var togglerId = _.uniqueId('dropdown-') %>
                <div class=\"vertical-actions activity-actions\">
                    <a href=\"#\" role=\"button\" id=\"<%- togglerId %>\" data-placement=\"left-start\" data-toggle=\"dropdown\" class=\"btn btn-icon btn-lighter dropdown-toggle activity-item\"
                       aria-haspopup=\"true\" aria-expanded=\"false\" aria-label=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketingactivity.actions.label"), "html", null, true);
        echo "\">...</a>
                    <ul class=\"dropdown-menu activity-item\" role=\"menu\" aria-labelledby=\"<%- togglerId %>\">
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("actions", $context)) ? (_twig_default_filter((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 33, $this->source); })()), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 34
            echo "                            <li class=\"activity-action\">";
            echo $context["action"];
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </ul>
                </div>
            </div>
            <div class=\"extra-info\">
                <div class=\"marketing-activity-type\">
                    ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketingactivity.last_event_type.label"), "html", null, true);
        echo ": <%- eventType %>
                </div>
                <div class=\"marketing-activity-date\">
                    ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.marketingactivity.last_activity_date.label"), "html", null, true);
        echo ": <%- dateFormatter.formatDateTime(eventDate) %>
                </div>
            </div>
        </div>
        <div id=\"<%- regionId %>\" role=\"region\" aria-labelledby=\"<%- labelId %>\" class=\"accordion-body collapse<% if (!collapsed) { %> show<% } %>\">
            <div class=\"message\">
                ";
        // line 50
        $this->displayBlock('activityContent', $context, $blocks);
        // line 56
        echo "            </div>
        </div>
    </div>
</script>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 50
    public function block_activityContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("activityContent", $this->getTemplateName(), 50));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "activityContent"));

        // line 51
        echo "                    <div class=\"activity-item-content\">
                        ";
        // line 53
        echo "                        <div class=\"info responsive-cell\"></div>
                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroMarketingActivity/MarketingActivity/js/marketingActivitySectionItem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 53,  175 => 51,  162 => 50,  145 => 56,  143 => 50,  134 => 44,  128 => 41,  121 => 36,  112 => 34,  108 => 33,  103 => 31,  97 => 27,  94 => 26,  88 => 23,  84 => 22,  80 => 21,  77 => 20,  75 => 19,  64 => 11,  60 => 10,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/html\" id=\"{{ id|e('html_attr')|raw }}\">
    <% var labelId = _.uniqueId('label-') %>
    <% var regionId = _.uniqueId('region-') %>
    <div class=\"accordion-group\">
        <div class=\"accordion-heading clearfix\">
            <a href=\"#<%- regionId %>\" data-toggle=\"collapse\" aria-expanded=\"<%- collapsed ? 'false' : 'true' %>\"
               aria-controls=\"<%- regionId %>\"
               class=\"accordion-icon accordion-toggle<% if (collapsed) { %> collapsed<% } %>\"
               title=\"<%- _.__(collapsed ? 'Expand' : 'Collapse')%>\"
               data-collapsed-title=\"{{ 'Expand'|trans }}\"
               data-expanded-title=\"{{ 'Collapse'|trans }}\"></a>
            <div class=\"icon\">
                <span class=\"fa-volume-up\" aria-hidden=\"true\"></span>
            </div>
            <div class=\"campaign-name\" id=\"<%- labelId %>\">
                <strong><%- campaignName %></strong>
            </div>
            <div class=\"actions\">
                {% set action %}
                    <a href=\"<%- routing.generate('oro_campaign_view', {'id': id}) %>\"
                       title=\"{{ 'oro.marketingactivity.view_campaign.label'|trans }}\"><i
                                class=\"fa-eye hide-text\">{{ 'oro.marketingactivity.view_campaign.label'|trans }}</i>
                        {{ 'oro.marketingactivity.view_campaign.label'|trans }}
                    </a>
                {% endset %}
                {% set actions = [action] %}

                <% var togglerId = _.uniqueId('dropdown-') %>
                <div class=\"vertical-actions activity-actions\">
                    <a href=\"#\" role=\"button\" id=\"<%- togglerId %>\" data-placement=\"left-start\" data-toggle=\"dropdown\" class=\"btn btn-icon btn-lighter dropdown-toggle activity-item\"
                       aria-haspopup=\"true\" aria-expanded=\"false\" aria-label=\"{{ 'oro.marketingactivity.actions.label'|trans }}\">...</a>
                    <ul class=\"dropdown-menu activity-item\" role=\"menu\" aria-labelledby=\"<%- togglerId %>\">
                        {% for action in actions|default([]) %}
                            <li class=\"activity-action\">{{ action|raw }}</li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
            <div class=\"extra-info\">
                <div class=\"marketing-activity-type\">
                    {{ 'oro.marketingactivity.last_event_type.label'|trans }}: <%- eventType %>
                </div>
                <div class=\"marketing-activity-date\">
                    {{ 'oro.marketingactivity.last_activity_date.label'|trans }}: <%- dateFormatter.formatDateTime(eventDate) %>
                </div>
            </div>
        </div>
        <div id=\"<%- regionId %>\" role=\"region\" aria-labelledby=\"<%- labelId %>\" class=\"accordion-body collapse<% if (!collapsed) { %> show<% } %>\">
            <div class=\"message\">
                {% block activityContent %}
                    <div class=\"activity-item-content\">
                        {# Do NOT remove. Placeholder for activity view #}
                        <div class=\"info responsive-cell\"></div>
                    </div>
                {% endblock %}
            </div>
        </div>
    </div>
</script>
", "@OroMarketingActivity/MarketingActivity/js/marketingActivitySectionItem.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/marketing/src/Oro/Bundle/MarketingActivityBundle/Resources/views/MarketingActivity/js/marketingActivitySectionItem.html.twig");
    }
}
