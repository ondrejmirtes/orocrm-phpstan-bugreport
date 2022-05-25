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

/* @OroUI/layouts/blank/page/layout.html.twig */
class __TwigTemplate_9bc0d65dfe09839547e6c13e99773fc6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_layout_js_modules_config_widget' => [$this, 'block__layout_js_modules_config_widget'],
            '_layout_js_build_scripts_widget' => [$this, 'block__layout_js_build_scripts_widget'],
            'body_widget' => [$this, 'block_body_widget'],
            '_wrapper_widget' => [$this, 'block__wrapper_widget'],
            '_page_container_widget' => [$this, 'block__page_container_widget'],
            '_page_main_widget' => [$this, 'block__page_main_widget'],
            '_page_main_content_widget' => [$this, 'block__page_main_content_widget'],
            '_page_main_header_widget' => [$this, 'block__page_main_header_widget'],
            '_page_content_widget' => [$this, 'block__page_content_widget'],
            '_page_sidebar_widget' => [$this, 'block__page_sidebar_widget'],
            '_skip_to_content_widget' => [$this, 'block__skip_to_content_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUI/layouts/blank/page/layout.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/layouts/blank/page/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/layouts/blank/page/layout.html.twig"));

        // line 1
        $this->displayBlock('_layout_js_modules_config_widget', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('_layout_js_build_scripts_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('body_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('_wrapper_widget', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('_page_container_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('_page_main_widget', $context, $blocks);
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('_page_main_content_widget', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('_page_main_header_widget', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('_page_content_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('_page_sidebar_widget', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('_skip_to_content_widget', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block__layout_js_modules_config_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_layout_js_modules_config_widget", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_layout_js_modules_config_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_layout_js_modules_config_widget"));

        // line 2
        echo "    ";
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 2, $this->source); })()), 'widget');
        echo "
    ";
        // line 3
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("js_modules_config", $context)) ? (_twig_default_filter((isset($context["js_modules_config"]) || array_key_exists("js_modules_config", $context) ? $context["js_modules_config"] : (function () { throw new RuntimeError('Variable "js_modules_config" does not exist.', 3, $this->source); })()), "js_modules_config")) : ("js_modules_config")), array());
        // line 4
        echo "    ";
        $macros["Asset"] = $this->loadTemplate("@OroAsset/Asset.html.twig", "@OroUI/layouts/blank/page/layout.html.twig", 4)->unwrap();
        // line 5
        echo "    ";
        echo twig_call_macro($macros["Asset"], "macro_js_modules_config", [["oroui/js/app" => ["publicPath" => twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(        // line 7
(isset($context["publicPath"]) || array_key_exists("publicPath", $context) ? $context["publicPath"] : (function () { throw new RuntimeError('Variable "publicPath" does not exist.', 7, $this->source); })())), "?", 2), 0, [], "array", false, false, false, 7)]]], 5, $context, $this->getSourceContext());
        // line 9
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 12
    public function block__layout_js_build_scripts_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_layout_js_build_scripts_widget", $this->getTemplateName(), 12));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_layout_js_build_scripts_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_layout_js_build_scripts_widget"));

        // line 13
        echo "    ";
        $macros["Asset"] = $this->loadTemplate("@OroAsset/Asset.html.twig", "@OroUI/layouts/blank/page/layout.html.twig", 13)->unwrap();
        // line 14
        echo "    ";
        echo twig_call_macro($macros["Asset"], "macro_js", [(isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 14, $this->source); })())], 14, $context, $this->getSourceContext());
        echo "
    ";
        // line 15
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 15, $this->source); })()), 'widget');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 18
    public function block_body_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("body_widget", $this->getTemplateName(), 18));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_widget"));

        // line 19
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUI/layouts/blank/page/layout.html.twig", 19)->unwrap();
        // line 20
        echo "    ";
        $context["attr"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->defaultAttributes((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 20, $this->source); })()), ["~class" => ((" body " . (($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) ? ("mobile") : ("desktop"))) . "-version")]);
        // line 23
        echo "
    <body ";
        // line 24
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <div ";
        // line 25
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroui/js/app/components/app-loading-mask-component"]], 25, $context, $this->getSourceContext());
        // line 27
        echo "></div>
        <div ";
        // line 28
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroui/js/app/components/app-loading-bar-component"]], 28, $context, $this->getSourceContext());
        // line 30
        echo "></div>
        <div ";
        // line 31
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroui/js/app/views/swipeable-view", "options" => ["_sourceElement" => "body"]]], 31, $context, $this->getSourceContext());
        // line 34
        echo "></div>
        <div id=\"container\" data-layout=\"separate\"
             ";
        // line 36
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroui/js/app/views/page/content-view"]], 36, $context, $this->getSourceContext());
        echo ">
            ";
        // line 37
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 37, $this->source); })()), 'widget');
        echo "
        </div>
    </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 42
    public function block__wrapper_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_wrapper_widget", $this->getTemplateName(), 42));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_wrapper_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_wrapper_widget"));

        // line 43
        echo "    ";
        $context["attr"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->defaultAttributes((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 43, $this->source); })()), ["~class" => " wrapper"]);
        // line 46
        echo "
    <div ";
        // line 47
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 48
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 48, $this->source); })()), 'widget');
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 52
    public function block__page_container_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_page_container_widget", $this->getTemplateName(), 52));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_page_container_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_page_container_widget"));

        // line 53
        echo "    ";
        $context["attr"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->defaultAttributes((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 53, $this->source); })()), ["~class" => " page-container"]);
        // line 56
        echo "
    <div ";
        // line 57
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 58
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 58, $this->source); })()), 'widget');
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 62
    public function block__page_main_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_page_main_widget", $this->getTemplateName(), 62));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_page_main_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_page_main_widget"));

        // line 63
        echo "    ";
        $context["attr"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->defaultAttributes((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 63, $this->source); })()), ["~class" => " page-main", "data-role" => "page-main-container", "data-skip-focus-decoration" => ""]);
        // line 68
        echo "
    <main";
        // line 69
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 70
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 70, $this->source); })()), 'widget');
        echo "
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 74
    public function block__page_main_content_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_page_main_content_widget", $this->getTemplateName(), 74));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_page_main_content_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_page_main_content_widget"));

        // line 75
        echo "    ";
        $context["attr"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->defaultAttributes((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 75, $this->source); })()), ["~class" => " page-main__content"]);
        // line 78
        echo "
    <div";
        // line 79
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 80
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 80, $this->source); })()), 'widget');
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 84
    public function block__page_main_header_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_page_main_header_widget", $this->getTemplateName(), 84));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_page_main_header_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_page_main_header_widget"));

        // line 85
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 85, $this->source); })()), "count", [], "any", false, false, false, 85) > 0)) {
            // line 86
            echo "        ";
            $context["attr"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->defaultAttributes((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 86, $this->source); })()), ["~class" => " page-main__header"]);
            // line 89
            echo "        <div";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            ";
            // line 90
            echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 90, $this->source); })()), 'widget');
            echo "
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 95
    public function block__page_content_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_page_content_widget", $this->getTemplateName(), 95));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_page_content_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_page_content_widget"));

        // line 96
        echo "    ";
        $context["visibleSidebarChildren"] = [];
        // line 97
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "page_sidebar", [], "any", true, true, false, 97)) {
            // line 98
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 98, $this->source); })()), "page_sidebar", [], "any", false, false, false, 98), "children", [], "any", false, false, false, 98));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 99
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 99), "visible", [], "any", false, false, false, 99)) {
                    // line 100
                    echo "                ";
                    $context["visibleSidebarChildren"] = twig_array_merge((isset($context["visibleSidebarChildren"]) || array_key_exists("visibleSidebarChildren", $context) ? $context["visibleSidebarChildren"] : (function () { throw new RuntimeError('Variable "visibleSidebarChildren" does not exist.', 100, $this->source); })()), [0 => $context["child"]]);
                    // line 101
                    echo "            ";
                }
                // line 102
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "    ";
        }
        // line 104
        echo "
    ";
        // line 105
        $context["attr"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->defaultAttributes((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 105, $this->source); })()), ["~class" => " page-content", "data-role" => "page-content"]);
        // line 109
        echo "
    ";
        // line 110
        $context["sidebarIsVisible"] = (twig_length_filter($this->env, (isset($context["visibleSidebarChildren"]) || array_key_exists("visibleSidebarChildren", $context) ? $context["visibleSidebarChildren"] : (function () { throw new RuntimeError('Variable "visibleSidebarChildren" does not exist.', 110, $this->source); })())) > 0);
        // line 111
        echo "    ";
        if ((array_key_exists("sidebarExpanded", $context) && ((isset($context["sidebarExpanded"]) || array_key_exists("sidebarExpanded", $context) ? $context["sidebarExpanded"] : (function () { throw new RuntimeError('Variable "sidebarExpanded" does not exist.', 111, $this->source); })()) == false))) {
            // line 112
            echo "        ";
            $context["sidebarIsVisible"] = false;
            // line 113
            echo "    ";
        }
        // line 114
        echo "
    ";
        // line 115
        if ((isset($context["sidebarIsVisible"]) || array_key_exists("sidebarIsVisible", $context) ? $context["sidebarIsVisible"] : (function () { throw new RuntimeError('Variable "sidebarIsVisible" does not exist.', 115, $this->source); })())) {
            // line 116
            echo "        ";
            $context["attr"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->defaultAttributes((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 116, $this->source); })()), ["~class" => " page-content--has-sidebar"]);
            // line 119
            echo "    ";
        }
        // line 120
        echo "
    <section ";
        // line 121
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 122
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 122, $this->source); })()), 'widget');
        echo "
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 126
    public function block__page_sidebar_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_page_sidebar_widget", $this->getTemplateName(), 126));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_page_sidebar_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_page_sidebar_widget"));

        // line 127
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 127, $this->source); })()), "count", [], "any", false, false, false, 127) > 0)) {
            // line 128
            echo "        ";
            $context["attr"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->defaultAttributes((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 128, $this->source); })()), ["~class" => " page-sidebar", "data-role" => "page-sidebar"]);
            // line 132
            echo "
        ";
            // line 133
            if ((array_key_exists("sidebarExpanded", $context) && ((isset($context["sidebarExpanded"]) || array_key_exists("sidebarExpanded", $context) ? $context["sidebarExpanded"] : (function () { throw new RuntimeError('Variable "sidebarExpanded" does not exist.', 133, $this->source); })()) == false))) {
                // line 134
                echo "            ";
                $context["attr"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->defaultAttributes((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 134, $this->source); })()), ["~class" => " hidden"]);
                // line 137
                echo "        ";
            }
            // line 138
            echo "
        <aside ";
            // line 139
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            ";
            // line 140
            echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 140, $this->source); })()), 'widget');
            echo "
        </aside>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 145
    public function block__skip_to_content_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_skip_to_content_widget", $this->getTemplateName(), 145));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_skip_to_content_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_skip_to_content_widget"));

        // line 146
        echo "    ";
        $context["attr"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->defaultAttributes((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 146, $this->source); })()), ["~class" => "btn btn--info skip-to-content__btn", "data-page-component-proxy-focus" => "[data-role=\"page-main-container\"]"]);
        // line 150
        echo "
    <div class=\"skip-to-content\">
        <button ";
        // line 152
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.button.skip_to_content"), "html", null, true);
        echo "</button>
        <div class=\"skip-to-content__decorator\" aria-hidden=\"true\"></div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroUI/layouts/blank/page/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  626 => 152,  622 => 150,  619 => 146,  606 => 145,  589 => 140,  585 => 139,  582 => 138,  579 => 137,  576 => 134,  574 => 133,  571 => 132,  568 => 128,  565 => 127,  552 => 126,  536 => 122,  532 => 121,  529 => 120,  526 => 119,  523 => 116,  521 => 115,  518 => 114,  515 => 113,  512 => 112,  509 => 111,  507 => 110,  504 => 109,  502 => 105,  499 => 104,  496 => 103,  490 => 102,  487 => 101,  484 => 100,  481 => 99,  476 => 98,  473 => 97,  470 => 96,  457 => 95,  440 => 90,  435 => 89,  432 => 86,  429 => 85,  416 => 84,  400 => 80,  396 => 79,  393 => 78,  390 => 75,  377 => 74,  361 => 70,  357 => 69,  354 => 68,  351 => 63,  338 => 62,  322 => 58,  318 => 57,  315 => 56,  312 => 53,  299 => 52,  283 => 48,  279 => 47,  276 => 46,  273 => 43,  260 => 42,  243 => 37,  239 => 36,  235 => 34,  233 => 31,  230 => 30,  228 => 28,  225 => 27,  223 => 25,  219 => 24,  216 => 23,  213 => 20,  210 => 19,  197 => 18,  182 => 15,  177 => 14,  174 => 13,  161 => 12,  147 => 9,  145 => 7,  143 => 5,  140 => 4,  138 => 3,  133 => 2,  120 => 1,  107 => 145,  104 => 144,  102 => 126,  99 => 125,  97 => 95,  94 => 94,  92 => 84,  89 => 83,  87 => 74,  84 => 73,  82 => 62,  79 => 61,  77 => 52,  74 => 51,  72 => 42,  69 => 41,  67 => 18,  64 => 17,  62 => 12,  59 => 11,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block _layout_js_modules_config_widget %}
    {{ block_widget(block) }}
    {% placeholder js_modules_config %}
    {% import '@OroAsset/Asset.html.twig' as Asset %}
    {{ Asset.js_modules_config({
        'oroui/js/app': {
            publicPath: asset(publicPath)|split('?', 2)[0]
        }
    }) }}
{% endblock %}

{% block _layout_js_build_scripts_widget %}
    {% import '@OroAsset/Asset.html.twig' as Asset %}
    {{ Asset.js(src) }}
    {{ block_widget(block) }}
{% endblock %}

{% block body_widget %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' body ' ~ (isMobileVersion() ? 'mobile' : 'desktop') ~ '-version'
    }) %}

    <body {{ block('block_attributes') }}>
        <div {{ UI.renderPageComponentAttributes({
            module: 'oroui/js/app/components/app-loading-mask-component'
        }) }}></div>
        <div {{ UI.renderPageComponentAttributes({
            module: 'oroui/js/app/components/app-loading-bar-component'
        }) }}></div>
        <div {{ UI.renderPageComponentAttributes({
            view: 'oroui/js/app/views/swipeable-view',
            options: {_sourceElement: 'body'}
        }) }}></div>
        <div id=\"container\" data-layout=\"separate\"
             {{ UI.renderPageComponentAttributes({view: 'oroui/js/app/views/page/content-view'}) }}>
            {{ block_widget(block) }}
        </div>
    </body>
{% endblock %}

{% block _wrapper_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' wrapper'
    }) %}

    <div {{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </div>
{% endblock %}

{% block _page_container_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' page-container'
    }) %}

    <div {{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </div>
{% endblock %}

{% block _page_main_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' page-main',
        'data-role': 'page-main-container',
        'data-skip-focus-decoration': ''
    }) %}

    <main{{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </main>
{% endblock %}

{% block _page_main_content_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' page-main__content'
    }) %}

    <div{{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </div>
{% endblock %}

{% block _page_main_header_widget %}
    {% if block.count > 0 %}
        {% set attr = layout_attr_defaults(attr, {
            '~class': ' page-main__header'
        }) %}
        <div{{ block('block_attributes') }}>
            {{ block_widget(block) }}
        </div>
    {% endif %}
{% endblock %}

{% block _page_content_widget %}
    {% set visibleSidebarChildren = [] %}
    {% if blocks.page_sidebar is defined %}
        {% for child in blocks.page_sidebar.children %}
            {% if child.vars.visible %}
                {% set visibleSidebarChildren  = visibleSidebarChildren|merge([child]) %}
            {% endif %}
        {% endfor %}
    {% endif %}

    {% set attr = layout_attr_defaults(attr, {
        '~class': ' page-content',
        'data-role': 'page-content'
    }) %}

    {% set sidebarIsVisible = visibleSidebarChildren|length > 0 %}
    {% if sidebarExpanded is defined and sidebarExpanded == false %}
        {% set sidebarIsVisible = false %}
    {% endif %}

    {% if sidebarIsVisible %}
        {% set attr = layout_attr_defaults(attr, {
            '~class': ' page-content--has-sidebar'
        }) %}
    {% endif %}

    <section {{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </section>
{% endblock %}

{% block _page_sidebar_widget %}
    {% if block.count > 0 %}
        {% set attr = layout_attr_defaults(attr, {
            '~class': ' page-sidebar',
            'data-role': 'page-sidebar'
        }) %}

        {% if sidebarExpanded is defined and sidebarExpanded == false %}
            {% set attr = layout_attr_defaults(attr, {
                '~class': ' hidden'
            }) %}
        {% endif %}

        <aside {{ block('block_attributes') }}>
            {{ block_widget(block) }}
        </aside>
    {% endif %}
{% endblock %}

{% block _skip_to_content_widget %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': 'btn btn--info skip-to-content__btn',
        'data-page-component-proxy-focus': '[data-role=\"page-main-container\"]'
    }) %}

    <div class=\"skip-to-content\">
        <button {{ block('block_attributes') }}>{{ 'oro.ui.button.skip_to_content'|trans }}</button>
        <div class=\"skip-to-content__decorator\" aria-hidden=\"true\"></div>
    </div>
{% endblock %}
", "@OroUI/layouts/blank/page/layout.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/page/layout.html.twig");
    }
}
