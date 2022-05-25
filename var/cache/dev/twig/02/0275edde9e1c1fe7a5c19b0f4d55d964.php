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

/* @OroConfig/macros.html.twig */
class __TwigTemplate_f8e4f04fba6a34cfaf94dc5895600921 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroConfig/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroConfig/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroConfig/macros.html.twig"));

        // line 37
        echo "
";
        // line 61
        echo "
";
        // line 122
        echo "
";
        // line 197
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function macro_renderTitleAndButtons($__pageTitle__ = null, $__buttons__ = null, ...$__varargs__)
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
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderTitleAndButtons"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderTitleAndButtons"));

            // line 5
            echo "    <div class=\"container-fluid page-title\">
        <div class=\"navigation navbar-extra navbar-extra-right\">
            <div class=\"row\">
                <div class=\"pull-left pull-left-extra\">
                    ";
            // line 9
            if (twig_test_iterable((isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 9, $this->source); })()))) {
                // line 10
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 10, $this->source); })()));
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
                    // line 11
                    echo "                            ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 11)) {
                        // line 12
                        echo "                            <div class=\"sub-title\">
                                ";
                        // line 13
                        echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                        echo "
                            </div>
                            <span class=\"separator\">/</span>
                            ";
                    } else {
                        // line 17
                        echo "                            <h1 class=\"page-title__entity-title\">";
                        echo $context["title"];
                        echo "</h1>
                            ";
                    }
                    // line 19
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
                // line 20
                echo "                    ";
            } else {
                // line 21
                echo "                        <h1 class=\"page-title__entity-title\">
                            ";
                // line 22
                echo twig_escape_filter($this->env, (isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 22, $this->source); })()), "html", null, true);
                echo "
                        </h1>
                    ";
            }
            // line 25
            echo "                </div>
                <div class=\"pull-right title-buttons-container\">
                    ";
            // line 27
            if (array_key_exists("buttons", $context)) {
                // line 28
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 28, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 29
                    echo "                            ";
                    echo twig_escape_filter($this->env, $context["button"], "html", null, true);
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                    ";
            }
            // line 32
            echo "                </div>
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

    // line 48
    public function macro_renderScrollData($__configTree__ = null, $__form__ = null, $__activeTabName__ = false, $__activeSubTabName__ = false, $__routeName__ = "oro_config_configuration_system", $__routeParameters__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "configTree" => $__configTree__,
            "form" => $__form__,
            "activeTabName" => $__activeTabName__,
            "activeSubTabName" => $__activeSubTabName__,
            "routeName" => $__routeName__,
            "routeParameters" => $__routeParameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderScrollData"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderScrollData"));

            // line 49
            echo "    ";
            $macros["configMacros"] = $this;
            // line 50
            echo "
    ";
            // line 51
            echo twig_call_macro($macros["configMacros"], "macro_renderConfigurationScrollData", [["configTree" =>             // line 52
(isset($context["configTree"]) || array_key_exists("configTree", $context) ? $context["configTree"] : (function () { throw new RuntimeError('Variable "configTree" does not exist.', 52, $this->source); })()), "form" =>             // line 53
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "content" => [], "activeTabName" =>             // line 55
(isset($context["activeTabName"]) || array_key_exists("activeTabName", $context) ? $context["activeTabName"] : (function () { throw new RuntimeError('Variable "activeTabName" does not exist.', 55, $this->source); })()), "activeSubTabName" =>             // line 56
(isset($context["activeSubTabName"]) || array_key_exists("activeSubTabName", $context) ? $context["activeSubTabName"] : (function () { throw new RuntimeError('Variable "activeSubTabName" does not exist.', 56, $this->source); })()), "routeName" =>             // line 57
(isset($context["routeName"]) || array_key_exists("routeName", $context) ? $context["routeName"] : (function () { throw new RuntimeError('Variable "routeName" does not exist.', 57, $this->source); })()), "routeParameters" =>             // line 58
(isset($context["routeParameters"]) || array_key_exists("routeParameters", $context) ? $context["routeParameters"] : (function () { throw new RuntimeError('Variable "routeParameters" does not exist.', 58, $this->source); })())]], 51, $context, $this->getSourceContext());
            // line 59
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 62
    public function macro_renderConfigurationScrollData($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderConfigurationScrollData"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderConfigurationScrollData"));

            // line 63
            echo "    ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroConfig/macros.html.twig", 63)->unwrap();
            // line 64
            echo "    ";
            $macros["configMacros"] = $this;
            // line 65
            echo "
    ";
            // line 66
            ob_start();
            // line 67
            echo "        <div class=\"layout-content\" data-page-component-view=\"";
            echo twig_escape_filter($this->env, json_encode(["view" => "oroui/js/app/views/highlight-text-view", "highlightSwitcherContainer" => "div.system-configuration-content-header", "highlightStateStorageKey" => "show-all-configuration-items-on-search", "highlightSelectors" => [0 => "div.system-configuration-content-title", 1 => "h5.user-fieldset span", 2 => "div.control-label label", 3 => "i.tooltip-icon", 4 => "div.controls > div.control-subgroup *[data-name=\"field__value\"]", 5 => ".select2-offscreen[data-name]"], "toggleSelectors" => ["div.control-group" => "div.control-group-wrapper", "fieldset.form-horizontal" => "div.system-configuration-content-inner"], "viewGroup" => "configuration"]), "html", null, true);
            // line 84
            echo "\">
            ";
            // line 85
            echo twig_call_macro($macros["configMacros"], "macro_renderTabContent", [twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 85, $this->source); })()), "form", [], "any", false, false, false, 85), twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 85, $this->source); })()), "content", [], "any", false, false, false, 85)], 85, $context, $this->getSourceContext());
            echo "
        </div>
    ";
            $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 88
            echo "    <div class=\"system-configuration-container\">
        ";
            // line 89
            $this->loadTemplate("@OroConfig/macros.html.twig", "@OroConfig/macros.html.twig", 89, "878738367")->display(twig_array_merge($context, ["options" => ["scrollbar" => "[data-role=\"jstree-container\"]"]]));
            // line 120
            echo "    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 128
    public function macro_renderTabContent($__form__ = null, $__content__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "content" => $__content__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderTabContent"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderTabContent"));

            // line 129
            echo "    ";
            $macros["configMacros"] = $this;
            // line 130
            echo "
    ";
            // line 131
            $context["content"] = ((array_key_exists("content", $context)) ? (_twig_default_filter((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 131, $this->source); })()), [])) : ([]));
            // line 132
            echo "    ";
            $context["processForm"] = false;
            // line 133
            echo "    ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "formErrors", [], "any", true, true, false, 133)) {
                // line 134
                echo "        ";
                $context["content"] = twig_array_merge((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 134, $this->source); })()), ["formErrors" =>                 // line 135
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), 'errors')]);
                // line 137
                echo "    ";
            }
            // line 138
            echo "    ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "dataBlocks", [], "any", true, true, false, 138)) {
                // line 139
                echo "        ";
                $context["content"] = twig_array_merge((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 139, $this->source); })()), ["dataBlocks" => $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormDataBlocks($this->env, $context,                 // line 140
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()))]);
                // line 142
                echo "        ";
                $context["processForm"] = true;
                // line 143
                echo "    ";
            }
            // line 144
            echo "    ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "hiddenData", [], "any", true, true, false, 144)) {
                // line 145
                echo "        ";
                $context["content"] = twig_array_merge((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 145, $this->source); })()), ["hiddenData" =>                 // line 146
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), 'rest')]);
                // line 148
                echo "    ";
            }
            // line 149
            echo "    ";
            if ((isset($context["processForm"]) || array_key_exists("processForm", $context) ? $context["processForm"] : (function () { throw new RuntimeError('Variable "processForm" does not exist.', 149, $this->source); })())) {
                // line 150
                echo "        ";
                $context["content"] = $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->processForm($this->env, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 150, $this->source); })()), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()));
                // line 151
                echo "    ";
            }
            // line 152
            echo "
    <div class=\"placeholder\">
        <div class=\"scrollable-container\">
            <div class=\"system-configuration-content content form-container\" id=\"configuration-options-block\">
                <div class=\"pull-right\">
                    <input type=\"hidden\" name=\"input_action\" value=\"\" data-form-id=\"";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "vars", [], "any", false, false, false, 157), "id", [], "any", false, false, false, 157), "html", null, true);
            echo "\"/>
                </div>
                ";
            // line 159
            if ((twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "formErrors", [], "any", true, true, false, 159) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 159, $this->source); })()), "formErrors", [], "any", false, false, false, 159)))) {
                // line 160
                echo "                    <div class=\"customer-info-actions container-fluid well-small alert-wrap\" role=\"alert\">
                        <div class=\"alert alert-error alert-dismissible\">
                            <button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"";
                // line 162
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
                echo "\" data-target=\".alert-wrap\"><span aria-hidden=\"true\">&times;</span></button>
                            ";
                // line 163
                echo twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 163, $this->source); })()), "formErrors", [], "any", false, false, false, 163);
                echo "
                        </div>
                    </div>
                ";
            }
            // line 167
            echo "
                ";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 168, $this->source); })()), "dataBlocks", [], "any", false, false, false, 168));
            foreach ($context['_seq'] as $context["_key"] => $context["scrollBlock"]) {
                // line 169
                echo "                <div class=\"system-configuration-content-wrapper\">
                    <div class=\"system-configuration-content-header\">
                        <div class=\"system-configuration-content-title\">
                            ";
                // line 172
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["scrollBlock"], "title", [], "any", false, false, false, 172)), "html", null, true);
                echo "
                        </div>
                    </div>
                    <div class=\"system-configuration-content-inner\">
                        ";
                // line 176
                if ((twig_get_attribute($this->env, $this->source, $context["scrollBlock"], "description", [], "any", true, true, false, 176) && (twig_get_attribute($this->env, $this->source, $context["scrollBlock"], "description", [], "any", false, false, false, 176) != ""))) {
                    // line 177
                    echo "                            <p>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["scrollBlock"], "description", [], "any", false, false, false, 177)), "html", null, true);
                    echo "</p>
                        ";
                }
                // line 179
                echo "
                        ";
                // line 180
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["scrollBlock"], "subblocks", [], "any", false, false, false, 180));
                foreach ($context['_seq'] as $context["_key"] => $context["subblock"]) {
                    // line 181
                    echo "                            ";
                    if (twig_test_iterable($context["subblock"])) {
                        // line 182
                        echo "                                ";
                        echo twig_call_macro($macros["configMacros"], "macro_renderFieldset", [$context["subblock"]], 182, $context, $this->getSourceContext());
                        echo "
                            ";
                    } else {
                        // line 184
                        echo "                                ";
                        echo $context["subblock"];
                        echo "
                            ";
                    }
                    // line 186
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subblock'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 187
                echo "                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scrollBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "                <div class=\"hide\">
                    ";
            // line 191
            echo twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 191, $this->source); })()), "hiddenData", [], "any", false, false, false, 191);
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

    // line 206
    public function macro_renderFieldset($__block__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "block" => $__block__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderFieldset"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderFieldset"));

            // line 207
            echo "    ";
            $macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroConfig/macros.html.twig", 207)->unwrap();
            // line 208
            echo "    ";
            if ((twig_length_filter($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 208, $this->source); })()), "data", [], "any", false, false, false, 208), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 208, $this->source); })()) != ""); })) > 0)) {
                // line 209
                echo "    <fieldset class=\"form-horizontal form-horizontal-large\">
        ";
                // line 210
                if (twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "title", [], "any", true, true, false, 210)) {
                    // line 211
                    echo "        <h5 class=\"user-fieldset\">
            <span>";
                    // line 212
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 212, $this->source); })()), "title", [], "any", false, false, false, 212)), "html", null, true);
                    echo "</span>
            ";
                    // line 213
                    if ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "tooltip", [], "any", true, true, false, 213) && (twig_get_attribute($this->env, $this->source, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 213, $this->source); })()), "tooltip", [], "any", false, false, false, 213) != ""))) {
                        // line 214
                        echo "                <label class=\"control-label header-tooltips\">";
                        echo twig_call_macro($macros["ui"], "macro_tooltip", [twig_get_attribute($this->env, $this->source, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 214, $this->source); })()), "tooltip", [], "any", false, false, false, 214), [], "right"], 214, $context, $this->getSourceContext());
                        echo "</label>
            ";
                    }
                    // line 216
                    echo "        </h5>
        ";
                }
                // line 218
                echo "
        ";
                // line 219
                if ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "description", [], "any", true, true, false, 219) && (twig_get_attribute($this->env, $this->source, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 219, $this->source); })()), "description", [], "any", false, false, false, 219) != ""))) {
                    // line 220
                    echo "            <div class=\"container-fluid\">
                ";
                    // line 221
                    if ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "descriptionStyle", [], "any", true, true, false, 221) && (twig_get_attribute($this->env, $this->source, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 221, $this->source); })()), "descriptionStyle", [], "any", false, false, false, 221) != ""))) {
                        // line 222
                        echo "                    <p class=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 222, $this->source); })()), "descriptionStyle", [], "any", false, false, false, 222), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlSanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 222, $this->source); })()), "description", [], "any", false, false, false, 222)));
                        echo "</p>
                ";
                    } else {
                        // line 224
                        echo "                    <p>";
                        echo $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlSanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 224, $this->source); })()), "description", [], "any", false, false, false, 224)));
                        echo "</p>
                ";
                    }
                    // line 226
                    echo "            </div>
        ";
                }
                // line 228
                echo "
        <div class=\"control-group-wrapper\">
            ";
                // line 230
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 230, $this->source); })()), "data", [], "any", false, false, false, 230));
                foreach ($context['_seq'] as $context["_key"] => $context["dataBlock"]) {
                    // line 231
                    echo "                ";
                    echo $context["dataBlock"];
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dataBlock'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 233
                echo "        </div>
    </fieldset>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroConfig/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  602 => 233,  593 => 231,  589 => 230,  585 => 228,  581 => 226,  575 => 224,  567 => 222,  565 => 221,  562 => 220,  560 => 219,  557 => 218,  553 => 216,  547 => 214,  545 => 213,  541 => 212,  538 => 211,  536 => 210,  533 => 209,  530 => 208,  527 => 207,  508 => 206,  487 => 191,  484 => 190,  476 => 187,  470 => 186,  464 => 184,  458 => 182,  455 => 181,  451 => 180,  448 => 179,  442 => 177,  440 => 176,  433 => 172,  428 => 169,  424 => 168,  421 => 167,  414 => 163,  410 => 162,  406 => 160,  404 => 159,  399 => 157,  392 => 152,  389 => 151,  386 => 150,  383 => 149,  380 => 148,  378 => 146,  376 => 145,  373 => 144,  370 => 143,  367 => 142,  365 => 140,  363 => 139,  360 => 138,  357 => 137,  355 => 135,  353 => 134,  350 => 133,  347 => 132,  345 => 131,  342 => 130,  339 => 129,  319 => 128,  303 => 120,  301 => 89,  298 => 88,  292 => 85,  289 => 84,  286 => 67,  284 => 66,  281 => 65,  278 => 64,  275 => 63,  256 => 62,  240 => 59,  238 => 58,  237 => 57,  236 => 56,  235 => 55,  234 => 53,  233 => 52,  232 => 51,  229 => 50,  226 => 49,  202 => 48,  183 => 32,  180 => 31,  171 => 29,  166 => 28,  164 => 27,  160 => 25,  154 => 22,  151 => 21,  148 => 20,  134 => 19,  128 => 17,  121 => 13,  118 => 12,  115 => 11,  97 => 10,  95 => 9,  89 => 5,  69 => 4,  55 => 197,  52 => 122,  49 => 61,  46 => 37,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    Displays title and search form
#}
{% macro renderTitleAndButtons(pageTitle, buttons) %}
    <div class=\"container-fluid page-title\">
        <div class=\"navigation navbar-extra navbar-extra-right\">
            <div class=\"row\">
                <div class=\"pull-left pull-left-extra\">
                    {% if pageTitle is iterable %}
                        {% for title in pageTitle%}
                            {% if not loop.last %}
                            <div class=\"sub-title\">
                                {{ title }}
                            </div>
                            <span class=\"separator\">/</span>
                            {% else %}
                            <h1 class=\"page-title__entity-title\">{{ title|raw }}</h1>
                            {% endif %}
                        {% endfor %}
                    {% else %}
                        <h1 class=\"page-title__entity-title\">
                            {{ pageTitle }}
                        </h1>
                    {% endif %}
                </div>
                <div class=\"pull-right title-buttons-container\">
                    {% if buttons is defined %}
                        {% for button in buttons %}
                            {{ button }}
                        {% endfor %}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
{% endmacro %}

{#
    Render page scrollable data
    params:
        configTree       - tree of current configuration
        form             - form view of active group
        activeTabName    - active tab name
        activeSubTabName - active subtab name
        routeName        - route name for tabs switch
        routeParameters  - additional route parameters
#}
{% macro renderScrollData(configTree, form, activeTabName = false, activeSubTabName = false, routeName = 'oro_config_configuration_system', routeParameters = {}) %}
    {% import _self as configMacros %}

    {{ configMacros.renderConfigurationScrollData({
        configTree: configTree,
        form: form,
        content: {},
        activeTabName: activeTabName,
        activeSubTabName: activeSubTabName,
        routeName: routeName,
        routeParameters: routeParameters
    }) }}
{% endmacro %}

{% macro renderConfigurationScrollData(data) %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% import _self as configMacros %}

    {% set content %}
        <div class=\"layout-content\" data-page-component-view=\"{{ {
            view: 'oroui/js/app/views/highlight-text-view',
            highlightSwitcherContainer: 'div.system-configuration-content-header',
            highlightStateStorageKey: 'show-all-configuration-items-on-search',
            highlightSelectors: [
                'div.system-configuration-content-title',
                'h5.user-fieldset span',
                'div.control-label label',
                'i.tooltip-icon',
                'div.controls > div.control-subgroup *[data-name=\"field__value\"]',
                '.select2-offscreen[data-name]'
            ],
            toggleSelectors: {
                'div.control-group': 'div.control-group-wrapper',
                'fieldset.form-horizontal': 'div.system-configuration-content-inner'
            },
            viewGroup: 'configuration'
        }|json_encode }}\">
            {{ configMacros.renderTabContent(data.form, data.content) }}
        </div>
    {% endset %}
    <div class=\"system-configuration-container\">
        {% embed \"@OroUI/content_sidebar.html.twig\" with {options: {
            scrollbar: '[data-role=\"jstree-container\"]'
        }} %}
            {% block header %}
                <div id=\"system-configuration-jstree-inline-actions\"></div>
            {% endblock header %}
            {% block sidebar %}
                {% import '@OroUI/macros.html.twig' as UI %}
                {{ UI.renderJsTree({
                    'label': null,
                    'treeOptions': {
                        'data' : data.configTree,
                        'viewGroup': 'configuration',
                        'nodeId': data.activeSubTabName,
                        'onSelectRoute': data.routeName,
                        'onSelectRouteParameters': data.routeParameters,
                        'view': 'oroconfig/js/app/views/configuration-tree-view'
                    },
                    'actionsOptions': {
                        inlineActionsCount: 2,
                        inlineActionsElement: '#system-configuration-jstree-inline-actions'
                    }
                }) }}
            {% endblock sidebar %}

            {% block content %}
                {% autoescape %}
                    {{ content }}
                {% endautoescape %}
            {% endblock content %}
        {% endembed %}
    </div>
{% endmacro %}

{#
    Renders tab form
    params:
        form        - form view for active tab tree configuration
#}
{% macro renderTabContent(form, content) %}
    {% import _self as configMacros %}

    {% set content = content|default({}) %}
    {% set processForm = false %}
    {% if content.formErrors is not defined %}
        {% set content = content|merge({
            formErrors: form_errors(form)
        }) %}
    {% endif %}
    {% if content.dataBlocks is not defined %}
        {% set content = content|merge({
            dataBlocks: form_data_blocks(form)
        }) %}
        {% set processForm = true %}
    {% endif %}
    {% if content.hiddenData is not defined %}
        {% set content = content|merge({
            hiddenData: form_rest(form)
        }) %}
    {% endif %}
    {% if processForm %}
        {% set content = oro_form_process(content, form) %}
    {% endif %}

    <div class=\"placeholder\">
        <div class=\"scrollable-container\">
            <div class=\"system-configuration-content content form-container\" id=\"configuration-options-block\">
                <div class=\"pull-right\">
                    <input type=\"hidden\" name=\"input_action\" value=\"\" data-form-id=\"{{ form.vars.id }}\"/>
                </div>
                {% if content.formErrors is defined and content.formErrors | length %}
                    <div class=\"customer-info-actions container-fluid well-small alert-wrap\" role=\"alert\">
                        <div class=\"alert alert-error alert-dismissible\">
                            <button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"{{ 'Close'|trans }}\" data-target=\".alert-wrap\"><span aria-hidden=\"true\">&times;</span></button>
                            {{ content.formErrors|raw }}
                        </div>
                    </div>
                {% endif %}

                {% for scrollBlock in content.dataBlocks %}
                <div class=\"system-configuration-content-wrapper\">
                    <div class=\"system-configuration-content-header\">
                        <div class=\"system-configuration-content-title\">
                            {{ scrollBlock.title|trans }}
                        </div>
                    </div>
                    <div class=\"system-configuration-content-inner\">
                        {% if scrollBlock.description is defined and scrollBlock.description != '' %}
                            <p>{{ scrollBlock.description|trans }}</p>
                        {% endif %}

                        {% for subblock in scrollBlock.subblocks %}
                            {% if subblock is iterable %}
                                {{ configMacros.renderFieldset(subblock) }}
                            {% else %}
                                {{ subblock|raw }}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
                {% endfor %}
                <div class=\"hide\">
                    {{ content.hiddenData|raw }}
                </div>
            </div>
        </div>
    </div>
{% endmacro %}

{#
    Renders fieldset
    params:
        block.title       - fieldset label
        block.description - fieldset description (optional)
        block.data        - fields data
        block.tooltip     - fieldset tooltip (optional)
#}
{% macro renderFieldset(block) %}
    {% import '@OroUI/macros.html.twig' as ui %}
    {% if block.data|filter(v => v != \"\")|length > 0 %}
    <fieldset class=\"form-horizontal form-horizontal-large\">
        {% if block.title is defined %}
        <h5 class=\"user-fieldset\">
            <span>{{ block.title|trans }}</span>
            {% if block.tooltip is defined and block.tooltip != '' %}
                <label class=\"control-label header-tooltips\">{{ ui.tooltip(block.tooltip, {}, 'right') }}</label>
            {% endif %}
        </h5>
        {% endif %}

        {% if block.description is defined and block.description != '' %}
            <div class=\"container-fluid\">
                {% if block.descriptionStyle is defined and block.descriptionStyle != '' %}
                    <p class=\"{{ block.descriptionStyle }}\">{{ block.description|trans|oro_html_sanitize }}</p>
                {% else %}
                    <p>{{ block.description|trans|oro_html_sanitize }}</p>
                {% endif %}
            </div>
        {% endif %}

        <div class=\"control-group-wrapper\">
            {% for dataBlock in block.data %}
                {{ dataBlock|raw }}
            {% endfor %}
        </div>
    </fieldset>
    {% endif %}
{% endmacro %}
", "@OroConfig/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ConfigBundle/Resources/views/macros.html.twig");
    }
}


/* @OroConfig/macros.html.twig */
class __TwigTemplate_f8e4f04fba6a34cfaf94dc5895600921___878738367 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'sidebar' => [$this, 'block_sidebar'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 89
        return "@OroUI/content_sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroConfig/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroConfig/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroConfig/macros.html.twig"));

        $this->parent = $this->loadTemplate("@OroUI/content_sidebar.html.twig", "@OroConfig/macros.html.twig", 89);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 92
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("header", $this->getTemplateName(), 92));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 93
        echo "                <div id=\"system-configuration-jstree-inline-actions\"></div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 95
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("sidebar", $this->getTemplateName(), 95));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 96
        echo "                ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroConfig/macros.html.twig", 96)->unwrap();
        // line 97
        echo "                ";
        echo twig_call_macro($macros["UI"], "macro_renderJsTree", [["label" => null, "treeOptions" => ["data" => twig_get_attribute($this->env, $this->source,         // line 100
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 100, $this->source); })()), "configTree", [], "any", false, false, false, 100), "viewGroup" => "configuration", "nodeId" => twig_get_attribute($this->env, $this->source,         // line 102
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 102, $this->source); })()), "activeSubTabName", [], "any", false, false, false, 102), "onSelectRoute" => twig_get_attribute($this->env, $this->source,         // line 103
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 103, $this->source); })()), "routeName", [], "any", false, false, false, 103), "onSelectRouteParameters" => twig_get_attribute($this->env, $this->source,         // line 104
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 104, $this->source); })()), "routeParameters", [], "any", false, false, false, 104), "view" => "oroconfig/js/app/views/configuration-tree-view"], "actionsOptions" => ["inlineActionsCount" => 2, "inlineActionsElement" => "#system-configuration-jstree-inline-actions"]]], 97, $context, $this->getSourceContext());
        // line 111
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 114
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 114));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 115
        echo "                ";
        // line 116
        echo "                    ";
        echo twig_escape_filter($this->env, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 116, $this->source); })()), "html", null, true);
        echo "
                ";
        // line 118
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroConfig/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1012 => 118,  1007 => 116,  1005 => 115,  992 => 114,  978 => 111,  976 => 104,  975 => 103,  974 => 102,  973 => 100,  971 => 97,  968 => 96,  955 => 95,  941 => 93,  928 => 92,  899 => 89,  602 => 233,  593 => 231,  589 => 230,  585 => 228,  581 => 226,  575 => 224,  567 => 222,  565 => 221,  562 => 220,  560 => 219,  557 => 218,  553 => 216,  547 => 214,  545 => 213,  541 => 212,  538 => 211,  536 => 210,  533 => 209,  530 => 208,  527 => 207,  508 => 206,  487 => 191,  484 => 190,  476 => 187,  470 => 186,  464 => 184,  458 => 182,  455 => 181,  451 => 180,  448 => 179,  442 => 177,  440 => 176,  433 => 172,  428 => 169,  424 => 168,  421 => 167,  414 => 163,  410 => 162,  406 => 160,  404 => 159,  399 => 157,  392 => 152,  389 => 151,  386 => 150,  383 => 149,  380 => 148,  378 => 146,  376 => 145,  373 => 144,  370 => 143,  367 => 142,  365 => 140,  363 => 139,  360 => 138,  357 => 137,  355 => 135,  353 => 134,  350 => 133,  347 => 132,  345 => 131,  342 => 130,  339 => 129,  319 => 128,  303 => 120,  301 => 89,  298 => 88,  292 => 85,  289 => 84,  286 => 67,  284 => 66,  281 => 65,  278 => 64,  275 => 63,  256 => 62,  240 => 59,  238 => 58,  237 => 57,  236 => 56,  235 => 55,  234 => 53,  233 => 52,  232 => 51,  229 => 50,  226 => 49,  202 => 48,  183 => 32,  180 => 31,  171 => 29,  166 => 28,  164 => 27,  160 => 25,  154 => 22,  151 => 21,  148 => 20,  134 => 19,  128 => 17,  121 => 13,  118 => 12,  115 => 11,  97 => 10,  95 => 9,  89 => 5,  69 => 4,  55 => 197,  52 => 122,  49 => 61,  46 => 37,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    Displays title and search form
#}
{% macro renderTitleAndButtons(pageTitle, buttons) %}
    <div class=\"container-fluid page-title\">
        <div class=\"navigation navbar-extra navbar-extra-right\">
            <div class=\"row\">
                <div class=\"pull-left pull-left-extra\">
                    {% if pageTitle is iterable %}
                        {% for title in pageTitle%}
                            {% if not loop.last %}
                            <div class=\"sub-title\">
                                {{ title }}
                            </div>
                            <span class=\"separator\">/</span>
                            {% else %}
                            <h1 class=\"page-title__entity-title\">{{ title|raw }}</h1>
                            {% endif %}
                        {% endfor %}
                    {% else %}
                        <h1 class=\"page-title__entity-title\">
                            {{ pageTitle }}
                        </h1>
                    {% endif %}
                </div>
                <div class=\"pull-right title-buttons-container\">
                    {% if buttons is defined %}
                        {% for button in buttons %}
                            {{ button }}
                        {% endfor %}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
{% endmacro %}

{#
    Render page scrollable data
    params:
        configTree       - tree of current configuration
        form             - form view of active group
        activeTabName    - active tab name
        activeSubTabName - active subtab name
        routeName        - route name for tabs switch
        routeParameters  - additional route parameters
#}
{% macro renderScrollData(configTree, form, activeTabName = false, activeSubTabName = false, routeName = 'oro_config_configuration_system', routeParameters = {}) %}
    {% import _self as configMacros %}

    {{ configMacros.renderConfigurationScrollData({
        configTree: configTree,
        form: form,
        content: {},
        activeTabName: activeTabName,
        activeSubTabName: activeSubTabName,
        routeName: routeName,
        routeParameters: routeParameters
    }) }}
{% endmacro %}

{% macro renderConfigurationScrollData(data) %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% import _self as configMacros %}

    {% set content %}
        <div class=\"layout-content\" data-page-component-view=\"{{ {
            view: 'oroui/js/app/views/highlight-text-view',
            highlightSwitcherContainer: 'div.system-configuration-content-header',
            highlightStateStorageKey: 'show-all-configuration-items-on-search',
            highlightSelectors: [
                'div.system-configuration-content-title',
                'h5.user-fieldset span',
                'div.control-label label',
                'i.tooltip-icon',
                'div.controls > div.control-subgroup *[data-name=\"field__value\"]',
                '.select2-offscreen[data-name]'
            ],
            toggleSelectors: {
                'div.control-group': 'div.control-group-wrapper',
                'fieldset.form-horizontal': 'div.system-configuration-content-inner'
            },
            viewGroup: 'configuration'
        }|json_encode }}\">
            {{ configMacros.renderTabContent(data.form, data.content) }}
        </div>
    {% endset %}
    <div class=\"system-configuration-container\">
        {% embed \"@OroUI/content_sidebar.html.twig\" with {options: {
            scrollbar: '[data-role=\"jstree-container\"]'
        }} %}
            {% block header %}
                <div id=\"system-configuration-jstree-inline-actions\"></div>
            {% endblock header %}
            {% block sidebar %}
                {% import '@OroUI/macros.html.twig' as UI %}
                {{ UI.renderJsTree({
                    'label': null,
                    'treeOptions': {
                        'data' : data.configTree,
                        'viewGroup': 'configuration',
                        'nodeId': data.activeSubTabName,
                        'onSelectRoute': data.routeName,
                        'onSelectRouteParameters': data.routeParameters,
                        'view': 'oroconfig/js/app/views/configuration-tree-view'
                    },
                    'actionsOptions': {
                        inlineActionsCount: 2,
                        inlineActionsElement: '#system-configuration-jstree-inline-actions'
                    }
                }) }}
            {% endblock sidebar %}

            {% block content %}
                {% autoescape %}
                    {{ content }}
                {% endautoescape %}
            {% endblock content %}
        {% endembed %}
    </div>
{% endmacro %}

{#
    Renders tab form
    params:
        form        - form view for active tab tree configuration
#}
{% macro renderTabContent(form, content) %}
    {% import _self as configMacros %}

    {% set content = content|default({}) %}
    {% set processForm = false %}
    {% if content.formErrors is not defined %}
        {% set content = content|merge({
            formErrors: form_errors(form)
        }) %}
    {% endif %}
    {% if content.dataBlocks is not defined %}
        {% set content = content|merge({
            dataBlocks: form_data_blocks(form)
        }) %}
        {% set processForm = true %}
    {% endif %}
    {% if content.hiddenData is not defined %}
        {% set content = content|merge({
            hiddenData: form_rest(form)
        }) %}
    {% endif %}
    {% if processForm %}
        {% set content = oro_form_process(content, form) %}
    {% endif %}

    <div class=\"placeholder\">
        <div class=\"scrollable-container\">
            <div class=\"system-configuration-content content form-container\" id=\"configuration-options-block\">
                <div class=\"pull-right\">
                    <input type=\"hidden\" name=\"input_action\" value=\"\" data-form-id=\"{{ form.vars.id }}\"/>
                </div>
                {% if content.formErrors is defined and content.formErrors | length %}
                    <div class=\"customer-info-actions container-fluid well-small alert-wrap\" role=\"alert\">
                        <div class=\"alert alert-error alert-dismissible\">
                            <button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"{{ 'Close'|trans }}\" data-target=\".alert-wrap\"><span aria-hidden=\"true\">&times;</span></button>
                            {{ content.formErrors|raw }}
                        </div>
                    </div>
                {% endif %}

                {% for scrollBlock in content.dataBlocks %}
                <div class=\"system-configuration-content-wrapper\">
                    <div class=\"system-configuration-content-header\">
                        <div class=\"system-configuration-content-title\">
                            {{ scrollBlock.title|trans }}
                        </div>
                    </div>
                    <div class=\"system-configuration-content-inner\">
                        {% if scrollBlock.description is defined and scrollBlock.description != '' %}
                            <p>{{ scrollBlock.description|trans }}</p>
                        {% endif %}

                        {% for subblock in scrollBlock.subblocks %}
                            {% if subblock is iterable %}
                                {{ configMacros.renderFieldset(subblock) }}
                            {% else %}
                                {{ subblock|raw }}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
                {% endfor %}
                <div class=\"hide\">
                    {{ content.hiddenData|raw }}
                </div>
            </div>
        </div>
    </div>
{% endmacro %}

{#
    Renders fieldset
    params:
        block.title       - fieldset label
        block.description - fieldset description (optional)
        block.data        - fields data
        block.tooltip     - fieldset tooltip (optional)
#}
{% macro renderFieldset(block) %}
    {% import '@OroUI/macros.html.twig' as ui %}
    {% if block.data|filter(v => v != \"\")|length > 0 %}
    <fieldset class=\"form-horizontal form-horizontal-large\">
        {% if block.title is defined %}
        <h5 class=\"user-fieldset\">
            <span>{{ block.title|trans }}</span>
            {% if block.tooltip is defined and block.tooltip != '' %}
                <label class=\"control-label header-tooltips\">{{ ui.tooltip(block.tooltip, {}, 'right') }}</label>
            {% endif %}
        </h5>
        {% endif %}

        {% if block.description is defined and block.description != '' %}
            <div class=\"container-fluid\">
                {% if block.descriptionStyle is defined and block.descriptionStyle != '' %}
                    <p class=\"{{ block.descriptionStyle }}\">{{ block.description|trans|oro_html_sanitize }}</p>
                {% else %}
                    <p>{{ block.description|trans|oro_html_sanitize }}</p>
                {% endif %}
            </div>
        {% endif %}

        <div class=\"control-group-wrapper\">
            {% for dataBlock in block.data %}
                {{ dataBlock|raw }}
            {% endfor %}
        </div>
    </fieldset>
    {% endif %}
{% endmacro %}
", "@OroConfig/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ConfigBundle/Resources/views/macros.html.twig");
    }
}
