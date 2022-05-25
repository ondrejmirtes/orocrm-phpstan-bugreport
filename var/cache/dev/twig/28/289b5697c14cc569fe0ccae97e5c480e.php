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

/* @OroUI/Default/index.html.twig */
class __TwigTemplate_650c041dd53bc7fd2d992670009d758c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 190
        $_trait_0 = $this->loadTemplate("@OroUI/Default/navbar/blocks.html.twig", "@OroUI/Default/index.html.twig", 190);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@OroUI/Default/navbar/blocks.html.twig".'" cannot be used as a trait.', 190, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'head' => [$this, 'block_head'],
                'head_style' => [$this, 'block_head_style'],
                'script' => [$this, 'block_script'],
                'scripts_before' => [$this, 'block_scripts_before'],
                'application' => [$this, 'block_application'],
                'head_script' => [$this, 'block_head_script'],
                'bodyClass' => [$this, 'block_bodyClass'],
                'content_side' => [$this, 'block_content_side'],
                'header' => [$this, 'block_header'],
                'left_panel' => [$this, 'block_left_panel'],
                'main' => [$this, 'block_main'],
                'before_content' => [$this, 'block_before_content'],
                'messages' => [$this, 'block_messages'],
                'breadcrumb' => [$this, 'block_breadcrumb'],
                'before_content_addition' => [$this, 'block_before_content_addition'],
                'pin_button' => [$this, 'block_pin_button'],
                'page_container' => [$this, 'block_page_container'],
                'content' => [$this, 'block_content'],
                'right_panel' => [$this, 'block_right_panel'],
                'footer' => [$this, 'block_footer'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUI/Default/index.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/Default/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/Default/index.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUI/Default/index.html.twig", 1)->unwrap();
        // line 2
        if ( !$this->extensions['Oro\Bundle\NavigationBundle\Twig\HashNavExtension']->checkIsHashNavigation()) {
            // line 3
            echo "    <!DOCTYPE html>
    <html lang=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\LocaleExtension']->getLanguage(), 0, 2), "html", null, true);
            echo "\"";
            echo (($this->extensions['Oro\Bundle\LocaleBundle\Twig\LocaleExtension']->isRtlMode()) ? (" dir=\"rtl\"") : (""));
            echo "
          class=\"";
            // line 5
            if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) {
                echo "mobile";
            } else {
                echo "desktop";
            }
            echo "-version\">
    <head>
        ";
            // line 7
            $this->displayBlock('head', $context, $blocks);
            // line 39
            echo "    </head>
    <body class=\"";
            // line 40
            if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) {
                echo "mobile";
            } else {
                echo "desktop";
            }
            echo "-version lang-";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\LocaleExtension']->getLanguage(), 0, 2), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "debug", [], "any", false, false, false, 40)) {
                echo "dev-mode ";
            }
            $this->displayBlock('bodyClass', $context, $blocks);
            echo "\">
    ";
            // line 41
            $this->loadTemplate("@OroUI/Default/noscript.html.twig", "@OroUI/Default/index.html.twig", 41)->display($context);
            // line 42
            echo "    <div ";
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroui/js/app/components/app-loading-mask-component", "options" => ["showOnStartup" => true]]], 42, $context, $this->getSourceContext());
            // line 45
            echo "></div>
    <div ";
            // line 46
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroui/js/app/components/app-loading-bar-component", "options" => ["viewOptions" => ["container" => "#oroplatform-header"]]]], 46, $context, $this->getSourceContext());
            // line 49
            echo "></div>
    ";
            // line 50
            if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) {
                // line 51
                echo "        <div ";
                echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroui/js/app/views/swipeable-view", "options" => ["_sourceElement" => "body"]]], 51, $context, $this->getSourceContext());
                // line 54
                echo "></div>
    ";
            }
            // line 56
            echo "    ";
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("after_body_start", $context)) ? (_twig_default_filter((isset($context["after_body_start"]) || array_key_exists("after_body_start", $context) ? $context["after_body_start"] : (function () { throw new RuntimeError('Variable "after_body_start" does not exist.', 56, $this->source); })()), "after_body_start")) : ("after_body_start")), array());
            // line 57
            echo "    <div id=\"progressbar\" class=\"progress-bar-container\">
        <h3 class=\"progress-title\">";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.loading"), "html", null, true);
            echo "</h3>
        <div class=\"progress infinite\">
            <div class=\"progress-bar\" role=\"progressbar\" aria-valuetext=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.page_loading"), "html", null, true);
            echo "\"></div>
        </div>
    </div>
    <div id=\"page\" style=\"display:none;\" class=\"app-page\">
        ";
            // line 64
            $this->displayBlock('content_side', $context, $blocks);
            // line 69
            echo "        <div class=\"app-page__content\">
            ";
            // line 70
            $this->displayBlock('header', $context, $blocks);
            // line 100
            echo "            <main class=\"app-page__main\">
                ";
            // line 101
            if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isDesktop()) {
                // line 102
                echo "                    ";
                $this->displayBlock('left_panel', $context, $blocks);
                // line 107
                echo "                ";
            }
            // line 108
            echo "                ";
            $this->displayBlock('main', $context, $blocks);
            // line 167
            echo "                ";
            if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isDesktop()) {
                // line 168
                echo "                    ";
                $this->displayBlock('right_panel', $context, $blocks);
                // line 173
                echo "                ";
            }
            // line 174
            echo "            </main>
        ";
            // line 175
            $this->displayBlock('footer', $context, $blocks);
            // line 181
            echo "        </div>
    </div>
    ";
            // line 183
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("before_body_end", $context)) ? (_twig_default_filter((isset($context["before_body_end"]) || array_key_exists("before_body_end", $context) ? $context["before_body_end"] : (function () { throw new RuntimeError('Variable "before_body_end" does not exist.', 183, $this->source); })()), "before_body_end")) : ("before_body_end")), array());
            // line 184
            echo "    </body>
    </html>
";
        } else {
            // line 187
            echo "    ";
            // line 188
            echo "    ";
            $context["title"] = $this->extensions['Oro\Bundle\NavigationBundle\Twig\TitleExtension']->render();
            // line 189
            echo "    ";
            // line 190
            echo "    ";
            // line 191
            echo "    ";
            $this->loadTemplate("@OroNavigation/HashNav/hashNavAjax.html.twig", "@OroUI/Default/index.html.twig", 191)->display(twig_array_merge($context, ["data" => ["scripts" =>             $this->renderBlock("head_script", $context, $blocks), "content" =>             $this->renderBlock("page_container", $context, $blocks), "breadcrumb" => twig_trim_filter(            $this->renderBlock("breadcrumb", $context, $blocks)), "beforeContentAddition" =>             $this->renderBlock("before_content_addition", $context, $blocks)]]));
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("head", $this->getTemplateName(), 7));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 8
        echo "            <title>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Loading...", [], "messages");
        echo "</title>
            <script id=\"page-title\" type=\"text/html\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\NavigationBundle\Twig\TitleExtension']->render(), "html", null, true);
        echo "</script>
            <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0";
        // line 10
        if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) {
            echo ", user-scalable=no, viewport-fit=cover";
        }
        echo "\"/>
            <meta http-equiv=\"cache-control\" content=\"max-age=0\" />
            <meta http-equiv=\"cache-control\" content=\"no-cache\" />
            <meta http-equiv=\"expires\" content=\"0\" />
            <meta http-equiv=\"pragma\" content=\"no-cache\" />
            ";
        // line 15
        $this->displayBlock('head_style', $context, $blocks);
        // line 21
        echo "
            ";
        // line 22
        $this->displayBlock('script', $context, $blocks);
        // line 38
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 15
    public function block_head_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("head_style", $this->getTemplateName(), 15));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_style"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_style"));

        // line 16
        echo "                ";
        if ($this->extensions['Oro\Bundle\ThemeBundle\Twig\ThemeExtension']->getThemeIcon()) {
            // line 17
            echo "                    <link rel=\"shortcut icon\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Oro\Bundle\ThemeBundle\Twig\ThemeExtension']->getThemeIcon()), "html", null, true);
            echo "\" />
                ";
        }
        // line 19
        echo "               ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("head_style", $context)) ? (_twig_default_filter((isset($context["head_style"]) || array_key_exists("head_style", $context) ? $context["head_style"] : (function () { throw new RuntimeError('Variable "head_style" does not exist.', 19, $this->source); })()), "head_style")) : ("head_style")), array());
        // line 20
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 22
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("script", $this->getTemplateName(), 22));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 23
        echo "                ";
        $this->displayBlock('scripts_before', $context, $blocks);
        // line 26
        echo "                ";
        $this->displayBlock('application', $context, $blocks);
        // line 29
        echo "                <script>
                ";
        // line 30
        if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) {
            // line 31
            echo "                    loadModules(['oroui/js/mobile/layout'], function (layout) {layout.init();});
                ";
        }
        // line 33
        echo "                </script>
                ";
        // line 34
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("scripts_after", $context)) ? (_twig_default_filter((isset($context["scripts_after"]) || array_key_exists("scripts_after", $context) ? $context["scripts_after"] : (function () { throw new RuntimeError('Variable "scripts_after" does not exist.', 34, $this->source); })()), "scripts_after")) : ("scripts_after")), array());
        // line 35
        echo "                ";
        $this->displayBlock('head_script', $context, $blocks);
        // line 37
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 23
    public function block_scripts_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("scripts_before", $this->getTemplateName(), 23));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts_before"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts_before"));

        // line 24
        echo "                    ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("scripts_before", $context)) ? (_twig_default_filter((isset($context["scripts_before"]) || array_key_exists("scripts_before", $context) ? $context["scripts_before"] : (function () { throw new RuntimeError('Variable "scripts_before" does not exist.', 24, $this->source); })()), "scripts_before")) : ("scripts_before")), array());
        // line 25
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 26
    public function block_application($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("application", $this->getTemplateName(), 26));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "application"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "application"));

        // line 27
        echo "                    ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("application", $context)) ? (_twig_default_filter((isset($context["application"]) || array_key_exists("application", $context) ? $context["application"] : (function () { throw new RuntimeError('Variable "application" does not exist.', 27, $this->source); })()), "application")) : ("application")), array());
        // line 28
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 35
    public function block_head_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("head_script", $this->getTemplateName(), 35));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_script"));

        // line 36
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 40
    public function block_bodyClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("bodyClass", $this->getTemplateName(), 40));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyClass"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyClass"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 64
    public function block_content_side($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_side", $this->getTemplateName(), 64));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_side"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_side"));

        // line 65
        echo "            <div class=\"app-page__content-side\">
                ";
        // line 66
        $this->loadTemplate("@OroUI/Default/navbar/sided.html.twig", "@OroUI/Default/index.html.twig", 66)->display($context);
        // line 67
        echo "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 70
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("header", $this->getTemplateName(), 70));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 71
        echo "                <header class=\"app-header";
        if (($this->extensions['Oro\Bundle\ConfigBundle\Twig\ConfigExtension']->getConfigValue("oro_ui.navbar_position") != "top")) {
            echo " thick";
        }
        echo "\" id=\"oroplatform-header\"
                    ";
        // line 72
        if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) {
            // line 73
            echo "                        ";
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroui/js/app/views/sticky-element/sticky-element-view", "options" => ["stickyOptions" => ["enabled" => true]]]], 73, $context, $this->getSourceContext());
            // line 80
            echo "
                    ";
        }
        // line 81
        echo ">
                    ";
        // line 82
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("before_navigation", $context)) ? (_twig_default_filter((isset($context["before_navigation"]) || array_key_exists("before_navigation", $context) ? $context["before_navigation"] : (function () { throw new RuntimeError('Variable "before_navigation" does not exist.', 82, $this->source); })()), "before_navigation")) : ("before_navigation")), array());
        // line 83
        echo "                    <div class=\"app-header__inner\">
                        <div class=\"app-header__container\">
                            ";
        // line 85
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("header_logo", $context)) ? (_twig_default_filter((isset($context["header_logo"]) || array_key_exists("header_logo", $context) ? $context["header_logo"] : (function () { throw new RuntimeError('Variable "header_logo" does not exist.', 85, $this->source); })()), "header_logo")) : ("header_logo")), array());
        // line 86
        echo "                            <ul class=\"user-menu\"
                                ";
        // line 87
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroui/js/app/views/page/user-menu-view"]], 87, $context, $this->getSourceContext());
        echo ">
                                ";
        // line 88
        $this->displayBlock("user_menu", $context, $blocks);
        echo "
                            </ul>
                            <div class=\"app-header__search-and-shortcuts\">
                                ";
        // line 91
        $this->displayBlock("navbar", $context, $blocks);
        echo "
                            </div>
                            ";
        // line 93
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("pin_tabs_list", $context)) ? (_twig_default_filter((isset($context["pin_tabs_list"]) || array_key_exists("pin_tabs_list", $context) ? $context["pin_tabs_list"] : (function () { throw new RuntimeError('Variable "pin_tabs_list" does not exist.', 93, $this->source); })()), "pin_tabs_list")) : ("pin_tabs_list")), array());
        // line 94
        echo "                        </div>
                    </div>
                    ";
        // line 96
        $this->loadTemplate("@OroUI/Default/navbar/top.html.twig", "@OroUI/Default/index.html.twig", 96)->display($context);
        // line 97
        echo "                    ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("after_navigation", $context)) ? (_twig_default_filter((isset($context["after_navigation"]) || array_key_exists("after_navigation", $context) ? $context["after_navigation"] : (function () { throw new RuntimeError('Variable "after_navigation" does not exist.', 97, $this->source); })()), "after_navigation")) : ("after_navigation")), array());
        // line 98
        echo "                </header>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 102
    public function block_left_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("left_panel", $this->getTemplateName(), 102));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "left_panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "left_panel"));

        // line 103
        echo "                        <div id=\"left-panel\" class=\"app-page__left-panel\">
                            ";
        // line 104
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("left_panel", $context)) ? (_twig_default_filter((isset($context["left_panel"]) || array_key_exists("left_panel", $context) ? $context["left_panel"] : (function () { throw new RuntimeError('Variable "left_panel" does not exist.', 104, $this->source); })()), "left_panel")) : ("left_panel")), ["placement" => "left"]);
        // line 105
        echo "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 108
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("main", $this->getTemplateName(), 108));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 109
        echo "                    <div id=\"central-panel\" class=\"app-page__central-panel\">
                        ";
        // line 110
        $this->displayBlock('before_content', $context, $blocks);
        // line 155
        echo "                        <div id=\"container\"";
        if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isDesktop()) {
            echo " class=\"scrollable-container\"";
        }
        echo " data-layout=\"separate\"
                             ";
        // line 156
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroui/js/app/views/page/content-view"]], 156, $context, $this->getSourceContext());
        echo ">
                            ";
        // line 157
        $this->displayBlock('page_container', $context, $blocks);
        // line 164
        echo "                        </div>
                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 110
    public function block_before_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("before_content", $this->getTemplateName(), 110));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "before_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "before_content"));

        // line 111
        echo "                        <div id=\"flash-messages\">
                            ";
        // line 112
        $this->displayBlock('messages', $context, $blocks);
        // line 133
        echo "                        </div>
                        <div class=\"page-toolbar\">
                            ";
        // line 135
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("breadcrumb_pin_before", $context)) ? (_twig_default_filter((isset($context["breadcrumb_pin_before"]) || array_key_exists("breadcrumb_pin_before", $context) ? $context["breadcrumb_pin_before"] : (function () { throw new RuntimeError('Variable "breadcrumb_pin_before" does not exist.', 135, $this->source); })()), "breadcrumb_pin_before")) : ("breadcrumb_pin_before")), array());
        // line 136
        echo "                            <div id=\"breadcrumb\"
                                class=\"page-toolbar_breadcrumb\"
                                 ";
        // line 138
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroui/js/app/views/page/breadcrumb-view"]], 138, $context, $this->getSourceContext());
        echo ">
                                ";
        // line 139
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 142
        echo "                            </div>
                            <div id=\"before-content-addition\" class=\"page-toolbar_before-content-addition\" data-layout=\"separate\"
                                 ";
        // line 144
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroui/js/app/views/page/before-content-addition-view"]], 144, $context, $this->getSourceContext());
        echo ">
                                ";
        // line 145
        $this->displayBlock('before_content_addition', $context, $blocks);
        // line 146
        echo "                            </div>
                            ";
        // line 147
        $this->displayBlock('pin_button', $context, $blocks);
        // line 152
        echo "                            ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("breadcrumb_pin_after", $context)) ? (_twig_default_filter((isset($context["breadcrumb_pin_after"]) || array_key_exists("breadcrumb_pin_after", $context) ? $context["breadcrumb_pin_after"] : (function () { throw new RuntimeError('Variable "breadcrumb_pin_after" does not exist.', 152, $this->source); })()), "breadcrumb_pin_after")) : ("breadcrumb_pin_after")), array());
        // line 153
        echo "                        </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 112
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("messages", $this->getTemplateName(), 112));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        // line 113
        echo "                                ";
        $context["flashMessages"] = [];
        // line 114
        echo "                                ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "session", [], "any", false, false, false, 114), "flashbag", [], "any", false, false, false, 114), "peekAll", [], "any", false, false, false, 114)) > 0)) {
            // line 115
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "session", [], "any", false, false, false, 115), "flashbag", [], "any", false, false, false, 115), "all", [], "any", false, false, false, 115));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 116
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 117
                    echo "                                            ";
                    $context["flashMessages"] = twig_array_merge((isset($context["flashMessages"]) || array_key_exists("flashMessages", $context) ? $context["flashMessages"] : (function () { throw new RuntimeError('Variable "flashMessages" does not exist.', 117, $this->source); })()), [0 => ["type" => $context["type"], "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"])]]);
                    // line 118
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "                                ";
        }
        // line 121
        echo "                                <div class=\"flash-messages-frame\">
                                    <div class=\"flash-messages-holder\"
                                         ";
        // line 123
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroui/js/app/views/page/messages-view", "options" => ["autoRender" => true, "initializeMessenger" => true, "messages" =>         // line 128
(isset($context["flashMessages"]) || array_key_exists("flashMessages", $context) ? $context["flashMessages"] : (function () { throw new RuntimeError('Variable "flashMessages" does not exist.', 128, $this->source); })())]]], 123, $context, $this->getSourceContext());
        // line 130
        echo "></div>
                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 139
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("breadcrumb", $this->getTemplateName(), 139));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 140
        echo "                                    ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("breadcrumb", $context)) ? (_twig_default_filter((isset($context["breadcrumb"]) || array_key_exists("breadcrumb", $context) ? $context["breadcrumb"] : (function () { throw new RuntimeError('Variable "breadcrumb" does not exist.', 140, $this->source); })()), "breadcrumb")) : ("breadcrumb")), array());
        // line 141
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 145
    public function block_before_content_addition($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("before_content_addition", $this->getTemplateName(), 145));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "before_content_addition"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "before_content_addition"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 147
    public function block_pin_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pin_button", $this->getTemplateName(), 147));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pin_button"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pin_button"));

        // line 148
        echo "                                <div class=\"page-toolbar_bookmark-buttons\">
                                    ";
        // line 149
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("pin_button", $context)) ? (_twig_default_filter((isset($context["pin_button"]) || array_key_exists("pin_button", $context) ? $context["pin_button"] : (function () { throw new RuntimeError('Variable "pin_button" does not exist.', 149, $this->source); })()), "pin_button")) : ("pin_button")), array());
        // line 150
        echo "                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 157
    public function block_page_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("page_container", $this->getTemplateName(), 157));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_container"));

        // line 158
        echo "                                ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("content_before", $context)) ? (_twig_default_filter((isset($context["content_before"]) || array_key_exists("content_before", $context) ? $context["content_before"] : (function () { throw new RuntimeError('Variable "content_before" does not exist.', 158, $this->source); })()), "content_before")) : ("content_before")), array());
        // line 159
        echo "                                ";
        $this->displayBlock('content', $context, $blocks);
        // line 162
        echo "                                ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("content_after", $context)) ? (_twig_default_filter((isset($context["content_after"]) || array_key_exists("content_after", $context) ? $context["content_after"] : (function () { throw new RuntimeError('Variable "content_after" does not exist.', 162, $this->source); })()), "content_after")) : ("content_after")), array());
        // line 163
        echo "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 159
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 159));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 160
        echo "                                    ";
        // line 161
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 168
    public function block_right_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("right_panel", $this->getTemplateName(), 168));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "right_panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "right_panel"));

        // line 169
        echo "                        <div id=\"right-panel\" class=\"app-page__right-panel\">
                            ";
        // line 170
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("right_panel", $context)) ? (_twig_default_filter((isset($context["right_panel"]) || array_key_exists("right_panel", $context) ? $context["right_panel"] : (function () { throw new RuntimeError('Variable "right_panel" does not exist.', 170, $this->source); })()), "right_panel")) : ("right_panel")), ["placement" => "right"]);
        // line 171
        echo "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 175
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("footer", $this->getTemplateName(), 175));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 176
        echo "            <div id=\"dialog-extend-fixed-container\" class=\"ui-dialog-minimize-container\"></div>
            <footer id=\"footer\" class=\"footer\">
                ";
        // line 178
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("footer_inner", $context)) ? (_twig_default_filter((isset($context["footer_inner"]) || array_key_exists("footer_inner", $context) ? $context["footer_inner"] : (function () { throw new RuntimeError('Variable "footer_inner" does not exist.', 178, $this->source); })()), "footer_inner")) : ("footer_inner")), array());
        // line 179
        echo "            </footer>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroUI/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1004 => 179,  1002 => 178,  998 => 176,  985 => 175,  971 => 171,  969 => 170,  966 => 169,  953 => 168,  940 => 161,  938 => 160,  925 => 159,  912 => 163,  909 => 162,  906 => 159,  903 => 158,  890 => 157,  876 => 150,  874 => 149,  871 => 148,  858 => 147,  834 => 145,  821 => 141,  818 => 140,  805 => 139,  790 => 130,  788 => 128,  787 => 123,  783 => 121,  780 => 120,  774 => 119,  768 => 118,  765 => 117,  760 => 116,  755 => 115,  752 => 114,  749 => 113,  736 => 112,  722 => 153,  719 => 152,  717 => 147,  714 => 146,  712 => 145,  708 => 144,  704 => 142,  702 => 139,  698 => 138,  694 => 136,  692 => 135,  688 => 133,  686 => 112,  683 => 111,  670 => 110,  655 => 164,  653 => 157,  649 => 156,  642 => 155,  640 => 110,  637 => 109,  624 => 108,  610 => 105,  608 => 104,  605 => 103,  592 => 102,  578 => 98,  575 => 97,  573 => 96,  569 => 94,  567 => 93,  562 => 91,  556 => 88,  552 => 87,  549 => 86,  547 => 85,  543 => 83,  541 => 82,  538 => 81,  534 => 80,  531 => 73,  529 => 72,  522 => 71,  509 => 70,  495 => 67,  493 => 66,  490 => 65,  477 => 64,  453 => 40,  440 => 36,  427 => 35,  414 => 28,  411 => 27,  398 => 26,  385 => 25,  382 => 24,  369 => 23,  356 => 37,  353 => 35,  351 => 34,  348 => 33,  344 => 31,  342 => 30,  339 => 29,  336 => 26,  333 => 23,  320 => 22,  307 => 20,  304 => 19,  298 => 17,  295 => 16,  282 => 15,  269 => 38,  267 => 22,  264 => 21,  262 => 15,  252 => 10,  248 => 9,  243 => 8,  230 => 7,  215 => 191,  213 => 190,  211 => 189,  208 => 188,  206 => 187,  201 => 184,  199 => 183,  195 => 181,  193 => 175,  190 => 174,  187 => 173,  184 => 168,  181 => 167,  178 => 108,  175 => 107,  172 => 102,  170 => 101,  167 => 100,  165 => 70,  162 => 69,  160 => 64,  153 => 60,  148 => 58,  145 => 57,  142 => 56,  138 => 54,  135 => 51,  133 => 50,  130 => 49,  128 => 46,  125 => 45,  122 => 42,  120 => 41,  105 => 40,  102 => 39,  100 => 7,  91 => 5,  85 => 4,  82 => 3,  80 => 2,  78 => 1,  30 => 190,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% if not oro_is_hash_navigation() %}
    <!DOCTYPE html>
    <html lang=\"{{ oro_language()|slice(0,2) }}\"{{ oro_is_rtl_mode() ? ' dir=\"rtl\"' : ''}}
          class=\"{% if isMobileVersion() %}mobile{% else %}desktop{% endif %}-version\">
    <head>
        {% block head %}
            <title>{% trans %}Loading...{% endtrans %}</title>
            <script id=\"page-title\" type=\"text/html\">{{ oro_title_render() }}</script>
            <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0{% if isMobileVersion() %}, user-scalable=no, viewport-fit=cover{% endif %}\"/>
            <meta http-equiv=\"cache-control\" content=\"max-age=0\" />
            <meta http-equiv=\"cache-control\" content=\"no-cache\" />
            <meta http-equiv=\"expires\" content=\"0\" />
            <meta http-equiv=\"pragma\" content=\"no-cache\" />
            {% block head_style %}
                {% if oro_theme_icon() %}
                    <link rel=\"shortcut icon\" href=\"{{ asset(oro_theme_icon()) }}\" />
                {% endif %}
               {% placeholder head_style %}
            {% endblock %}

            {% block script %}
                {% block scripts_before %}
                    {% placeholder scripts_before %}
                {% endblock %}
                {% block application %}
                    {% placeholder application %}
                {% endblock %}
                <script>
                {% if isMobileVersion() %}
                    loadModules(['oroui/js/mobile/layout'], function (layout) {layout.init();});
                {% endif %}
                </script>
                {% placeholder scripts_after %}
                {% block head_script %}
                {% endblock %}
            {% endblock %}
        {% endblock %}
    </head>
    <body class=\"{% if isMobileVersion() %}mobile{% else %}desktop{% endif %}-version lang-{{ oro_language()|slice(0,2) }} {% if app.debug %}dev-mode {% endif %}{% block bodyClass %}{% endblock %}\">
    {% include '@OroUI/Default/noscript.html.twig' %}
    <div {{ UI.renderPageComponentAttributes({
        module: 'oroui/js/app/components/app-loading-mask-component',
        options: {showOnStartup: true}
    }) }}></div>
    <div {{ UI.renderPageComponentAttributes({
        module: 'oroui/js/app/components/app-loading-bar-component',
        options: {viewOptions: {container: '#oroplatform-header'}}
    }) }}></div>
    {% if isMobileVersion() %}
        <div {{ UI.renderPageComponentAttributes({
            view: 'oroui/js/app/views/swipeable-view',
            options: {_sourceElement: 'body'}
        }) }}></div>
    {% endif %}
    {% placeholder after_body_start %}
    <div id=\"progressbar\" class=\"progress-bar-container\">
        <h3 class=\"progress-title\">{{ 'oro.ui.loading'|trans }}</h3>
        <div class=\"progress infinite\">
            <div class=\"progress-bar\" role=\"progressbar\" aria-valuetext=\"{{ 'oro.ui.page_loading'|trans }}\"></div>
        </div>
    </div>
    <div id=\"page\" style=\"display:none;\" class=\"app-page\">
        {% block content_side %}
            <div class=\"app-page__content-side\">
                {% include '@OroUI/Default/navbar/sided.html.twig' %}
            </div>
        {% endblock content_side %}
        <div class=\"app-page__content\">
            {% block header %}
                <header class=\"app-header{% if oro_config_value('oro_ui.navbar_position') != 'top' %} thick{% endif %}\" id=\"oroplatform-header\"
                    {% if isMobileVersion() %}
                        {{ UI.renderPageComponentAttributes({
                            view: 'oroui/js/app/views/sticky-element/sticky-element-view',
                            options: {
                                stickyOptions: {
                                    enabled: true
                                }
                            }
                        }) }}
                    {% endif %}>
                    {% placeholder before_navigation %}
                    <div class=\"app-header__inner\">
                        <div class=\"app-header__container\">
                            {% placeholder header_logo %}
                            <ul class=\"user-menu\"
                                {{ UI.renderPageComponentAttributes({view: 'oroui/js/app/views/page/user-menu-view'}) }}>
                                {{ block('user_menu') }}
                            </ul>
                            <div class=\"app-header__search-and-shortcuts\">
                                {{ block('navbar') }}
                            </div>
                            {% placeholder pin_tabs_list %}
                        </div>
                    </div>
                    {% include '@OroUI/Default/navbar/top.html.twig' %}
                    {% placeholder after_navigation %}
                </header>
            {% endblock header %}
            <main class=\"app-page__main\">
                {% if isDesktopVersion() %}
                    {% block left_panel %}
                        <div id=\"left-panel\" class=\"app-page__left-panel\">
                            {% placeholder left_panel with {placement: 'left'} %}
                        </div>
                    {% endblock left_panel %}
                {% endif %}
                {% block main %}
                    <div id=\"central-panel\" class=\"app-page__central-panel\">
                        {% block before_content %}
                        <div id=\"flash-messages\">
                            {% block messages %}
                                {% set flashMessages = [] %}
                                {% if app.session.flashbag.peekAll|length > 0 %}
                                    {% for type, messages in app.session.flashbag.all %}
                                        {% for message in messages %}
                                            {% set flashMessages = flashMessages|merge([{ type: type, message: message|trans}]) %}
                                        {% endfor %}
                                    {% endfor %}
                                {% endif %}
                                <div class=\"flash-messages-frame\">
                                    <div class=\"flash-messages-holder\"
                                         {{ UI.renderPageComponentAttributes({
                                             view: 'oroui/js/app/views/page/messages-view',
                                             options: {
                                                 autoRender: true,
                                                 initializeMessenger: true,
                                                 messages: flashMessages
                                             }
                                         }) }}></div>
                                </div>
                            {% endblock messages %}
                        </div>
                        <div class=\"page-toolbar\">
                            {% placeholder breadcrumb_pin_before %}
                            <div id=\"breadcrumb\"
                                class=\"page-toolbar_breadcrumb\"
                                 {{ UI.renderPageComponentAttributes({view: 'oroui/js/app/views/page/breadcrumb-view'}) }}>
                                {% block breadcrumb %}
                                    {% placeholder breadcrumb %}
                                {% endblock breadcrumb %}
                            </div>
                            <div id=\"before-content-addition\" class=\"page-toolbar_before-content-addition\" data-layout=\"separate\"
                                 {{ UI.renderPageComponentAttributes({view: 'oroui/js/app/views/page/before-content-addition-view'}) }}>
                                {% block before_content_addition %}{% endblock before_content_addition %}
                            </div>
                            {% block pin_button %}
                                <div class=\"page-toolbar_bookmark-buttons\">
                                    {% placeholder pin_button %}
                                </div>
                            {% endblock pin_button %}
                            {% placeholder breadcrumb_pin_after %}
                        </div>
                        {% endblock before_content %}
                        <div id=\"container\"{% if isDesktopVersion() %} class=\"scrollable-container\"{% endif %} data-layout=\"separate\"
                             {{ UI.renderPageComponentAttributes({view: 'oroui/js/app/views/page/content-view'}) }}>
                            {% block page_container %}
                                {% placeholder content_before %}
                                {% block content %}
                                    {# Dynamic content empty by default #}
                                {% endblock content %}
                                {% placeholder content_after %}
                            {% endblock page_container %}
                        </div>
                    </div>
                {% endblock main %}
                {% if isDesktopVersion() %}
                    {% block right_panel %}
                        <div id=\"right-panel\" class=\"app-page__right-panel\">
                            {% placeholder right_panel with {placement: 'right'} %}
                        </div>
                    {% endblock right_panel %}
                {% endif %}
            </main>
        {% block footer %}
            <div id=\"dialog-extend-fixed-container\" class=\"ui-dialog-minimize-container\"></div>
            <footer id=\"footer\" class=\"footer\">
                {% placeholder footer_inner %}
            </footer>
        {% endblock footer %}
        </div>
    </div>
    {% placeholder before_body_end %}
    </body>
    </html>
{% else %}
    {# Title should be generated as least once in order to pass data to title service #}
    {% set title = oro_title_render() %}
    {# Template for hash tag navigation#}
    {% use '@OroUI/Default/navbar/blocks.html.twig' %}
    {% include '@OroNavigation/HashNav/hashNavAjax.html.twig'
        with {
            'data': {
                'scripts': block('head_script'),
                'content': block('page_container'),
                'breadcrumb': block('breadcrumb')|trim,
                'beforeContentAddition': block('before_content_addition')
            }
        }
    %}
{% endif %}
", "@OroUI/Default/index.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/Default/index.html.twig");
    }
}
