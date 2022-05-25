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

/* @OroEmail/macros.html.twig */
class __TwigTemplate_6c3e0be5d430fc2aae8b2518fa0d49c2 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/macros.html.twig"));

        // line 273
        echo "
";
        // line 297
        echo "
";
        // line 377
        echo "
";
        // line 443
        echo "
";
        // line 457
        echo "
";
        // line 483
        echo "
";
        // line 503
        echo "
";
        // line 522
        echo "
";
        // line 587
        echo "
";
        // line 597
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function macro_renderAvailableVariablesWidget($__entityName__ = null, $__entityChoiceFieldId__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entityName" => $__entityName__,
            "entityChoiceFieldId" => $__entityChoiceFieldId__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderAvailableVariablesWidget"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderAvailableVariablesWidget"));

            // line 2
            echo "    ";
            $context["system"] = "oro-email-template-variables-system";
            // line 3
            echo "    ";
            $context["systemTab"] = ((isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 3, $this->source); })()) . "-tab");
            // line 4
            echo "    ";
            $context["entity"] = "oro-email-template-variables-entity";
            // line 5
            echo "    ";
            $context["entityTab"] = ((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()) . "-tab");
            // line 6
            echo "    <script type=\"text/template\" id=\"oro-email-template-variables-template\">
        <div class=\"emailtemplate-variables oro-tabs tabbable\">
            <div class=\"oro-tabs__head\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li class=\"nav-item\" >
                        <a id=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["systemTab"]) || array_key_exists("systemTab", $context) ? $context["systemTab"] : (function () { throw new RuntimeError('Variable "systemTab" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "\"
                           href=\"#";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "\"
                           class=\"nav-link active\"
                           data-target=\"#";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "\"
                           data-toggle=\"tab\"
                           role=\"tab\"
                           aria-controls=\"";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "\"
                           aria-selected=\"true\"
                        >
                            ";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.emailtemplate.variables.system"), "html", null, true);
            echo "
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a id=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["entityTab"]) || array_key_exists("entityTab", $context) ? $context["entityTab"] : (function () { throw new RuntimeError('Variable "entityTab" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\"
                           href=\"#";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 25, $this->source); })()), "html", null, true);
            echo "\"
                           class=\"nav-link\"
                           data-target=\"#";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "\"
                           data-toggle=\"tab\"
                           role=\"tab\"
                           aria-controls=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "\"
                           aria-selected=\"false\"
                        >
                            ";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.emailtemplate.variables.entity"), "html", null, true);
            echo "
                        </a>
                    </li>
                </ul>
            </div>
            <div class=\"oro-tabs__content\">
                <div class=\"tab-content\">
                    <div id=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 40, $this->source); })()), "html", null, true);
            echo "\"
                         class=\"variables tab-pane active\"
                         role=\"tabpanel\"
                         aria-labelledby=\"";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["systemTab"]) || array_key_exists("systemTab", $context) ? $context["systemTab"] : (function () { throw new RuntimeError('Variable "systemTab" does not exist.', 43, $this->source); })()), "html", null, true);
            echo "\"
                    >
                        <%= variables.system %>
                    </div>
                    <div id=\"";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 47, $this->source); })()), "html", null, true);
            echo "\"
                         class=\"variables tab-pane\"
                         role=\"tabpanel\"
                         aria-labelledby=\"";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["entityTab"]) || array_key_exists("entityTab", $context) ? $context["entityTab"] : (function () { throw new RuntimeError('Variable "entityTab" does not exist.', 50, $this->source); })()), "html", null, true);
            echo "\"
                    >
                    </div>
                </div>
            </div>
        </div>
    </script>
    <script type=\"text/template\" id=\"oro-email-template-variables-system-template\">
        <ul class=\"nav\">
            <% _.each(variables, function(variable, varName) { %>
            <li>
                <a href=\"#\"
                   class=\"variable\"
                   title=\"<%- _.__('oro.email.emailtemplate.variable_title', {'variable_label': variable.label}) %>\">";
            // line 63
            echo "{{ <%- root %>.<%- varName %><% if(variable.filter){%>|<%- variable.filter %><% } %> }}";
            echo "</a>
                <span>&ndash; <%- variable.label %></span>
            </li>
            <% }); %>
        </ul>
    </script>
    <script type=\"text/template\" id=\"oro-email-template-variables-entity-variable-template\">
        <li>
            <a href=\"#\"
               class=\"variable\"
               title=\"<%- _.__('oro.email.emailtemplate.variable_title', {'variable_label': variable.label}) %>\"
            >";
            // line 74
            echo "{{ <%- varValue %> }}";
            echo "</a>
            <span>&ndash;</span>
            <ul class=\"caption\">
                <% for (var i = 1; i < breadcrumbs.length; i++) { %>
                <li>
                    <span><%- pathLabels[breadcrumbs[i]] %></span>
                    <span>/</span>
                </li>
                <% } %>
                <li><%- variable.label %></li>
            </ul>
        </li>
    </script>
    <script type=\"text/template\" id=\"oro-email-template-variables-entity-template\">
        <% var breadcrumbs = path.split('/'); breadcrumbs[0] = root; %>
        <ul class=\"breadcrumb\">
            <% var breadcrumbPath = ''; %>
            <% for (var i = 0; i < breadcrumbs.length; i++) { %>
            <% breadcrumbPath += '/' + breadcrumbs[i]; %>
            <% breadcrumbItemLabel = (i === 0 ? entityLabel : pathLabels[breadcrumbs[i]]); %>
            <li<% if (i === breadcrumbs.length - 1) { %> class=\"active\"<% } %>>
                <% if (i !== breadcrumbs.length - 1) { %>
                <a href=\"#\"
                   class=\"reference\"
                   data-path=\"<%- breadcrumbPath.substring(root.length + 1) %>\"><%- breadcrumbItemLabel %></a>
                <span class=\"divider\">/&nbsp;</span>
                <% } else { %>
                    <%- breadcrumbItemLabel %>
                <% } %>
            </li>
            <% } %>
        </ul>
        <% var varPrefix = path.split('/'); varPrefix[0] = root; varPrefix = varPrefix.join('.'); %>
        <% if (!_.isEmpty(fields) || !_.isEmpty(relations)) { %>
        <ul class=\"nav groups\">
            <% if (!_.isEmpty(fields)) { %>
            <li>
                <div class=\"group-label\"><%- _.__('oro.entity.field_choice.fields') %></div>
                <ul class=\"nav\">
                <% var variableTemplate =  _.template(\$('#oro-email-template-variables-entity-variable-template').html()) %>
                <% _.each(fields, function(variable, varName) { %>
                    <%= variableTemplate({
                        varValue:    varPrefix + '.' + varName,
                        breadcrumbs: breadcrumbs,
                        pathLabels:  pathLabels,
                        variable:    variable
                    }) %>
                    ";
            // line 133
            echo "
                    ";
            // line 151
            echo "                <% }); %>
                </ul>
            </li>
            <% } %>
            <% if (!_.isEmpty(relations)) { %>
            <li>
                <div class=\"group-label\"><%- _.__('oro.entity.field_choice.relations') %></div>
                <ul class=\"nav\">
                    <% _.each(relations, function(variable, varName) { %>
                    <li>
                        <a href=\"#\"
                           class=\"reference\"
                           data-path=\"<%- path + '/' + varName %>\"
                           title=\"<%- _.__('oro.email.emailtemplate.reference_title', {'variable_label': variable.label}) %>\">";
            // line 164
            echo "{{ <%- varPrefix %>.<%- varName %> }}";
            echo "</a>
                        <span>&ndash; <%- variable.label %></span>
                    </li>
                    <% }); %>
                </ul>
            </li>
            <% } %>
        </ul>
        <% } %>
    </script>

    ";
            // line 175
            $context["options"] = ["name" => "email-template-variables", "entityChoice" => ("#" .             // line 177
(isset($context["entityChoiceFieldId"]) || array_key_exists("entityChoiceFieldId", $context) ? $context["entityChoiceFieldId"] : (function () { throw new RuntimeError('Variable "entityChoiceFieldId" does not exist.', 177, $this->source); })())), "view" => ["templateSelector" => "#oro-email-template-variables-template", "sectionTemplateSelector" => "#oro-email-template-variables-{sectionName}-template", "sectionContentSelector" => "#oro-email-template-variables-{sectionName}", "sectionTabSelector" => "#oro-email-template-variables-{sectionName}-tab"], "model" => ["attributes" => $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_api_get_emailtemplate_variables")), "entityName" =>             // line 186
(isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 186, $this->source); })()), "entityLabel" => ((            // line 187
(isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 187, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassConfigValue((isset($context["entityName"]) || array_key_exists("entityName", $context) ? $context["entityName"] : (function () { throw new RuntimeError('Variable "entityName" does not exist.', 187, $this->source); })()), "label"))) : (""))]];
            // line 190
            echo "    <div data-page-component-module=\"oroemail/js/app/components/email-variable-component\"
         data-page-component-options=\"";
            // line 191
            echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 191, $this->source); })())), "html", null, true);
            echo "\"
         data-page-component-name=\"email-template-variables\"></div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 199
    public function macro_email_address_text($__emailAddress__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "emailAddress" => $__emailAddress__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "email_address_text"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "email_address_text"));

            // line 200
            echo twig_escape_filter($this->env, _twig_default_filter($this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName(twig_get_attribute($this->env, $this->source, (isset($context["emailAddress"]) || array_key_exists("emailAddress", $context) ? $context["emailAddress"] : (function () { throw new RuntimeError('Variable "emailAddress" does not exist.', 200, $this->source); })()), "owner", [], "any", false, false, false, 200)), "N/A"), "html", null, true);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 209
    public function macro_email_address_link($__emailAddress__ = null, $__label__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "emailAddress" => $__emailAddress__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "email_address_link"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "email_address_link"));

            // line 210
            $macros["emailMacros"] = $this;
            // line 211
            echo "
    ";
            // line 212
            echo twig_call_macro($macros["emailMacros"], "macro_renderEmailAddressLink", [_twig_default_filter($this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlStripTags(            // line 213
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 213, $this->source); })())), twig_call_macro($macros["emailMacros"], "macro_email_address_text", [(isset($context["emailAddress"]) || array_key_exists("emailAddress", $context) ? $context["emailAddress"] : (function () { throw new RuntimeError('Variable "emailAddress" does not exist.', 213, $this->source); })())], 213, $context, $this->getSourceContext())), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 214
(isset($context["emailAddress"]) || array_key_exists("emailAddress", $context) ? $context["emailAddress"] : (function () { throw new RuntimeError('Variable "emailAddress" does not exist.', 214, $this->source); })()), "owner", [], "any", false, false, false, 214), "class", [], "any", false, false, false, 214), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 215
(isset($context["emailAddress"]) || array_key_exists("emailAddress", $context) ? $context["emailAddress"] : (function () { throw new RuntimeError('Variable "emailAddress" does not exist.', 215, $this->source); })()), "owner", [], "any", false, false, false, 215), "id", [], "any", false, false, false, 215)], 212, $context, $this->getSourceContext());
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 225
    public function macro_renderEmailAddressLink($__label__ = null, $__ownerClass__ = null, $__ownerId__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "ownerClass" => $__ownerClass__,
            "ownerId" => $__ownerId__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderEmailAddressLink"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderEmailAddressLink"));

            // line 226
            $context["route"] = $this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassRoute((isset($context["ownerClass"]) || array_key_exists("ownerClass", $context) ? $context["ownerClass"] : (function () { throw new RuntimeError('Variable "ownerClass" does not exist.', 226, $this->source); })()));
            // line 227
            echo "    ";
            if ( !(null === (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 227, $this->source); })()))) {
                // line 228
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 228, $this->source); })()), ["id" => (isset($context["ownerId"]) || array_key_exists("ownerId", $context) ? $context["ownerId"] : (function () { throw new RuntimeError('Variable "ownerId" does not exist.', 228, $this->source); })())]), "html", null, true);
                echo "\">";
                echo $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlStripTags((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 228, $this->source); })()));
                echo "</a>
    ";
            } else {
                // line 230
                echo "        ";
                echo $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlStripTags((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 230, $this->source); })()));
                echo "
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 239
    public function macro_email_address_recipient_link($__emailAddress__ = null, $__emailAddressName__ = null, $__label__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "emailAddress" => $__emailAddress__,
            "emailAddressName" => $__emailAddressName__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "email_address_recipient_link"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "email_address_recipient_link"));

            // line 240
            $context["label"] = _twig_default_filter($this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlStripTags((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 240, $this->source); })())), ((array_key_exists("emailAddressName", $context)) ? (_twig_default_filter((isset($context["emailAddressName"]) || array_key_exists("emailAddressName", $context) ? $context["emailAddressName"] : (function () { throw new RuntimeError('Variable "emailAddressName" does not exist.', 240, $this->source); })()), "N/A")) : ("N/A")));
            // line 241
            echo "    ";
            $context["route"] = $this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassRoute(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["emailAddress"]) || array_key_exists("emailAddress", $context) ? $context["emailAddress"] : (function () { throw new RuntimeError('Variable "emailAddress" does not exist.', 241, $this->source); })()), "owner", [], "any", false, false, false, 241), "class", [], "any", false, false, false, 241));
            // line 242
            echo "    ";
            if ( !(null === (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 242, $this->source); })()))) {
                // line 243
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 243, $this->source); })()), ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["emailAddress"]) || array_key_exists("emailAddress", $context) ? $context["emailAddress"] : (function () { throw new RuntimeError('Variable "emailAddress" does not exist.', 243, $this->source); })()), "owner", [], "any", false, false, false, 243), "id", [], "any", false, false, false, 243)]), "html", null, true);
                echo "\" dir=\"ltr\">
            ";
                // line 244
                echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 244, $this->source); })()), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 246
                echo "        <bdo dir=\"ltr\">";
                echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 246, $this->source); })()), "html", null, true);
                echo "</bdo>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 258
    public function macro_email_address($__emailAddress__ = null, $__emailAddressName__ = null, $__noLink__ = null, $__knownOnly__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "emailAddress" => $__emailAddress__,
            "emailAddressName" => $__emailAddressName__,
            "noLink" => $__noLink__,
            "knownOnly" => $__knownOnly__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "email_address"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "email_address"));

            // line 259
            $macros["emailMacros"] = $this;
            // line 260
            echo "
    ";
            // line 261
            if ((null === twig_get_attribute($this->env, $this->source, (isset($context["emailAddress"]) || array_key_exists("emailAddress", $context) ? $context["emailAddress"] : (function () { throw new RuntimeError('Variable "emailAddress" does not exist.', 261, $this->source); })()), "owner", [], "any", false, false, false, 261))) {
                // line 262
                if ( !((array_key_exists("knownOnly", $context)) ? (_twig_default_filter((isset($context["knownOnly"]) || array_key_exists("knownOnly", $context) ? $context["knownOnly"] : (function () { throw new RuntimeError('Variable "knownOnly" does not exist.', 262, $this->source); })()), false)) : (false))) {
                    // line 263
                    echo $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlStripTags((isset($context["emailAddressName"]) || array_key_exists("emailAddressName", $context) ? $context["emailAddressName"] : (function () { throw new RuntimeError('Variable "emailAddressName" does not exist.', 263, $this->source); })()));
                }
            } else {
                // line 266
                if (((array_key_exists("noLink", $context)) ? (_twig_default_filter((isset($context["noLink"]) || array_key_exists("noLink", $context) ? $context["noLink"] : (function () { throw new RuntimeError('Variable "noLink" does not exist.', 266, $this->source); })()), false)) : (false))) {
                    // line 267
                    echo twig_call_macro($macros["emailMacros"], "macro_email_address_text", [(isset($context["emailAddress"]) || array_key_exists("emailAddress", $context) ? $context["emailAddress"] : (function () { throw new RuntimeError('Variable "emailAddress" does not exist.', 267, $this->source); })())], 267, $context, $this->getSourceContext());
                } else {
                    // line 269
                    echo twig_call_macro($macros["emailMacros"], "macro_email_address_link", [(isset($context["emailAddress"]) || array_key_exists("emailAddress", $context) ? $context["emailAddress"] : (function () { throw new RuntimeError('Variable "emailAddress" does not exist.', 269, $this->source); })())], 269, $context, $this->getSourceContext());
                }
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 282
    public function macro_email_address_recipient($__emailAddress__ = null, $__emailAddressName__ = null, $__noLink__ = null, $__knownOnly__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "emailAddress" => $__emailAddress__,
            "emailAddressName" => $__emailAddressName__,
            "noLink" => $__noLink__,
            "knownOnly" => $__knownOnly__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "email_address_recipient"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "email_address_recipient"));

            // line 283
            $macros["emailMacros"] = $this;
            // line 284
            echo "
    ";
            // line 285
            if ((null === twig_get_attribute($this->env, $this->source, (isset($context["emailAddress"]) || array_key_exists("emailAddress", $context) ? $context["emailAddress"] : (function () { throw new RuntimeError('Variable "emailAddress" does not exist.', 285, $this->source); })()), "owner", [], "any", false, false, false, 285))) {
                // line 286
                if ( !((array_key_exists("knownOnly", $context)) ? (_twig_default_filter((isset($context["knownOnly"]) || array_key_exists("knownOnly", $context) ? $context["knownOnly"] : (function () { throw new RuntimeError('Variable "knownOnly" does not exist.', 286, $this->source); })()), false)) : (false))) {
                    // line 287
                    echo twig_escape_filter($this->env, (isset($context["emailAddressName"]) || array_key_exists("emailAddressName", $context) ? $context["emailAddressName"] : (function () { throw new RuntimeError('Variable "emailAddressName" does not exist.', 287, $this->source); })()), "html", null, true);
                }
            } else {
                // line 290
                if (((array_key_exists("noLink", $context)) ? (_twig_default_filter((isset($context["noLink"]) || array_key_exists("noLink", $context) ? $context["noLink"] : (function () { throw new RuntimeError('Variable "noLink" does not exist.', 290, $this->source); })()), false)) : (false))) {
                    // line 291
                    echo twig_escape_filter($this->env, (isset($context["emailAddressName"]) || array_key_exists("emailAddressName", $context) ? $context["emailAddressName"] : (function () { throw new RuntimeError('Variable "emailAddressName" does not exist.', 291, $this->source); })()), "html", null, true);
                } else {
                    // line 293
                    echo twig_call_macro($macros["emailMacros"], "macro_email_address_recipient_link", [(isset($context["emailAddress"]) || array_key_exists("emailAddress", $context) ? $context["emailAddress"] : (function () { throw new RuntimeError('Variable "emailAddress" does not exist.', 293, $this->source); })()), (isset($context["emailAddressName"]) || array_key_exists("emailAddressName", $context) ? $context["emailAddressName"] : (function () { throw new RuntimeError('Variable "emailAddressName" does not exist.', 293, $this->source); })())], 293, $context, $this->getSourceContext());
                }
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 304
    public function macro_email_address_simple($__email__ = null, $__title__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "email" => $__email__,
            "title" => $__title__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "email_address_simple"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "email_address_simple"));

            // line 305
            if ( !twig_test_empty((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 305, $this->source); })()))) {
                // line 306
                echo "        ";
                $context["emailAddress"] = null;
                // line 307
                echo "        ";
                // line 308
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["email"] ?? null), "email", [], "any", true, true, false, 308)) {
                    // line 309
                    echo "            ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 309, $this->source); })()), "email", [], "any", false, false, false, 309))) {
                        // line 310
                        echo "                ";
                        $context["emailAddress"] = twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 310, $this->source); })()), "email", [], "any", false, false, false, 310);
                        // line 311
                        echo "            ";
                    }
                    // line 312
                    echo "            ";
                    // line 313
                    echo "        ";
                } else {
                    // line 314
                    echo "            ";
                    $context["emailAddress"] = (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 314, $this->source); })());
                    // line 315
                    echo "        ";
                }
                // line 316
                echo "
        ";
                // line 317
                if (twig_test_empty((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 317, $this->source); })()))) {
                    // line 318
                    echo "            ";
                    $context["title"] = (isset($context["emailAddress"]) || array_key_exists("emailAddress", $context) ? $context["emailAddress"] : (function () { throw new RuntimeError('Variable "emailAddress" does not exist.', 318, $this->source); })());
                    // line 319
                    echo "        ";
                }
                // line 320
                echo "
        ";
                // line 321
                if ((isset($context["emailAddress"]) || array_key_exists("emailAddress", $context) ? $context["emailAddress"] : (function () { throw new RuntimeError('Variable "emailAddress" does not exist.', 321, $this->source); })())) {
                    // line 322
                    echo "            <a href=\"mailto:";
                    echo twig_escape_filter($this->env, (isset($context["emailAddress"]) || array_key_exists("emailAddress", $context) ? $context["emailAddress"] : (function () { throw new RuntimeError('Variable "emailAddress" does not exist.', 322, $this->source); })()), "html_attr");
                    echo "\" aria-label=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.emailuser.email.aria_label", ["%email%" => $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlStripTags((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 322, $this->source); })()))]), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 322, $this->source); })()), "html_attr");
                    echo "\" class=\"email\"><bdo dir=\"ltr\">";
                    echo $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlStripTags((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 322, $this->source); })()));
                    echo "</bdo></a>
        ";
                }
                // line 324
                echo "    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 333
    public function macro_renderEmailWithActions($__email__ = null, $__entity__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "email" => $__email__,
            "entity" => $__entity__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderEmailWithActions"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderEmailWithActions"));

            // line 334
            $macros["emailMacros"] = $this;
            // line 335
            echo "
    ";
            // line 336
            if ( !twig_test_empty((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 336, $this->source); })()))) {
                // line 337
                ob_start();
                // line 338
                echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("email_actions", $context)) ? (_twig_default_filter((isset($context["email_actions"]) || array_key_exists("email_actions", $context) ? $context["email_actions"] : (function () { throw new RuntimeError('Variable "email_actions" does not exist.', 338, $this->source); })()), "email_actions")) : ("email_actions")), ["email" => (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 338, $this->source); })()), "entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 338, $this->source); })())]);
                $context["actions"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 340
                $context["actions"] = twig_trim_filter((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 340, $this->source); })()));
                // line 341
                echo "        <span class=\"inline-actions-element";
                if (twig_test_empty((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 341, $this->source); })()))) {
                    echo " inline-actions-element_no-actions";
                }
                echo "\">
            <span class=\"inline-actions-element_wrapper\">";
                // line 342
                echo twig_call_macro($macros["emailMacros"], "macro_email_address_simple", [(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 342, $this->source); })())], 342, $context, $this->getSourceContext());
                echo "</span>
            ";
                // line 343
                if ( !twig_test_empty((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 343, $this->source); })()))) {
                    // line 344
                    echo "<span class=\"inline-actions-element_actions email-actions\">";
                    echo (isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 344, $this->source); })());
                    echo "</span>";
                }
                // line 346
                echo "        </span>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 357
    public function macro_recipient_email_addresses($__recipients__ = null, $__noLink__ = null, $__knownOnly__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "recipients" => $__recipients__,
            "noLink" => $__noLink__,
            "knownOnly" => $__knownOnly__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "recipient_email_addresses"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "recipient_email_addresses"));

            // line 358
            $macros["emailMacros"] = $this;
            // line 359
            echo "
    ";
            // line 360
            $context["addresses"] = [];
            // line 361
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recipients"]) || array_key_exists("recipients", $context) ? $context["recipients"] : (function () { throw new RuntimeError('Variable "recipients" does not exist.', 361, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["recipient"]) {
                // line 362
                $context["address"] = twig_call_macro($macros["emailMacros"], "macro_email_address_recipient", [twig_get_attribute($this->env, $this->source, $context["recipient"], "emailAddress", [], "any", false, false, false, 362), twig_get_attribute($this->env, $this->source, $context["recipient"], "name", [], "any", false, false, false, 362), (isset($context["noLink"]) || array_key_exists("noLink", $context) ? $context["noLink"] : (function () { throw new RuntimeError('Variable "noLink" does not exist.', 362, $this->source); })()), (isset($context["knownOnly"]) || array_key_exists("knownOnly", $context) ? $context["knownOnly"] : (function () { throw new RuntimeError('Variable "knownOnly" does not exist.', 362, $this->source); })())], 362, $context, $this->getSourceContext());
                // line 363
                if ((twig_length_filter($this->env, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 363, $this->source); })())) > 0)) {
                    // line 364
                    $context["addresses"] = twig_array_merge((isset($context["addresses"]) || array_key_exists("addresses", $context) ? $context["addresses"] : (function () { throw new RuntimeError('Variable "addresses" does not exist.', 364, $this->source); })()), [0 => (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 364, $this->source); })())]);
                    // line 365
                    echo "        ";
                } else {
                    // line 366
                    echo "            ";
                    $context["addresses"] = twig_array_merge((isset($context["addresses"]) || array_key_exists("addresses", $context) ? $context["addresses"] : (function () { throw new RuntimeError('Variable "addresses" does not exist.', 366, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["recipient"], "emailAddress", [], "any", false, false, false, 366), "email", [], "any", false, false, false, 366)]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 370
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) || array_key_exists("addresses", $context) ? $context["addresses"] : (function () { throw new RuntimeError('Variable "addresses" does not exist.', 370, $this->source); })()));
            $context['_iterated'] = false;
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
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 371
                echo $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlStripTags($context["address"]);
                // line 372
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 372)) {
                    echo "; ";
                }
                // line 373
                echo "    ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 374
                echo "        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 385
    public function macro_attachments($__attachments__ = null, $__target__ = null, $__hasGrantReattach__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "attachments" => $__attachments__,
            "target" => $__target__,
            "hasGrantReattach" => $__hasGrantReattach__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "attachments"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "attachments"));

            // line 386
            $context["galleryUid"] = twig_random($this->env);
            // line 387
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attachments"]) || array_key_exists("attachments", $context) ? $context["attachments"] : (function () { throw new RuntimeError('Variable "attachments" does not exist.', 387, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 388
                if ((null === twig_get_attribute($this->env, $this->source, $context["attachment"], "embeddedContentId", [], "any", false, false, false, 388))) {
                    // line 389
                    echo "            ";
                    $context["canCopyToRecord"] = (((((isset($context["hasGrantReattach"]) || array_key_exists("hasGrantReattach", $context) ? $context["hasGrantReattach"] : (function () { throw new RuntimeError('Variable "hasGrantReattach" does not exist.', 389, $this->source); })()) && array_key_exists("target", $context)) && $this->extensions['Oro\Bundle\EmailBundle\Twig\EmailExtension']->canReAttach($context["attachment"], (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 389, $this->source); })())))) ? (true) : (false));
                    // line 390
                    echo "            ";
                    $context["attachmentUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_attachment", ["id" => twig_get_attribute($this->env, $this->source, $context["attachment"], "id", [], "any", false, false, false, 390)]);
                    // line 391
                    echo "            ";
                    $context["isImage"] = $this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getTypeIsImage(twig_get_attribute($this->env, $this->source, $context["attachment"], "contentType", [], "any", false, false, false, 391));
                    // line 392
                    echo "            ";
                    $context["isPreviewAvailable"] = $this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->isPreviewAvailable(twig_get_attribute($this->env, $this->source, $context["attachment"], "contentType", [], "any", false, false, false, 392));
                    // line 393
                    echo "            ";
                    $context["icon"] = $this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getAttachmentIcon($context["attachment"]);
                    // line 394
                    echo "            <li class=\"email-attachments-list-item\">
                <div class=\"email-attachments-file\">
                    ";
                    // line 396
                    if ((isset($context["isImage"]) || array_key_exists("isImage", $context) ? $context["isImage"] : (function () { throw new RuntimeError('Variable "isImage" does not exist.', 396, $this->source); })())) {
                        // line 397
                        echo "                        <a data-gallery=\"gallery-";
                        echo twig_escape_filter($this->env, (isset($context["galleryUid"]) || array_key_exists("galleryUid", $context) ? $context["galleryUid"] : (function () { throw new RuntimeError('Variable "galleryUid" does not exist.', 397, $this->source); })()), "html", null, true);
                        echo "\"
                           data-filename=\"";
                        // line 398
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "fileName", [], "any", false, false, false, 398), "html", null, true);
                        echo "\"
                           class=\"no-hash\"
                           href=\"";
                        // line 400
                        echo twig_escape_filter($this->env, (isset($context["attachmentUrl"]) || array_key_exists("attachmentUrl", $context) ? $context["attachmentUrl"] : (function () { throw new RuntimeError('Variable "attachmentUrl" does not exist.', 400, $this->source); })()), "html", null, true);
                        echo "\">
                            <span class=\"thumbnail\" style=\"background: url('";
                        // line 401
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_resize_email_attachment", ["id" => twig_get_attribute($this->env, $this->source, $context["attachment"], "id", [], "any", false, false, false, 401), "width" => 110, "height" => 80]), "html", null, true);
                        echo "') 50% 50% no-repeat;\"></span>
                        </a>
                    ";
                    } else {
                        // line 404
                        echo "                        <div class=\"thumbnail\">
                            <span class=\"fa ";
                        // line 405
                        echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 405, $this->source); })()), "html", null, true);
                        echo " fa-offset-none\" aria-hidden=\"true\"></span>
                        </div>
                    ";
                    }
                    // line 408
                    echo "                </div>
                <div class=\"dropdown link-to-record\">
                    ";
                    // line 410
                    $context["togglerId"] = uniqid("dropdown-");
                    // line 411
                    echo "                    <a class=\"no-hash dropdown-toggle dropdown-toggle--no-caret\" id=\"";
                    echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 411, $this->source); })()), "html", null, true);
                    echo "\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
                        <span class=\"fa ";
                    // line 412
                    echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 412, $this->source); })()), "html", null, true);
                    echo "\" aria-hidden=\"true\"></span> ";
                    echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\UIBundle\Twig\FormatExtension']->formatFilename(twig_get_attribute($this->env, $this->source, $context["attachment"], "fileName", [], "any", false, false, false, 412), 11, 4, 5), "html", null, true);
                    echo "
                    </a>
                    <ul class=\"dropdown-menu ";
                    // line 414
                    echo (((isset($context["canCopyToRecord"]) || array_key_exists("canCopyToRecord", $context) ? $context["canCopyToRecord"] : (function () { throw new RuntimeError('Variable "canCopyToRecord" does not exist.', 414, $this->source); })())) ? ("") : ("one"));
                    echo "\" role=\"menu\" aria-labelledby=\"";
                    echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 414, $this->source); })()), "html", null, true);
                    echo "\">
                        ";
                    // line 415
                    if ((isset($context["isPreviewAvailable"]) || array_key_exists("isPreviewAvailable", $context) ? $context["isPreviewAvailable"] : (function () { throw new RuntimeError('Variable "isPreviewAvailable" does not exist.', 415, $this->source); })())) {
                        // line 416
                        echo "                            <a class=\"view-image no-hash\" tabindex=\"-1\" data-gallery=\"gallery-";
                        echo twig_escape_filter($this->env, (isset($context["galleryUid"]) || array_key_exists("galleryUid", $context) ? $context["galleryUid"] : (function () { throw new RuntimeError('Variable "galleryUid" does not exist.', 416, $this->source); })()), "html", null, true);
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, (isset($context["attachmentUrl"]) || array_key_exists("attachmentUrl", $context) ? $context["attachmentUrl"] : (function () { throw new RuntimeError('Variable "attachmentUrl" does not exist.', 416, $this->source); })()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.attachment.view"), "html", null, true);
                        echo "</a>
                        ";
                    }
                    // line 418
                    echo "                        <a class=\"no-hash\" tabindex=\"-1\" href=\"";
                    echo twig_escape_filter($this->env, (isset($context["attachmentUrl"]) || array_key_exists("attachmentUrl", $context) ? $context["attachmentUrl"] : (function () { throw new RuntimeError('Variable "attachmentUrl" does not exist.', 418, $this->source); })()), "html", null, true);
                    echo "\">
                            ";
                    // line 419
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.attachment.save"), "html", null, true);
                    echo "<span>(";
                    echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getFileSize(twig_get_attribute($this->env, $this->source, $context["attachment"], "size", [], "any", false, false, false, 419)), "html", null, true);
                    echo ")</span>
                        </a>
                        ";
                    // line 421
                    if ((isset($context["canCopyToRecord"]) || array_key_exists("canCopyToRecord", $context) ? $context["canCopyToRecord"] : (function () { throw new RuntimeError('Variable "canCopyToRecord" does not exist.', 421, $this->source); })())) {
                        // line 422
                        echo "                            ";
                        $context["options"] = ["view" => "oroemail/js/app/views/email-attachment-link-view", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_attachment_link", ["id" => twig_get_attribute($this->env, $this->source,                         // line 425
$context["attachment"], "id", [], "any", false, false, false, 425), "targetActivityClass" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(                        // line 426
(isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 426, $this->source); })())), "targetActivityId" => twig_get_attribute($this->env, $this->source,                         // line 427
(isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 427, $this->source); })()), "id", [], "any", false, false, false, 427)])];
                        // line 430
                        echo "                        <a tabindex=\"-1\" data-page-component-module=\"oroui/js/app/components/view-component\"
                            class=\"attachment\"
                            data-page-component-options=\"";
                        // line 432
                        echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 432, $this->source); })())), "html", null, true);
                        echo "\"
                            href=\"";
                        // line 433
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 433, $this->source); })()), "url", [], "any", false, false, false, 433), "html", null, true);
                        echo "\">
                            ";
                        // line 434
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.attachment.copy_to_record"), "html", null, true);
                        echo "
                        </a>
                        ";
                    }
                    // line 437
                    echo "                    </ul>
                </div>
            </li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 450
    public function macro_body($__emailBody__ = null, $__cssClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "emailBody" => $__emailBody__,
            "cssClass" => $__cssClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "body"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "body"));

            // line 451
            if (twig_get_attribute($this->env, $this->source, (isset($context["emailBody"]) || array_key_exists("emailBody", $context) ? $context["emailBody"] : (function () { throw new RuntimeError('Variable "emailBody" does not exist.', 451, $this->source); })()), "bodyIsText", [], "any", false, false, false, 451)) {
                // line 452
                echo "<pre class=\"email-body";
                if (array_key_exists("cssClass", $context)) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["cssClass"]) || array_key_exists("cssClass", $context) ? $context["cssClass"] : (function () { throw new RuntimeError('Variable "cssClass" does not exist.', 452, $this->source); })()), "html", null, true);
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["emailBody"]) || array_key_exists("emailBody", $context) ? $context["emailBody"] : (function () { throw new RuntimeError('Variable "emailBody" does not exist.', 452, $this->source); })()), "bodyContent", [], "any", false, false, false, 452), "html", null, true);
                echo "</pre>";
            } else {
                // line 454
                echo "<iframe sandbox=\"\" class=\"email-body";
                if (array_key_exists("cssClass", $context)) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["cssClass"]) || array_key_exists("cssClass", $context) ? $context["cssClass"] : (function () { throw new RuntimeError('Variable "cssClass" does not exist.', 454, $this->source); })()), "html", null, true);
                }
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_body", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["emailBody"]) || array_key_exists("emailBody", $context) ? $context["emailBody"] : (function () { throw new RuntimeError('Variable "emailBody" does not exist.', 454, $this->source); })()), "id", [], "any", false, false, false, 454)]), "html", null, true);
                echo "\"></iframe>";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 467
    public function macro_email_participant_name_or_me($__emailAddress__ = null, $__emailAddressName__ = null, $__noLink__ = null, $__knownOnly__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "emailAddress" => $__emailAddress__,
            "emailAddressName" => $__emailAddressName__,
            "noLink" => $__noLink__,
            "knownOnly" => $__knownOnly__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "email_participant_name_or_me"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "email_participant_name_or_me"));

            // line 468
            $macros["emailMacros"] = $this;
            // line 469
            echo "
    ";
            // line 470
            if ((( !(null === twig_get_attribute($this->env, $this->source, (isset($context["emailAddress"]) || array_key_exists("emailAddress", $context) ? $context["emailAddress"] : (function () { throw new RuntimeError('Variable "emailAddress" does not exist.', 470, $this->source); })()), "owner", [], "any", false, false, false, 470)) && ($this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(twig_get_attribute($this->env, $this->source,             // line 471
(isset($context["emailAddress"]) || array_key_exists("emailAddress", $context) ? $context["emailAddress"] : (function () { throw new RuntimeError('Variable "emailAddress" does not exist.', 471, $this->source); })()), "owner", [], "any", false, false, false, 471), true) == $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 471, $this->source); })()), "user", [], "any", false, false, false, 471), true))) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 472
(isset($context["emailAddress"]) || array_key_exists("emailAddress", $context) ? $context["emailAddress"] : (function () { throw new RuntimeError('Variable "emailAddress" does not exist.', 472, $this->source); })()), "owner", [], "any", false, false, false, 472), "id", [], "any", false, false, false, 472) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 472, $this->source); })()), "user", [], "any", false, false, false, 472), "id", [], "any", false, false, false, 472)))) {
                // line 473
                if (((array_key_exists("noLink", $context)) ? (_twig_default_filter((isset($context["noLink"]) || array_key_exists("noLink", $context) ? $context["noLink"] : (function () { throw new RuntimeError('Variable "noLink" does not exist.', 473, $this->source); })()), false)) : (false))) {
                    // line 474
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Me")), "html", null, true);
                } else {
                    // line 476
                    echo twig_call_macro($macros["emailMacros"], "macro_email_address_link", [(isset($context["emailAddress"]) || array_key_exists("emailAddress", $context) ? $context["emailAddress"] : (function () { throw new RuntimeError('Variable "emailAddress" does not exist.', 476, $this->source); })()), twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Me"))], 476, $context, $this->getSourceContext());
                }
            } else {
                // line 479
                $context["name"] = $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlStripTags(_twig_default_filter($this->extensions['Oro\Bundle\EmailBundle\Twig\EmailExtension']->getEmailAddressName((isset($context["emailAddressName"]) || array_key_exists("emailAddressName", $context) ? $context["emailAddressName"] : (function () { throw new RuntimeError('Variable "emailAddressName" does not exist.', 479, $this->source); })())), $this->extensions['Oro\Bundle\EmailBundle\Twig\EmailExtension']->getEmailAddress((isset($context["emailAddressName"]) || array_key_exists("emailAddressName", $context) ? $context["emailAddressName"] : (function () { throw new RuntimeError('Variable "emailAddressName" does not exist.', 479, $this->source); })()))));
                // line 480
                echo twig_call_macro($macros["emailMacros"], "macro_email_address", [(isset($context["emailAddress"]) || array_key_exists("emailAddress", $context) ? $context["emailAddress"] : (function () { throw new RuntimeError('Variable "emailAddress" does not exist.', 480, $this->source); })()), (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 480, $this->source); })()), (isset($context["noLink"]) || array_key_exists("noLink", $context) ? $context["noLink"] : (function () { throw new RuntimeError('Variable "noLink" does not exist.', 480, $this->source); })()), (isset($context["knownOnly"]) || array_key_exists("knownOnly", $context) ? $context["knownOnly"] : (function () { throw new RuntimeError('Variable "knownOnly" does not exist.', 480, $this->source); })())], 480, $context, $this->getSourceContext());
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 491
    public function macro_email_participants_name($__recipients__ = null, $__noLink__ = null, $__knownOnly__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "recipients" => $__recipients__,
            "noLink" => $__noLink__,
            "knownOnly" => $__knownOnly__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "email_participants_name"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "email_participants_name"));

            // line 492
            $macros["emailMacros"] = $this;
            // line 493
            echo "
    ";
            // line 494
            $context["recipientHtmlCollection"] = [];
            // line 495
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recipients"]) || array_key_exists("recipients", $context) ? $context["recipients"] : (function () { throw new RuntimeError('Variable "recipients" does not exist.', 495, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["recipient"]) {
                // line 496
                echo "        ";
                ob_start();
                // line 497
                echo "<span class=\"email-recipient\">";
                echo twig_call_macro($macros["emailMacros"], "macro_email_participant_name_or_me", [twig_get_attribute($this->env, $this->source, $context["recipient"], "emailAddress", [], "any", false, false, false, 497), twig_get_attribute($this->env, $this->source, $context["recipient"], "name", [], "any", false, false, false, 497), (isset($context["noLink"]) || array_key_exists("noLink", $context) ? $context["noLink"] : (function () { throw new RuntimeError('Variable "noLink" does not exist.', 497, $this->source); })()), (isset($context["knownOnly"]) || array_key_exists("knownOnly", $context) ? $context["knownOnly"] : (function () { throw new RuntimeError('Variable "knownOnly" does not exist.', 497, $this->source); })())], 497, $context, $this->getSourceContext());
                echo "</span>";
                $context["recipientHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 499
                echo "        ";
                $context["recipientHtmlCollection"] = twig_array_merge((isset($context["recipientHtmlCollection"]) || array_key_exists("recipientHtmlCollection", $context) ? $context["recipientHtmlCollection"] : (function () { throw new RuntimeError('Variable "recipientHtmlCollection" does not exist.', 499, $this->source); })()), [0 => (isset($context["recipientHtml"]) || array_key_exists("recipientHtml", $context) ? $context["recipientHtml"] : (function () { throw new RuntimeError('Variable "recipientHtml" does not exist.', 499, $this->source); })())]);
                // line 500
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 501
            echo "    ";
            echo twig_join_filter((isset($context["recipientHtmlCollection"]) || array_key_exists("recipientHtmlCollection", $context) ? $context["recipientHtmlCollection"] : (function () { throw new RuntimeError('Variable "recipientHtmlCollection" does not exist.', 501, $this->source); })()), ", ");
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 509
    public function macro_date_smart_format($__date__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "date" => $__date__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "date_smart_format"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "date_smart_format"));

            // line 510
            if (($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDate(twig_date_converter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 510, $this->source); })()))) == $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDate(twig_date_converter($this->env)))) {
                // line 512
                echo "        ";
                echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatTime((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 512, $this->source); })()), ["timeZone" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\LocaleExtension']->getTimeZone()]), "html", null, true);
            } elseif (($this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDate(twig_date_converter($this->env,             // line 513
(isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 513, $this->source); })()))) == $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDate(twig_date_converter($this->env, "-1days")))) {
                // line 514
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yesterday")), "html", null, true);
            } elseif ((twig_get_attribute($this->env, $this->source, twig_date_converter($this->env,             // line 515
(isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 515, $this->source); })())), "format", [0 => "Y"], "method", false, false, false, 515) == twig_get_attribute($this->env, $this->source, twig_date_converter($this->env), "format", [0 => "Y"], "method", false, false, false, 515))) {
                // line 517
                echo "        ";
                echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDay((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 517, $this->source); })()), ["timeZone" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\LocaleExtension']->getTimeZone()]), "html", null, true);
            } else {
                // line 519
                echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 519, $this->source); })()), ["timeZone" => $this->extensions['Oro\Bundle\LocaleBundle\Twig\LocaleExtension']->getTimeZone()]), "html", null, true);
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 528
    public function macro_email_detailed_info_table($__email__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "email" => $__email__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "email_detailed_info_table"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "email_detailed_info_table"));

            // line 529
            echo "    ";
            $context["recipientsTo"] = [];
            // line 530
            echo "    ";
            $context["recipientsCc"] = [];
            // line 531
            echo "    ";
            $context["recipientsBcc"] = [];
            // line 532
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 532, $this->source); })()), "recipients", [], "any", false, false, false, 532));
            foreach ($context['_seq'] as $context["_key"] => $context["recipient"]) {
                // line 533
                echo "        ";
                $context["emailAddressName"] = $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlStripTags($this->extensions['Oro\Bundle\EmailBundle\Twig\EmailExtension']->getEmailAddressName(twig_get_attribute($this->env, $this->source, $context["recipient"], "name", [], "any", false, false, false, 533)));
                // line 534
                echo "        ";
                $context["emailAddress"] = $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlStripTags($this->extensions['Oro\Bundle\EmailBundle\Twig\EmailExtension']->getEmailAddress(twig_get_attribute($this->env, $this->source, $context["recipient"], "name", [], "any", false, false, false, 534)));
                // line 535
                echo "        ";
                if ((((isset($context["emailAddressName"]) || array_key_exists("emailAddressName", $context) ? $context["emailAddressName"] : (function () { throw new RuntimeError('Variable "emailAddressName" does not exist.', 535, $this->source); })()) == "") && ((isset($context["emailAddress"]) || array_key_exists("emailAddress", $context) ? $context["emailAddress"] : (function () { throw new RuntimeError('Variable "emailAddress" does not exist.', 535, $this->source); })()) == ""))) {
                    // line 536
                    echo "            ";
                    $context["recipientName"] = "";
                    // line 537
                    echo "        ";
                } else {
                    // line 538
                    echo "            ";
                    $context["recipientName"] = ((((isset($context["emailAddressName"]) || array_key_exists("emailAddressName", $context) ? $context["emailAddressName"] : (function () { throw new RuntimeError('Variable "emailAddressName" does not exist.', 538, $this->source); })()) . " <bdo dir=\"ltr\">&lt;") . (isset($context["emailAddress"]) || array_key_exists("emailAddress", $context) ? $context["emailAddress"] : (function () { throw new RuntimeError('Variable "emailAddress" does not exist.', 538, $this->source); })())) . "&gt;</bdo>");
                    // line 539
                    echo "        ";
                }
                // line 540
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["recipient"], "type", [], "any", false, false, false, 540) == "to")) {
                    // line 541
                    echo "            ";
                    $context["recipientsTo"] = twig_array_merge((isset($context["recipientsTo"]) || array_key_exists("recipientsTo", $context) ? $context["recipientsTo"] : (function () { throw new RuntimeError('Variable "recipientsTo" does not exist.', 541, $this->source); })()), [0 => (isset($context["recipientName"]) || array_key_exists("recipientName", $context) ? $context["recipientName"] : (function () { throw new RuntimeError('Variable "recipientName" does not exist.', 541, $this->source); })())]);
                    // line 542
                    echo "        ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["recipient"], "type", [], "any", false, false, false, 542) == "cc")) {
                    // line 543
                    echo "            ";
                    $context["recipientsCc"] = twig_array_merge((isset($context["recipientsCc"]) || array_key_exists("recipientsCc", $context) ? $context["recipientsCc"] : (function () { throw new RuntimeError('Variable "recipientsCc" does not exist.', 543, $this->source); })()), [0 => (isset($context["recipientName"]) || array_key_exists("recipientName", $context) ? $context["recipientName"] : (function () { throw new RuntimeError('Variable "recipientName" does not exist.', 543, $this->source); })())]);
                    // line 544
                    echo "        ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["recipient"], "type", [], "any", false, false, false, 544) == "bcc")) {
                    // line 545
                    echo "            ";
                    $context["recipientsBcc"] = twig_array_merge((isset($context["recipientsBcc"]) || array_key_exists("recipientsBcc", $context) ? $context["recipientsBcc"] : (function () { throw new RuntimeError('Variable "recipientsBcc" does not exist.', 545, $this->source); })()), [0 => (isset($context["recipientName"]) || array_key_exists("recipientName", $context) ? $context["recipientName"] : (function () { throw new RuntimeError('Variable "recipientName" does not exist.', 545, $this->source); })())]);
                    // line 546
                    echo "        ";
                }
                // line 547
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 548
            echo "    ";
            $context["fromUserName"] = $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlStripTags($this->extensions['Oro\Bundle\EmailBundle\Twig\EmailExtension']->getEmailAddressName(twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 548, $this->source); })()), "fromName", [], "any", false, false, false, 548)));
            // line 549
            echo "    ";
            $context["fromEmailAddress"] = (("<bdo dir=\"ltr\">&lt;" . $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlStripTags($this->extensions['Oro\Bundle\EmailBundle\Twig\EmailExtension']->getEmailAddress(twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 549, $this->source); })()), "fromName", [], "any", false, false, false, 549)))) . "&gt;</bdo>");
            // line 550
            echo "    ";
            $context["data"] = [0 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From"), "value" => ((            // line 552
(isset($context["fromUserName"]) || array_key_exists("fromUserName", $context) ? $context["fromUserName"] : (function () { throw new RuntimeError('Variable "fromUserName" does not exist.', 552, $this->source); })())) ? (((("<b>" . (isset($context["fromUserName"]) || array_key_exists("fromUserName", $context) ? $context["fromUserName"] : (function () { throw new RuntimeError('Variable "fromUserName" does not exist.', 552, $this->source); })())) . "</b> ") . (isset($context["fromEmailAddress"]) || array_key_exists("fromEmailAddress", $context) ? $context["fromEmailAddress"] : (function () { throw new RuntimeError('Variable "fromEmailAddress" does not exist.', 552, $this->source); })()))) : ((("<b>" . (isset($context["fromEmailAddress"]) || array_key_exists("fromEmailAddress", $context) ? $context["fromEmailAddress"] : (function () { throw new RuntimeError('Variable "fromEmailAddress" does not exist.', 552, $this->source); })())) . "</b>"))), "cssClass" => "autor"], 1 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To"), "value" => twig_join_filter(            // line 556
(isset($context["recipientsTo"]) || array_key_exists("recipientsTo", $context) ? $context["recipientsTo"] : (function () { throw new RuntimeError('Variable "recipientsTo" does not exist.', 556, $this->source); })()), ",<br/>")], 2 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cc"), "value" => twig_join_filter(            // line 559
(isset($context["recipientsCc"]) || array_key_exists("recipientsCc", $context) ? $context["recipientsCc"] : (function () { throw new RuntimeError('Variable "recipientsCc" does not exist.', 559, $this->source); })()), ",<br/>")], 3 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Bcc"), "value" => twig_join_filter(            // line 562
(isset($context["recipientsBcc"]) || array_key_exists("recipientsBcc", $context) ? $context["recipientsBcc"] : (function () { throw new RuntimeError('Variable "recipientsBcc" does not exist.', 562, $this->source); })()), ",<br/>")], 4 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date"), "value" => twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source,             // line 565
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 565, $this->source); })()), "sentAt", [], "any", false, false, false, 565)))], 5 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "value" => $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlStripTags(twig_get_attribute($this->env, $this->source,             // line 568
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 568, $this->source); })()), "subject", [], "any", false, false, false, 568))]];
            // line 570
            echo "    <div class=\"email-detail-info\">
        <table class=\"email-detail-info__table\">
            ";
            // line 572
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 572, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 573
                echo "                ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, false, 573))) {
                    // line 574
                    echo "                    <tr class=\"email-detail-info__tr\">
                        <td class=\"email-detail-info__td\">
                            <div class=\"email-detail-info__label\">";
                    // line 576
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 576);
                    echo ":</div>
                        </td>
                        <td class=\"email-detail-info__td\">
                            <div  class=\"email-detail-info__value ";
                    // line 579
                    ((twig_get_attribute($this->env, $this->source, $context["item"], "cssClass", [], "any", true, true, false, 579)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "cssClass", [], "any", false, false, false, 579), "html", null, true))) : (print ("")));
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, false, 579);
                    echo "</div>
                        </td>
                    </tr>
                ";
                }
                // line 583
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 584
            echo "        </table>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 593
    public function macro_email_short_body($__emailBody__ = null, $__length__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "emailBody" => $__emailBody__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "email_short_body"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "email_short_body"));

            // line 594
            $context["length"] = ((array_key_exists("length", $context)) ? (_twig_default_filter((isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 594, $this->source); })()), 150)) : (150));
            // line 595
            echo twig_replace_filter(twig_slice($this->env, $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->pregReplace(twig_striptags(twig_get_attribute($this->env, $this->source, (isset($context["emailBody"]) || array_key_exists("emailBody", $context) ? $context["emailBody"] : (function () { throw new RuntimeError('Variable "emailBody" does not exist.', 595, $this->source); })()), "textBody", [], "any", false, false, false, 595)), "/-{2,}/", "--"), 0, (isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 595, $this->source); })())), ["--" => "&mdash;"]);
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 601
    public function macro_renderMailboxConfigTitleAndButtons($__pageTitle__ = null, $__buttons__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "pageTitle" => $__pageTitle__,
            "buttons" => $__buttons__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderMailboxConfigTitleAndButtons"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderMailboxConfigTitleAndButtons"));

            // line 602
            echo "    <div class=\"container-fluid page-title\">
        <div class=\"navigation navbar-extra navbar-extra-right\">
            <div class=\"row\">
                <div class=\"pull-left pull-left-extra\">
                    ";
            // line 606
            if (twig_test_iterable((isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 606, $this->source); })()))) {
                // line 607
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 607, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
                    // line 608
                    echo "                            ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 608)) {
                        // line 609
                        echo "                                <div class=\"sub-title\">
                                    ";
                        // line 610
                        if (((twig_test_iterable($context["title"]) && twig_get_attribute($this->env, $this->source, $context["title"], "link", [], "any", true, true, false, 610)) && twig_get_attribute($this->env, $this->source, $context["title"], "label", [], "any", true, true, false, 610))) {
                            // line 611
                            echo "                                        <a href=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["title"], "link", [], "any", false, false, false, 611), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["title"], "label", [], "any", false, false, false, 611), "html", null, true);
                            echo "</a>
                                    ";
                        } else {
                            // line 613
                            echo "                                        ";
                            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                            echo "
                                    ";
                        }
                        // line 615
                        echo "                                </div>
                                <span class=\"separator\">/</span>
                            ";
                    } else {
                        // line 618
                        echo "                                <h1 class=\"page-title__entity-title\">
                                    ";
                        // line 619
                        if (((twig_test_iterable($context["title"]) && twig_get_attribute($this->env, $this->source, $context["title"], "link", [], "any", true, true, false, 619)) && twig_get_attribute($this->env, $this->source, $context["title"], "label", [], "any", true, true, false, 619))) {
                            // line 620
                            echo "                                        <a href=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["title"], "link", [], "any", false, false, false, 620), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["title"], "label", [], "any", false, false, false, 620), "html", null, true);
                            echo "</a>
                                    ";
                        } else {
                            // line 622
                            echo "                                        ";
                            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                            echo "
                                    ";
                        }
                        // line 624
                        echo "                                </h1>
                            ";
                    }
                    // line 626
                    echo "                        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 627
                echo "                    ";
            } else {
                // line 628
                echo "                        <h1 class=\"page-title__entity-title\">
                            ";
                // line 629
                echo twig_escape_filter($this->env, (isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 629, $this->source); })()), "html", null, true);
                echo "
                        </h1>
                    ";
            }
            // line 632
            echo "                </div>
                <div class=\"pull-right title-buttons-container\">
                    ";
            // line 634
            echo (isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 634, $this->source); })());
            echo "
                </div>
            </div>
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroEmail/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1632 => 634,  1628 => 632,  1622 => 629,  1619 => 628,  1616 => 627,  1602 => 626,  1598 => 624,  1592 => 622,  1584 => 620,  1582 => 619,  1579 => 618,  1574 => 615,  1568 => 613,  1560 => 611,  1558 => 610,  1555 => 609,  1552 => 608,  1534 => 607,  1532 => 606,  1526 => 602,  1506 => 601,  1489 => 595,  1487 => 594,  1467 => 593,  1450 => 584,  1444 => 583,  1435 => 579,  1429 => 576,  1425 => 574,  1422 => 573,  1418 => 572,  1414 => 570,  1412 => 568,  1411 => 565,  1410 => 562,  1409 => 559,  1408 => 556,  1407 => 552,  1405 => 550,  1402 => 549,  1399 => 548,  1393 => 547,  1390 => 546,  1387 => 545,  1384 => 544,  1381 => 543,  1378 => 542,  1375 => 541,  1372 => 540,  1369 => 539,  1366 => 538,  1363 => 537,  1360 => 536,  1357 => 535,  1354 => 534,  1351 => 533,  1346 => 532,  1343 => 531,  1340 => 530,  1337 => 529,  1318 => 528,  1302 => 519,  1298 => 517,  1296 => 515,  1294 => 514,  1292 => 513,  1289 => 512,  1287 => 510,  1268 => 509,  1252 => 501,  1246 => 500,  1243 => 499,  1238 => 497,  1235 => 496,  1230 => 495,  1228 => 494,  1225 => 493,  1223 => 492,  1202 => 491,  1186 => 480,  1184 => 479,  1180 => 476,  1177 => 474,  1175 => 473,  1173 => 472,  1172 => 471,  1171 => 470,  1168 => 469,  1166 => 468,  1144 => 467,  1121 => 454,  1111 => 452,  1109 => 451,  1089 => 450,  1066 => 437,  1060 => 434,  1056 => 433,  1052 => 432,  1048 => 430,  1046 => 427,  1045 => 426,  1044 => 425,  1042 => 422,  1040 => 421,  1033 => 419,  1028 => 418,  1018 => 416,  1016 => 415,  1010 => 414,  1003 => 412,  998 => 411,  996 => 410,  992 => 408,  986 => 405,  983 => 404,  977 => 401,  973 => 400,  968 => 398,  963 => 397,  961 => 396,  957 => 394,  954 => 393,  951 => 392,  948 => 391,  945 => 390,  942 => 389,  940 => 388,  936 => 387,  934 => 386,  913 => 385,  893 => 374,  880 => 373,  876 => 372,  874 => 371,  856 => 370,  848 => 366,  845 => 365,  843 => 364,  841 => 363,  839 => 362,  835 => 361,  833 => 360,  830 => 359,  828 => 358,  807 => 357,  790 => 346,  785 => 344,  783 => 343,  779 => 342,  772 => 341,  770 => 340,  767 => 338,  765 => 337,  763 => 336,  760 => 335,  758 => 334,  738 => 333,  722 => 324,  710 => 322,  708 => 321,  705 => 320,  702 => 319,  699 => 318,  697 => 317,  694 => 316,  691 => 315,  688 => 314,  685 => 313,  683 => 312,  680 => 311,  677 => 310,  674 => 309,  671 => 308,  669 => 307,  666 => 306,  664 => 305,  644 => 304,  627 => 293,  624 => 291,  622 => 290,  618 => 287,  616 => 286,  614 => 285,  611 => 284,  609 => 283,  587 => 282,  570 => 269,  567 => 267,  565 => 266,  561 => 263,  559 => 262,  557 => 261,  554 => 260,  552 => 259,  530 => 258,  511 => 246,  506 => 244,  501 => 243,  498 => 242,  495 => 241,  493 => 240,  472 => 239,  453 => 230,  445 => 228,  442 => 227,  440 => 226,  419 => 225,  404 => 215,  403 => 214,  402 => 213,  401 => 212,  398 => 211,  396 => 210,  376 => 209,  361 => 200,  342 => 199,  324 => 191,  321 => 190,  319 => 187,  318 => 186,  317 => 177,  316 => 175,  302 => 164,  287 => 151,  284 => 133,  234 => 74,  220 => 63,  204 => 50,  198 => 47,  191 => 43,  185 => 40,  175 => 33,  169 => 30,  163 => 27,  158 => 25,  154 => 24,  147 => 20,  141 => 17,  135 => 14,  130 => 12,  126 => 11,  119 => 6,  116 => 5,  113 => 4,  110 => 3,  107 => 2,  87 => 1,  73 => 597,  70 => 587,  67 => 522,  64 => 503,  61 => 483,  58 => 457,  55 => 443,  52 => 377,  49 => 297,  46 => 273,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro renderAvailableVariablesWidget(entityName, entityChoiceFieldId) %}
    {% set system = 'oro-email-template-variables-system' %}
    {% set systemTab = system ~ '-tab' %}
    {% set entity = 'oro-email-template-variables-entity'%}
    {% set entityTab = entity ~ '-tab' %}
    <script type=\"text/template\" id=\"oro-email-template-variables-template\">
        <div class=\"emailtemplate-variables oro-tabs tabbable\">
            <div class=\"oro-tabs__head\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li class=\"nav-item\" >
                        <a id=\"{{ systemTab }}\"
                           href=\"#{{system }}\"
                           class=\"nav-link active\"
                           data-target=\"#{{system }}\"
                           data-toggle=\"tab\"
                           role=\"tab\"
                           aria-controls=\"{{system }}\"
                           aria-selected=\"true\"
                        >
                            {{ 'oro.email.emailtemplate.variables.system' | trans }}
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a id=\"{{ entityTab }}\"
                           href=\"#{{ entity }}\"
                           class=\"nav-link\"
                           data-target=\"#{{ entity }}\"
                           data-toggle=\"tab\"
                           role=\"tab\"
                           aria-controls=\"{{ entity }}\"
                           aria-selected=\"false\"
                        >
                            {{ 'oro.email.emailtemplate.variables.entity' | trans }}
                        </a>
                    </li>
                </ul>
            </div>
            <div class=\"oro-tabs__content\">
                <div class=\"tab-content\">
                    <div id=\"{{system }}\"
                         class=\"variables tab-pane active\"
                         role=\"tabpanel\"
                         aria-labelledby=\"{{ systemTab }}\"
                    >
                        <%= variables.system %>
                    </div>
                    <div id=\"{{ entity }}\"
                         class=\"variables tab-pane\"
                         role=\"tabpanel\"
                         aria-labelledby=\"{{ entityTab }}\"
                    >
                    </div>
                </div>
            </div>
        </div>
    </script>
    <script type=\"text/template\" id=\"oro-email-template-variables-system-template\">
        <ul class=\"nav\">
            <% _.each(variables, function(variable, varName) { %>
            <li>
                <a href=\"#\"
                   class=\"variable\"
                   title=\"<%- _.__('oro.email.emailtemplate.variable_title', {'variable_label': variable.label}) %>\">{% verbatim %}{{ <%- root %>.<%- varName %><% if(variable.filter){%>|<%- variable.filter %><% } %> }}{% endverbatim %}</a>
                <span>&ndash; <%- variable.label %></span>
            </li>
            <% }); %>
        </ul>
    </script>
    <script type=\"text/template\" id=\"oro-email-template-variables-entity-variable-template\">
        <li>
            <a href=\"#\"
               class=\"variable\"
               title=\"<%- _.__('oro.email.emailtemplate.variable_title', {'variable_label': variable.label}) %>\"
            >{% verbatim %}{{ <%- varValue %> }}{% endverbatim %}</a>
            <span>&ndash;</span>
            <ul class=\"caption\">
                <% for (var i = 1; i < breadcrumbs.length; i++) { %>
                <li>
                    <span><%- pathLabels[breadcrumbs[i]] %></span>
                    <span>/</span>
                </li>
                <% } %>
                <li><%- variable.label %></li>
            </ul>
        </li>
    </script>
    <script type=\"text/template\" id=\"oro-email-template-variables-entity-template\">
        <% var breadcrumbs = path.split('/'); breadcrumbs[0] = root; %>
        <ul class=\"breadcrumb\">
            <% var breadcrumbPath = ''; %>
            <% for (var i = 0; i < breadcrumbs.length; i++) { %>
            <% breadcrumbPath += '/' + breadcrumbs[i]; %>
            <% breadcrumbItemLabel = (i === 0 ? entityLabel : pathLabels[breadcrumbs[i]]); %>
            <li<% if (i === breadcrumbs.length - 1) { %> class=\"active\"<% } %>>
                <% if (i !== breadcrumbs.length - 1) { %>
                <a href=\"#\"
                   class=\"reference\"
                   data-path=\"<%- breadcrumbPath.substring(root.length + 1) %>\"><%- breadcrumbItemLabel %></a>
                <span class=\"divider\">/&nbsp;</span>
                <% } else { %>
                    <%- breadcrumbItemLabel %>
                <% } %>
            </li>
            <% } %>
        </ul>
        <% var varPrefix = path.split('/'); varPrefix[0] = root; varPrefix = varPrefix.join('.'); %>
        <% if (!_.isEmpty(fields) || !_.isEmpty(relations)) { %>
        <ul class=\"nav groups\">
            <% if (!_.isEmpty(fields)) { %>
            <li>
                <div class=\"group-label\"><%- _.__('oro.entity.field_choice.fields') %></div>
                <ul class=\"nav\">
                <% var variableTemplate =  _.template(\$('#oro-email-template-variables-entity-variable-template').html()) %>
                <% _.each(fields, function(variable, varName) { %>
                    <%= variableTemplate({
                        varValue:    varPrefix + '.' + varName,
                        breadcrumbs: breadcrumbs,
                        pathLabels:  pathLabels,
                        variable:    variable
                    }) %>
                    {# shows variable with default formatter applied
                     # code commented because it was rejected on demo but can be used in future implementation of variable formatters UI
                     #
                    <% if (!_.isUndefined(variable.default_formatter)) { %>
                        <%= variableTemplate({
                            varValue:    varPrefix + '.' + varName + '|oro_format(\\'' + variable.default_formatter + '\\')',
                            breadcrumbs: breadcrumbs,
                            pathLabels:  pathLabels,
                            variable:    variable
                        }) %>
                    <% }; %>
                    #}

                    {# shows variable with all posible formatters applied (skiping default formatter)
                     # code commented because it was rejected on demo but can be used in future implementation of variable formatters UI
                     #
                    <% if (!_.isUndefined(variable.formatters)) { %>
                        <% _.each(variable.formatters, function(formatterName) { %>
                            <% if (!_.isUndefined(variable.default_formatter) && formatterName === variable.default_formatter) { %>
                                <% return; %>
                            <% }; %>
                            <%= variableTemplate({
                                varValue:    varPrefix + '.' + varName + '|oro_format(\\'' + formatterName + '\\')',
                                breadcrumbs: breadcrumbs,
                                pathLabels:  pathLabels,
                                variable:    variable
                            }) %>
                        <% }); %>
                    <% }; %>
                    #}
                <% }); %>
                </ul>
            </li>
            <% } %>
            <% if (!_.isEmpty(relations)) { %>
            <li>
                <div class=\"group-label\"><%- _.__('oro.entity.field_choice.relations') %></div>
                <ul class=\"nav\">
                    <% _.each(relations, function(variable, varName) { %>
                    <li>
                        <a href=\"#\"
                           class=\"reference\"
                           data-path=\"<%- path + '/' + varName %>\"
                           title=\"<%- _.__('oro.email.emailtemplate.reference_title', {'variable_label': variable.label}) %>\">{% verbatim %}{{ <%- varPrefix %>.<%- varName %> }}{% endverbatim %}</a>
                        <span>&ndash; <%- variable.label %></span>
                    </li>
                    <% }); %>
                </ul>
            </li>
            <% } %>
        </ul>
        <% } %>
    </script>

    {% set options = {
        name: 'email-template-variables',
        entityChoice: '#' ~ entityChoiceFieldId,
        view: {
            templateSelector:        '#oro-email-template-variables-template',
            sectionTemplateSelector: '#oro-email-template-variables-{sectionName}-template',
            sectionContentSelector:  '#oro-email-template-variables-{sectionName}',
            sectionTabSelector:      '#oro-email-template-variables-{sectionName}-tab',
        },
        model: {
            attributes: render(path('oro_api_get_emailtemplate_variables')),
            entityName: entityName,
            entityLabel: entityName ? oro_entity_config_value(entityName, 'label')|trans : '',
        }
    } %}
    <div data-page-component-module=\"oroemail/js/app/components/email-variable-component\"
         data-page-component-options=\"{{ options|json_encode }}\"
         data-page-component-name=\"email-template-variables\"></div>
{% endmacro %}
{#
    Renders email address owner name as text
    Parameters:
        emailAddress - email address entity Oro\\Bundle\\EmailBundle\\Entity\\EmailAddress
#}
{% macro email_address_text(emailAddress) -%}
    {{ emailAddress.owner|oro_format_name|default('N/A') }}
{%- endmacro -%}

{#
    Renders email address owner name as link based on owner type
    Parameters:
        emailAddress - email address entity Oro\\Bundle\\EmailBundle\\Entity\\EmailAddress
        label - [optional] A text representation of email address
#}
{% macro email_address_link(emailAddress, label) -%}
    {% import _self as emailMacros %}

    {{ emailMacros.renderEmailAddressLink(
        label|oro_html_strip_tags|default(emailMacros.email_address_text(emailAddress)),
        emailAddress.owner.class,
        emailAddress.owner.id) }}
{%- endmacro -%}

{#
    Renders email address owner name as link based on owner type
    Parameters:
        label - The text representation of email address
        ownerClass - The class name of email address owner
        ownerId - The id of email address owner
#}
{% macro renderEmailAddressLink(label, ownerClass, ownerId) -%}
    {% set route = oro_entity_route(ownerClass) %}
    {% if route is not null %}
        <a href=\"{{ path(route, {id: ownerId}) }}\">{{ label|oro_html_strip_tags }}</a>
    {% else %}
        {{ label|oro_html_strip_tags }}
    {% endif %}
{%- endmacro -%}

{#
    Renders email address name as link based on owner type
    Parameters:
        emailAddress - email address entity Oro\\Bundle\\EmailBundle\\Entity\\EmailAddress
#}
{% macro email_address_recipient_link(emailAddress, emailAddressName, label) -%}
    {% set label = label|oro_html_strip_tags|default(emailAddressName|default('N/A')) %}
    {% set route = oro_entity_route(emailAddress.owner.class) %}
    {% if route is not null %}
        <a href=\"{{ path(route, {id: emailAddress.owner.id}) }}\" dir=\"ltr\">
            {{ label }}</a>
    {% else %}
        <bdo dir=\"ltr\">{{ label }}</bdo>
    {% endif %}
{%- endmacro -%}

{#
    Render email address name, owner name or a link to owner view page can be rendered depends on given parameters
    Parameters:
        emailAddress - email address entity Oro\\Bundle\\EmailBundle\\Entity\\EmailAddress
        emailAddressName - a string contains an email address. It is used if the email address has no owner
        noLink - determines whether the rendering of a link to the owner view page is forbidden or not. Default value is false
        knownOnly - if true renders only emails which have an owner; otherwise, all emails. Default value is false
#}
{% macro email_address(emailAddress, emailAddressName, noLink, knownOnly) -%}
    {% import _self as emailMacros %}

    {% if emailAddress.owner is null -%}
        {% if not knownOnly|default(false) -%}
            {{ emailAddressName|oro_html_strip_tags }}
        {%- endif %}
    {%- else -%}
        {% if noLink|default(false) -%}
            {{ emailMacros.email_address_text(emailAddress) }}
        {%- else -%}
            {{ emailMacros.email_address_link(emailAddress)|raw }}
        {%- endif %}
    {%- endif %}
{%- endmacro %}

{#
    Render email address name a link to owner view page can be rendered depends on given parameters
    Parameters:
        emailAddress - email address entity Oro\\Bundle\\EmailBundle\\Entity\\EmailAddress
        emailAddressName - a string contains an email address. It is used if the email address has no owner
        noLink - determines whether the rendering of a link to the owner view page is forbidden or not. Default value is false
        knownOnly - if true renders only emails which have an owner; otherwise, all emails. Default value is false
#}
{% macro email_address_recipient(emailAddress, emailAddressName, noLink, knownOnly) -%}
    {% import _self as emailMacros %}

    {% if emailAddress.owner is null -%}
        {% if not knownOnly|default(false) -%}
            {{ emailAddressName }}
        {%- endif %}
    {%- else -%}
        {% if noLink|default(false) -%}
            {{ emailAddressName }}
        {%- else -%}
            {{ emailMacros.email_address_recipient_link(emailAddress, emailAddressName)|raw }}
        {%- endif %}
    {%- endif %}
{%- endmacro %}

{#
    Render email address with title
    Parameters:
        email - EmailInterface object or string
        title (optional) - email title
#}
{%- macro email_address_simple(email, title) -%}
    {% if email is not empty %}
        {% set emailAddress = null %}
        {# if email is an object implemented EmailInterface #}
        {% if email.email is defined %}
            {% if email.email is not empty %}
                {% set emailAddress = email.email %}
            {% endif %}
            {# if email is a string #}
        {% else %}
            {% set emailAddress = email %}
        {% endif %}

        {% if title is empty %}
            {% set title = emailAddress %}
        {% endif %}

        {% if emailAddress %}
            <a href=\"mailto:{{ emailAddress|e('html_attr') }}\" aria-label=\"{{ 'oro.email.emailuser.email.aria_label'|trans({'%email%': title|oro_html_strip_tags }) }}\" title=\"{{ title|e('html_attr') }}\" class=\"email\"><bdo dir=\"ltr\">{{ title|oro_html_strip_tags }}</bdo></a>
        {% endif %}
    {% endif %}
{%- endmacro -%}

{#
    Render email address with related actions block
    Parameters:
        email - EmailInterface object or string
        entity - related entity record
#}
{%- macro renderEmailWithActions(email, entity) -%}
    {% import _self as emailMacros %}

    {% if email is not empty %}
        {%- set actions %}
            {%- placeholder email_actions with {email: email, entity: entity} -%}
        {% endset -%}
        {% set actions = actions|trim %}
        <span class=\"inline-actions-element{% if actions is empty %} inline-actions-element_no-actions{% endif %}\">
            <span class=\"inline-actions-element_wrapper\">{{ emailMacros.email_address_simple(email) }}</span>
            {% if actions is not empty -%}
                <span class=\"inline-actions-element_actions email-actions\">{{ actions|raw }}</span>
            {%- endif %}
        </span>
    {% endif %}
{%- endmacro -%}

{#
    Render the given email recipients
    Parameters:
        recipients - an array of Oro\\Bundle\\EmailBundle\\Entity\\EmailRecipients
        noLink - determines whether the rendering of a link to the owner view page is forbidden or not. Default value is false
        knownOnly - if true renders only emails which have an owner; otherwise, all emails. Default value is false
#}
{% macro recipient_email_addresses(recipients, noLink, knownOnly) -%}
    {% import _self as emailMacros %}

    {% set addresses = {} -%}
    {% for recipient in recipients -%}
        {% set address = emailMacros.email_address_recipient(recipient.emailAddress, recipient.name, noLink, knownOnly) %}
        {%- if address|length > 0 -%}
            {% set addresses = addresses|merge([address]) %}
        {% else %}
            {% set addresses = addresses|merge([recipient.emailAddress.email]) %}
        {%- endif %}
    {%- endfor -%}

    {% for address in addresses -%}
        {{ address|oro_html_strip_tags }}
        {%- if not loop.last %}; {% endif %}
    {% else %}
        {{ 'N/A'|trans }}
    {%- endfor %}
{%- endmacro %}

{#
    Render the given email attachments
    Parameters:
        attachments - an array
        target - an object
        hasGrantReattach - has grants for create attachment entity
#}
{% macro attachments(attachments, target, hasGrantReattach) -%}
    {% set galleryUid = random() %}
    {%- for attachment in attachments -%}
        {% if attachment.embeddedContentId is null %}
            {% set canCopyToRecord = (hasGrantReattach and target is defined and oro_can_attache(attachment, target)) ? true : false %}
            {% set attachmentUrl = path('oro_email_attachment', {id: attachment.id}) %}
            {% set isImage = oro_type_is_image(attachment.contentType) %}
            {% set isPreviewAvailable = oro_is_preview_available(attachment.contentType) %}
            {% set icon = oro_attachment_icon(attachment) %}
            <li class=\"email-attachments-list-item\">
                <div class=\"email-attachments-file\">
                    {% if (isImage) %}
                        <a data-gallery=\"gallery-{{ galleryUid }}\"
                           data-filename=\"{{ attachment.fileName }}\"
                           class=\"no-hash\"
                           href=\"{{ attachmentUrl }}\">
                            <span class=\"thumbnail\" style=\"background: url('{{ path('oro_resize_email_attachment', {id: attachment.id, width: 110, height: 80}) }}') 50% 50% no-repeat;\"></span>
                        </a>
                    {% else %}
                        <div class=\"thumbnail\">
                            <span class=\"fa {{ icon }} fa-offset-none\" aria-hidden=\"true\"></span>
                        </div>
                    {% endif %}
                </div>
                <div class=\"dropdown link-to-record\">
                    {% set togglerId = 'dropdown-'|uniqid %}
                    <a class=\"no-hash dropdown-toggle dropdown-toggle--no-caret\" id=\"{{ togglerId }}\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
                        <span class=\"fa {{ icon }}\" aria-hidden=\"true\"></span> {{ oro_format_filename(attachment.fileName, 11, 4, 5) }}
                    </a>
                    <ul class=\"dropdown-menu {{ canCopyToRecord ? '' : 'one'}}\" role=\"menu\" aria-labelledby=\"{{ togglerId }}\">
                        {% if (isPreviewAvailable) %}
                            <a class=\"view-image no-hash\" tabindex=\"-1\" data-gallery=\"gallery-{{ galleryUid }}\" href=\"{{ attachmentUrl }}\">{{ 'oro.email.attachment.view'|trans }}</a>
                        {% endif %}
                        <a class=\"no-hash\" tabindex=\"-1\" href=\"{{ attachmentUrl }}\">
                            {{ 'oro.email.attachment.save'|trans }}<span>({{ file_size(attachment.size) }})</span>
                        </a>
                        {% if (canCopyToRecord) %}
                            {% set options = {
                                'view': 'oroemail/js/app/views/email-attachment-link-view',
                                'url': path('oro_email_attachment_link', {
                                    id: attachment.id,
                                    targetActivityClass: oro_class_name(target),
                                    targetActivityId: target.id
                                })
                            } %}
                        <a tabindex=\"-1\" data-page-component-module=\"oroui/js/app/components/view-component\"
                            class=\"attachment\"
                            data-page-component-options=\"{{ options|json_encode }}\"
                            href=\"{{ options.url }}\">
                            {{ 'oro.email.attachment.copy_to_record'|trans }}
                        </a>
                        {% endif %}
                    </ul>
                </div>
            </li>
        {% endif %}
    {%- endfor -%}
{%- endmacro %}

{#
    Render email body
    Parameters:
        emailBody - email body entity Oro\\Bundle\\EmailBundle\\Entity\\EmailBody
        cssClass - used to specify an additional CSS class for email body container HTML element
#}
{% macro body(emailBody, cssClass) -%}
    {% if emailBody.bodyIsText -%}
        <pre class=\"email-body{% if cssClass is defined %} {{ cssClass }}{% endif %}\">{{ emailBody.bodyContent }}</pre>
    {%- else -%}
        <iframe sandbox=\"\" class=\"email-body{% if cssClass is defined %} {{ cssClass }}{% endif %}\" src=\"{{ path('oro_email_body', {id:emailBody.id}) }}\"></iframe>
    {%- endif %}
{%- endmacro %}

{#
    Render email participant name or \"me\" if it is current user,
        owner name or a link to owner view page can be rendered depends on given parameters
    Parameters:
        emailAddress - email address entity Oro\\Bundle\\EmailBundle\\Entity\\EmailAddress
        emailAddressName - a string contains an email address. It is used if the email address has no owner
        noLink - determines whether the rendering of a link to the owner view page is forbidden or not. Default value is false
        knownOnly - if true renders only emails which have an owner; otherwise, all emails. Default value is false
#}
{% macro email_participant_name_or_me(emailAddress, emailAddressName, noLink, knownOnly) -%}
    {% import _self as emailMacros %}

    {% if emailAddress.owner is not null and
          oro_class_name(emailAddress.owner, true) == oro_class_name(app.user, true) and
          emailAddress.owner.id == app.user.id -%}
        {% if noLink|default(false) -%}
            {{ 'Me'|trans|lower }}
        {%- else -%}
            {{ emailMacros.email_address_link(emailAddress, 'Me'|trans|lower)|raw }}
        {%- endif %}
    {%- else -%}
        {%- set name = oro_get_email_address_name(emailAddressName)|default(oro_get_email_address(emailAddressName))|oro_html_strip_tags -%}
        {{ emailMacros.email_address(emailAddress, name, noLink, knownOnly) }}
    {%- endif %}
{%- endmacro %}

{#
    Render list of participants using email_participant_name_or_me macros
    Parameters:
        recipients - an array of Oro\\Bundle\\EmailBundle\\Entity\\EmailRecipients
        noLink - determines whether the rendering of a link to the owner view page is forbidden or not. Default value is false
        knownOnly - if true renders only emails which have an owner; otherwise, all emails. Default value is false
#}
{% macro email_participants_name(recipients, noLink, knownOnly) -%}
    {% import _self as emailMacros %}

    {% set recipientHtmlCollection = [] %}
    {% for recipient in recipients %}
        {% set recipientHtml -%}
            <span class=\"email-recipient\">{{ emailMacros.email_participant_name_or_me(recipient.emailAddress, recipient.name, noLink, knownOnly) }}</span>
        {%- endset %}
        {% set recipientHtmlCollection = recipientHtmlCollection|merge([recipientHtml]) %}
    {% endfor %}
    {{ recipientHtmlCollection|join(', ')|raw }}
{%- endmacro %}

{#
    Render date in proper format
    Parameters:
        date - DateTime
#}
{% macro date_smart_format(date) -%}
    {% if date(date)|oro_format_date == date()|oro_format_date -%}
        {# same day -- show only time #}
        {{ date|oro_format_time({'timeZone': oro_timezone()}) }}
    {%- elseif date(date)|oro_format_date == date('-1days')|oro_format_date -%}
        {{ 'yesterday'|trans|capitalize }}
    {%- elseif date(date).format('Y') == date().format('Y') -%}
        {# same year -- month and daty #}
        {{ date|oro_format_day({'timeZone': oro_timezone()}) }}
    {%- else -%}
        {{ date|oro_format_date({'timeZone': oro_timezone()}) }}
    {%- endif %}
{%- endmacro %}

{#
    Render table with detailed information about all participants, send date and subject
    Parameters:
        email - email entity Oro\\Bundle\\EmailBundle\\Entity\\Email
#}
{% macro email_detailed_info_table(email) %}
    {% set recipientsTo = [] %}
    {% set recipientsCc = [] %}
    {% set recipientsBcc = [] %}
    {% for recipient in email.recipients %}
        {% set emailAddressName = oro_get_email_address_name(recipient.name)|oro_html_strip_tags %}
        {% set emailAddress = oro_get_email_address(recipient.name)|oro_html_strip_tags %}
        {% if emailAddressName == '' and emailAddress == '' %}
            {% set recipientName = '' %}
        {% else %}
            {% set recipientName = emailAddressName ~ ' <bdo dir=\"ltr\">&lt;' ~ emailAddress ~ '&gt;</bdo>' %}
        {% endif %}
        {% if recipient.type == 'to' %}
            {% set recipientsTo = recipientsTo|merge([recipientName])%}
        {% elseif recipient.type == 'cc' %}
            {% set recipientsCc = recipientsCc|merge([recipientName])%}
        {% elseif recipient.type == 'bcc' %}
            {% set recipientsBcc = recipientsBcc|merge([recipientName])%}
        {% endif %}
    {% endfor %}
    {% set fromUserName = oro_get_email_address_name(email.fromName)|oro_html_strip_tags %}
    {% set fromEmailAddress = '<bdo dir=\"ltr\">&lt;' ~ oro_get_email_address(email.fromName)|oro_html_strip_tags ~ '&gt;</bdo>' %}
    {% set data = [{
            label: 'From'|trans,
            value: fromUserName ? '<b>' ~ fromUserName ~ '</b> ' ~ fromEmailAddress : '<b>' ~ fromEmailAddress ~ '</b>' ,
            cssClass: 'autor'
        }, {
            label: 'To'|trans,
            value: recipientsTo|join(',<br/>')
        }, {
            label: 'Cc'|trans,
            value: recipientsCc|join(',<br/>')
        }, {
            label: 'Bcc'|trans,
            value: recipientsBcc|join(',<br/>')
        }, {
            label: 'Date'|trans,
            value: email.sentAt|oro_format_datetime|e
        }, {
            label: 'Subject'|trans,
            value: email.subject|oro_html_strip_tags
    }] %}
    <div class=\"email-detail-info\">
        <table class=\"email-detail-info__table\">
            {% for item in data %}
                {% if item.value is not empty %}
                    <tr class=\"email-detail-info__tr\">
                        <td class=\"email-detail-info__td\">
                            <div class=\"email-detail-info__label\">{{ item.label|raw }}:</div>
                        </td>
                        <td class=\"email-detail-info__td\">
                            <div  class=\"email-detail-info__value {{ item.cssClass is defined ? item.cssClass : '' }}\">{{ item.value|raw }}</div>
                        </td>
                    </tr>
                {% endif %}
            {% endfor %}
        </table>
    </div>
{% endmacro %}

{#
    Removes sequence of '-' chars and cuts to fit the length
    Parameters:
        emailBody - email body entity Oro\\Bundle\\EmailBundle\\Entity\\EmailBody
#}
{% macro email_short_body(emailBody, length) %}
    {%- set length = length|default(150) -%}
    {{ emailBody.textBody|striptags|oro_preg_replace('/\\-{2,}/', '--')[:length]|replace({'--': '&mdash;'})|raw }}
{% endmacro %}

{#
    Render title and buttons for Mailbox configuration
#}
{% macro renderMailboxConfigTitleAndButtons(pageTitle, buttons) %}
    <div class=\"container-fluid page-title\">
        <div class=\"navigation navbar-extra navbar-extra-right\">
            <div class=\"row\">
                <div class=\"pull-left pull-left-extra\">
                    {% if pageTitle is iterable %}
                        {% for title in pageTitle%}
                            {% if not loop.last %}
                                <div class=\"sub-title\">
                                    {% if title is iterable and title.link is defined and title.label is defined %}
                                        <a href=\"{{ title.link }}\">{{ title.label }}</a>
                                    {% else %}
                                        {{ title }}
                                    {% endif %}
                                </div>
                                <span class=\"separator\">/</span>
                            {% else %}
                                <h1 class=\"page-title__entity-title\">
                                    {% if title is iterable and title.link is defined and title.label is defined %}
                                        <a href=\"{{ title.link }}\">{{ title.label }}</a>
                                    {% else %}
                                        {{ title }}
                                    {% endif %}
                                </h1>
                            {% endif %}
                        {% endfor %}
                    {% else %}
                        <h1 class=\"page-title__entity-title\">
                            {{ pageTitle }}
                        </h1>
                    {% endif %}
                </div>
                <div class=\"pull-right title-buttons-container\">
                    {{ buttons|raw }}
                </div>
            </div>
        </div>
    </div>
{% endmacro %}
", "@OroEmail/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/macros.html.twig");
    }
}
