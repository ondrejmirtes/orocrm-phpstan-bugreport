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

/* @OroActivityList/ActivityList/widget/activities.html.twig */
class __TwigTemplate_8e0bfbeb3dbd0c266d218ebfa42778eb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'widget_content' => [$this, 'block_widget_content'],
            'widget_actions' => [$this, 'block_widget_actions'],
            'items_container' => [$this, 'block_items_container'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroActivityList/ActivityList/widget/activities.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroActivityList/ActivityList/widget/activities.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroActivityList/ActivityList/widget/activities.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroActivityList/ActivityList/widget/activities.html.twig", 1)->unwrap();
        // line 2
        $context["containerExtraClass"] = ((array_key_exists("containerExtraClass", $context)) ? ((isset($context["containerExtraClass"]) || array_key_exists("containerExtraClass", $context) ? $context["containerExtraClass"] : (function () { throw new RuntimeError('Variable "containerExtraClass" does not exist.', 2, $this->source); })())) : (""));
        // line 3
        echo "<div class=\"widget-content activity-list ";
        echo twig_escape_filter($this->env, (isset($context["containerExtraClass"]) || array_key_exists("containerExtraClass", $context) ? $context["containerExtraClass"] : (function () { throw new RuntimeError('Variable "containerExtraClass" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 4
        $context["pager"] = ["current" => 1, "pagesize" => $this->extensions['Oro\Bundle\ConfigBundle\Twig\ConfigExtension']->getConfigValue("oro_activity_list.per_page"), "total" => 1, "count" => 1, "sortingField" => $this->extensions['Oro\Bundle\ConfigBundle\Twig\ConfigExtension']->getConfigValue("oro_activity_list.sorting_field")];
        // line 11
        echo "    ";
        $this->displayBlock('widget_content', $context, $blocks);
        // line 100
        echo "</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("widget_content", $this->getTemplateName(), 11));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_content"));

        // line 12
        echo "
        ";
        // line 13
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("oro_activity_list_before", $context)) ? (_twig_default_filter((isset($context["oro_activity_list_before"]) || array_key_exists("oro_activity_list_before", $context) ? $context["oro_activity_list_before"] : (function () { throw new RuntimeError('Variable "oro_activity_list_before" does not exist.', 13, $this->source); })()), "oro_activity_list_before")) : ("oro_activity_list_before")), ["entityClass" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), true), "entityId" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]);
        // line 14
        echo "
        ";
        // line 15
        $this->displayBlock('widget_actions', $context, $blocks);
        // line 53
        echo "        ";
        $this->displayBlock('items_container', $context, $blocks);
        // line 96
        echo "
        ";
        // line 97
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("oro_activity_list_after", $context)) ? (_twig_default_filter((isset($context["oro_activity_list_after"]) || array_key_exists("oro_activity_list_after", $context) ? $context["oro_activity_list_after"] : (function () { throw new RuntimeError('Variable "oro_activity_list_after" does not exist.', 97, $this->source); })()), "oro_activity_list_after")) : ("oro_activity_list_after")), ["entityClass" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 97, $this->source); })()), true), "entityId" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97)]);
        // line 98
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 15
    public function block_widget_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("widget_actions", $this->getTemplateName(), 15));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_actions"));

        // line 16
        echo "        <div class=\"grid-toolbar\">
            <div class=\"filter-box\">
                <div class=\"filter-container\"></div>
            </div>
            <div class=\"pagination\" role=\"navigation\">
                ";
        // line 21
        $context["direction"] = ($this->extensions['Oro\Bundle\ConfigBundle\Twig\ConfigExtension']->getConfigValue("oro_activity_list.sorting_direction") == "DESC");
        // line 22
        echo "                ";
        $context["prevButtonText"] = (((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 22, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activitylist.pagination.newer")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activitylist.pagination.older")));
        // line 23
        echo "                ";
        $context["nextButtonText"] = (((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 23, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activitylist.pagination.older")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.activitylist.pagination.newer")));
        // line 24
        echo "
                <button data-section=\"top\"
                        data-action-name=\"goto_previous\"
                        class=\"btn pagination-previous\"
                        title=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["prevButtonText"]) || array_key_exists("prevButtonText", $context) ? $context["prevButtonText"] : (function () { throw new RuntimeError('Variable "prevButtonText" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "\"
                        ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 29, $this->source); })()), "current", [], "any", false, false, false, 29) == 1)) {
            echo "disabled=";
        }
        // line 30
        echo "                >
                    <span class=\"fa-chevron-left\" aria-hidden=\"true\"></span>
                    ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["prevButtonText"]) || array_key_exists("prevButtonText", $context) ? $context["prevButtonText"] : (function () { throw new RuntimeError('Variable "prevButtonText" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "
                </button>
                <button data-section=\"top\"
                        data-action-name=\"goto_next\"
                        class=\"btn icon-end pagination-next\"
                        title=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["nextButtonText"]) || array_key_exists("nextButtonText", $context) ? $context["nextButtonText"] : (function () { throw new RuntimeError('Variable "nextButtonText" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "\"
                >
                    ";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["nextButtonText"]) || array_key_exists("nextButtonText", $context) ? $context["nextButtonText"] : (function () { throw new RuntimeError('Variable "nextButtonText" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "
                    <span class=\"fa-chevron-right\" aria-hidden=\"true\"></span>
                </button>
            </div>
            <div class=\"actions-panel\">
                ";
        // line 44
        echo twig_call_macro($macros["UI"], "macro_clientLink", [["aCss" => "action btn btn-icon", "iCss" => "fa-refresh", "label" => (" " . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Refresh")), "dataAttributes" => ["action-name" => "refresh", "section" => "top"]]], 44, $context, $this->getSourceContext());
        // line 49
        echo "
            </div>
        </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 53
    public function block_items_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("items_container", $this->getTemplateName(), 53));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "items_container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "items_container"));

        // line 54
        echo "            ";
        $context["options"] = ["widgetId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 55
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "get", [0 => "_wid"], "method", false, false, false, 55), "ignoreHead" => ($this->extensions['Oro\Bundle\ConfigBundle\Twig\ConfigExtension']->getConfigValue("oro_activity_list.grouping") == false), "activityListData" => $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_activity_list_api_get_list", ["entityClass" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(        // line 60
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 60, $this->source); })()), true), "entityId" => twig_get_attribute($this->env, $this->source,         // line 61
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61)])), "activityListOptions" => ["configuration" =>         // line 65
(isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 65, $this->source); })()), "template" => "#template-activity-list", "itemTemplate" => "#template-activity-item", "urls" => ["route" => "oro_activity_list_api_get_list", "parameters" => ["entityClass" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(        // line 71
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 71, $this->source); })()), true), "entityId" => twig_get_attribute($this->env, $this->source,         // line 72
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 72, $this->source); })()), "id", [], "any", false, false, false, 72)]], "loadingContainerSelector" => ".activity-list", "pager" =>         // line 76
(isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 76, $this->source); })()), "dateRangeFilterMetadata" =>         // line 77
(isset($context["dateRangeFilterMetadata"]) || array_key_exists("dateRangeFilterMetadata", $context) ? $context["dateRangeFilterMetadata"] : (function () { throw new RuntimeError('Variable "dateRangeFilterMetadata" does not exist.', 77, $this->source); })()), "routes" => []], "commentOptions" => ["listTemplate" => "#template-activity-item-comment", "canCreate" => $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_comment_create")]];
        // line 85
        echo "
            <div class=\"container-fluid accordion\"
                data-page-component-module=\"oroactivitylist/js/app/components/activity-list-component\"
                data-page-component-options=\"";
        // line 88
        echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 88, $this->source); })())), "html", null, true);
        echo "\"></div>
            ";
        // line 89
        $this->loadTemplate("@OroActivityList/ActivityList/js/list.html.twig", "@OroActivityList/ActivityList/widget/activities.html.twig", 89)->display(twig_array_merge($context, ["id" => "template-activity-list"]));
        // line 90
        echo "            ";
        $this->loadTemplate("@OroActivityList/ActivityList/js/view.html.twig", "@OroActivityList/ActivityList/widget/activities.html.twig", 90)->display(twig_array_merge($context, ["id" => "template-activity-item"]));
        // line 91
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 91, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["activityClass"] => $context["activityOptions"]) {
            // line 92
            echo "                ";
            $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["activityOptions"], "template", [], "any", false, false, false, 92), "@OroActivityList/ActivityList/widget/activities.html.twig", 92)->display(twig_array_merge($context, ["id" => ("template-activity-item-" . $context["activityClass"])]));
            // line 93
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['activityClass'], $context['activityOptions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "            ";
        $this->loadTemplate("@OroComment/Comment/js/list.html.twig", "@OroActivityList/ActivityList/widget/activities.html.twig", 94)->display(twig_array_merge($context, ["id" => "template-activity-item-comment"]));
        // line 95
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroActivityList/ActivityList/widget/activities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 95,  280 => 94,  266 => 93,  263 => 92,  245 => 91,  242 => 90,  240 => 89,  236 => 88,  231 => 85,  229 => 77,  228 => 76,  227 => 72,  226 => 71,  225 => 65,  224 => 61,  223 => 60,  222 => 55,  220 => 54,  207 => 53,  191 => 49,  189 => 44,  181 => 39,  176 => 37,  168 => 32,  164 => 30,  160 => 29,  156 => 28,  150 => 24,  147 => 23,  144 => 22,  142 => 21,  135 => 16,  122 => 15,  108 => 98,  106 => 97,  103 => 96,  100 => 53,  98 => 15,  95 => 14,  93 => 13,  90 => 12,  77 => 11,  63 => 100,  60 => 11,  58 => 4,  53 => 3,  51 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% set containerExtraClass = containerExtraClass is defined ? containerExtraClass : '' %}
<div class=\"widget-content activity-list {{ containerExtraClass }}\">
    {% set pager = {
        current: 1,
        pagesize: oro_config_value('oro_activity_list.per_page'),
        total: 1,
        count: 1,
        sortingField: oro_config_value('oro_activity_list.sorting_field')
    } %}
    {% block widget_content %}

        {% placeholder oro_activity_list_before with {entityClass: oro_class_name(entity, true), entityId: entity.id} %}

        {% block widget_actions %}
        <div class=\"grid-toolbar\">
            <div class=\"filter-box\">
                <div class=\"filter-container\"></div>
            </div>
            <div class=\"pagination\" role=\"navigation\">
                {% set direction = oro_config_value('oro_activity_list.sorting_direction') == 'DESC' %}
                {% set prevButtonText = direction ? 'oro.activitylist.pagination.newer'|trans : 'oro.activitylist.pagination.older'|trans %}
                {% set nextButtonText = direction ? 'oro.activitylist.pagination.older'|trans : 'oro.activitylist.pagination.newer'|trans %}

                <button data-section=\"top\"
                        data-action-name=\"goto_previous\"
                        class=\"btn pagination-previous\"
                        title=\"{{ prevButtonText }}\"
                        {% if pager.current == 1 %}disabled={% endif %}
                >
                    <span class=\"fa-chevron-left\" aria-hidden=\"true\"></span>
                    {{ prevButtonText }}
                </button>
                <button data-section=\"top\"
                        data-action-name=\"goto_next\"
                        class=\"btn icon-end pagination-next\"
                        title=\"{{ nextButtonText }}\"
                >
                    {{ nextButtonText }}
                    <span class=\"fa-chevron-right\" aria-hidden=\"true\"></span>
                </button>
            </div>
            <div class=\"actions-panel\">
                {{ UI.clientLink({
                    'aCss': 'action btn btn-icon',
                    'iCss': 'fa-refresh',
                    'label': ' ' ~ ('Refresh'|trans),
                    'dataAttributes': {'action-name': 'refresh', 'section': 'top'}
                }) }}
            </div>
        </div>
        {% endblock %}
        {% block items_container %}
            {% set options = {
                widgetId: app.request.get('_wid'),
                ignoreHead: oro_config_value('oro_activity_list.grouping') == false,
                activityListData: render(path(
                    'oro_activity_list_api_get_list',
                    {
                        entityClass: oro_class_name(entity, true),
                        entityId: entity.id
                    }
                )),
                activityListOptions: {
                    configuration: configuration,
                    template: '#template-activity-list',
                    itemTemplate: '#template-activity-item',
                    urls: {
                        route: 'oro_activity_list_api_get_list',
                        parameters: {
                            entityClass: oro_class_name(entity, true),
                            entityId: entity.id
                        }
                    },
                    loadingContainerSelector: '.activity-list',
                    pager: pager,
                    dateRangeFilterMetadata: dateRangeFilterMetadata,
                    routes: {}
                },
                commentOptions: {
                    listTemplate: '#template-activity-item-comment',
                    canCreate:    is_granted('oro_comment_create')
                }
            } %}

            <div class=\"container-fluid accordion\"
                data-page-component-module=\"oroactivitylist/js/app/components/activity-list-component\"
                data-page-component-options=\"{{ options|json_encode }}\"></div>
            {% include '@OroActivityList/ActivityList/js/list.html.twig' with {'id': 'template-activity-list'} %}
            {% include '@OroActivityList/ActivityList/js/view.html.twig' with {'id': 'template-activity-item'} %}
            {% for activityClass, activityOptions in configuration %}
                {% include activityOptions.template with {'id': ('template-activity-item-' ~ activityClass) } %}
            {% endfor %}
            {% include '@OroComment/Comment/js/list.html.twig' with {'id': 'template-activity-item-comment'} %}
        {% endblock %}

        {% placeholder oro_activity_list_after with {entityClass: oro_class_name(entity, true), entityId: entity.id} %}

    {% endblock %}
</div>
", "@OroActivityList/ActivityList/widget/activities.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ActivityListBundle/Resources/views/ActivityList/widget/activities.html.twig");
    }
}
