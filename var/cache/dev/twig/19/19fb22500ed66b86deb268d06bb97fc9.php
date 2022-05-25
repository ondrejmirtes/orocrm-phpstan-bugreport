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

/* @OroUI/layouts/blank/block_types.html.twig */
class __TwigTemplate_3184cf1a31559039c377fa5082dc55b7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_subtree_update_widget' => [$this, 'block_layout_subtree_update_widget'],
            'page_subtitle_widget' => [$this, 'block_page_subtitle_widget'],
            'breadcrumbs_widget' => [$this, 'block_breadcrumbs_widget'],
            'logo_widget' => [$this, 'block_logo_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUI/layouts/blank/block_types.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/layouts/blank/block_types.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/layouts/blank/block_types.html.twig"));

        // line 1
        $this->displayBlock('layout_subtree_update_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('page_subtitle_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('breadcrumbs_widget', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('logo_widget', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_layout_subtree_update_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("layout_subtree_update_widget", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_subtree_update_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_subtree_update_widget"));

        // line 2
        echo "    ";
        $context["content"] = $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 2, $this->source); })()), 'widget');
        // line 3
        echo "    ";
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 3, $this->source); })()), "children", [], "any", false, false, false, 3)) && (twig_length_filter($this->env, twig_trim_filter((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 3, $this->source); })()))) > 0))) {
            // line 4
            echo "    ";
            $context["attr"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->defaultAttributes((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 4, $this->source); })()), ["data-page-component-module" => "oroui/js/app/components/view-component", "~data-page-component-options" => ["view" => "oroui/js/app/views/layout-subtree-view", "blockId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 8
(isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 8, $this->source); })()), "vars", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8), "reloadEvents" =>             // line 9
(isset($context["reloadEvents"]) || array_key_exists("reloadEvents", $context) ? $context["reloadEvents"] : (function () { throw new RuntimeError('Variable "reloadEvents" does not exist.', 9, $this->source); })()), "restoreFormState" =>             // line 10
(isset($context["restoreFormState"]) || array_key_exists("restoreFormState", $context) ? $context["restoreFormState"] : (function () { throw new RuntimeError('Variable "restoreFormState" does not exist.', 10, $this->source); })()), "showLoading" =>             // line 11
(isset($context["showLoading"]) || array_key_exists("showLoading", $context) ? $context["showLoading"] : (function () { throw new RuntimeError('Variable "showLoading" does not exist.', 11, $this->source); })()), "onLoadingCssClass" =>             // line 12
(isset($context["onLoadingCssClass"]) || array_key_exists("onLoadingCssClass", $context) ? $context["onLoadingCssClass"] : (function () { throw new RuntimeError('Variable "onLoadingCssClass" does not exist.', 12, $this->source); })()), "disableControls" =>             // line 13
(isset($context["disableControls"]) || array_key_exists("disableControls", $context) ? $context["disableControls"] : (function () { throw new RuntimeError('Variable "disableControls" does not exist.', 13, $this->source); })())]]);
            // line 16
            echo "    <div ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
        ";
            // line 17
            echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 17, $this->source); })());
            echo "
    </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 22
    public function block_page_subtitle_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("page_subtitle_widget", $this->getTemplateName(), 22));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_subtitle_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_subtitle_widget"));

        // line 23
        echo "    ";
        $context["attr"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->defaultAttributes((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 23, $this->source); })()), ["~class" => " page-subtitle"]);
        // line 24
        echo "    <h2 ";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 25
        if ((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 25, $this->source); })())) {
            // line 26
            echo "            <span class=\"badge ";
            (((isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 26, $this->source); })())) ? (print (twig_escape_filter($this->env, ("badge--" . (isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 26, $this->source); })())), "html", null, true))) : (print ("")));
            echo "\" aria-hidden=\"true\">
                <span class=\"fa-";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "\"></span>
            </span>
        ";
        }
        // line 30
        echo "        <span class=\"page-subtitle__text\">";
        echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->processText((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 30, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 30, $this->source); })())), "html", null, true);
        echo "</span>
        ";
        // line 31
        $this->displayBlock("container_widget", $context, $blocks);
        echo "
    </h2>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 35
    public function block_breadcrumbs_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("breadcrumbs_widget", $this->getTemplateName(), 35));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs_widget"));

        // line 36
        echo "    ";
        if (twig_test_empty((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 36, $this->source); })()))) {
            // line 37
            echo "        ";
            $context["breadcrumbs"] = twig_reverse_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 37, $this->source); })()), "title", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "value", [], "any", false, false, false, 37), " - "));
            // line 38
            echo "    ";
        }
        // line 39
        echo "
    ";
        // line 40
        $context["attr"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->defaultAttributes((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 40, $this->source); })()), ["~class" => " breadcrumbs"]);
        // line 43
        echo "    <nav aria-label=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.breadcrumb.aria_label"), "html", null, true);
        echo "\">
        <ol ";
        // line 44
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
            ";
        // line 45
        if ( !twig_test_iterable((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 45, $this->source); })()))) {
            // line 46
            echo "                <li class=\"breadcrumbs__item\">
                    <a href=\"\" class=\"breadcrumbs__link\" aria-current=\"location\">";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 47, $this->source); })()), "html", null, true);
            echo "</a>
                </li>
            ";
        } else {
            // line 50
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 50, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 51
                echo "                    <li class=\"breadcrumbs__item\">
                        ";
                // line 52
                if (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "label", [], "any", true, true, false, 52)) {
                    // line 53
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "uri", [], "any", true, true, false, 53)) {
                        // line 54
                        echo "                                ";
                        $context["url"] = twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "uri", [], "any", false, false, false, 54);
                        // line 55
                        echo "                            ";
                    } else {
                        // line 56
                        echo "                                ";
                        $context["url"] = twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "url", [], "any", false, false, false, 56);
                        // line 57
                        echo "                            ";
                    }
                    // line 58
                    echo "
                            ";
                    // line 59
                    if (((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 59, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 59))) {
                        // line 60
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 60, $this->source); })()), "html", null, true);
                        echo "\" class=\"breadcrumbs__link\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "label", [], "any", false, false, false, 60)), "html", null, true);
                        echo "</a>
                                <span aria-hidden=\"true\">/</span>
                            ";
                    } else {
                        // line 63
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 63, $this->source); })()), "html", null, true);
                        echo "\" class=\"breadcrumbs__link\" aria-current=\"location\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "label", [], "any", false, false, false, 63)), "html", null, true);
                        echo "</a>
                            ";
                    }
                    // line 65
                    echo "                        ";
                } else {
                    // line 66
                    echo "                            ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 66)) {
                        // line 67
                        echo "                                <span aria-hidden=\"true\">/</span>
                            ";
                    }
                    // line 69
                    echo "                            <a href=\"\" class=\"breadcrumbs__link\" aria-current=\"location\">";
                    echo twig_escape_filter($this->env, $context["breadcrumb"], "html", null, true);
                    echo "</a>
                        ";
                }
                // line 71
                echo "                    </li>
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "            ";
        }
        // line 74
        echo "        </ol>
        ";
        // line 75
        $this->displayBlock("container_widget", $context, $blocks);
        echo "
    </nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 79
    public function block_logo_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("logo_widget", $this->getTemplateName(), 79));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo_widget"));

        // line 80
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroUI/layouts/blank/block_types.html.twig", 80)->unwrap();
        // line 81
        echo "    ";
        $context["attr"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->defaultAttributes((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 81, $this->source); })()), ["~class" => " logo"]);
        // line 84
        echo "
    ";
        // line 85
        $context["src"] = ((array_key_exists("src", $context)) ? (_twig_default_filter((isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 85, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/orofrontend/blank/images/logo/demob2b-logo.svg"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/orofrontend/blank/images/logo/demob2b-logo.svg")));
        // line 86
        echo "
    ";
        // line 87
        $context["attr_img"] = ((array_key_exists("attr_img", $context)) ? (_twig_default_filter((isset($context["attr_img"]) || array_key_exists("attr_img", $context) ? $context["attr_img"] : (function () { throw new RuntimeError('Variable "attr_img" does not exist.', 87, $this->source); })()), [])) : ([]));
        // line 88
        echo "    ";
        $context["attr_img"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->defaultAttributes((isset($context["attr_img"]) || array_key_exists("attr_img", $context) ? $context["attr_img"] : (function () { throw new RuntimeError('Variable "attr_img" does not exist.', 88, $this->source); })()), ["src" =>         // line 89
(isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 89, $this->source); })()), "~class" => " logo-img", "alt" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro_frontend.logo.alt.label")]);
        // line 93
        echo "
    ";
        // line 94
        if ((array_key_exists("width", $context) &&  !(null === (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 94, $this->source); })())))) {
            // line 95
            echo "        ";
            $context["attr_img"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->defaultAttributes((isset($context["attr_img"]) || array_key_exists("attr_img", $context) ? $context["attr_img"] : (function () { throw new RuntimeError('Variable "attr_img" does not exist.', 95, $this->source); })()), ["width" =>             // line 96
(isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 96, $this->source); })())]);
            // line 98
            echo "    ";
        }
        // line 99
        echo "
    ";
        // line 100
        if ((array_key_exists("height", $context) &&  !(null === (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 100, $this->source); })())))) {
            // line 101
            echo "        ";
            $context["attr_img"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->defaultAttributes((isset($context["attr_img"]) || array_key_exists("attr_img", $context) ? $context["attr_img"] : (function () { throw new RuntimeError('Variable "attr_img" does not exist.', 101, $this->source); })()), ["height" =>             // line 102
(isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 102, $this->source); })())]);
            // line 104
            echo "    ";
        }
        // line 105
        echo "
    ";
        // line 106
        if (((isset($context["renderLink"]) || array_key_exists("renderLink", $context) ? $context["renderLink"] : (function () { throw new RuntimeError('Variable "renderLink" does not exist.', 106, $this->source); })()) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "request", [], "any", false, false, false, 106), "attributes", [], "any", false, false, false, 106), "get", [0 => "_route"], "method", false, false, false, 106) != (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 106, $this->source); })())))) {
            // line 107
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 107, $this->source); })()));
            echo "\" ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo " aria-label=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro_frontend.logo.aria_label"), "html", null, true);
            echo "\">
            <img ";
            // line 108
            echo twig_call_macro($macros["UI"], "macro_attributes", [(isset($context["attr_img"]) || array_key_exists("attr_img", $context) ? $context["attr_img"] : (function () { throw new RuntimeError('Variable "attr_img" does not exist.', 108, $this->source); })())], 108, $context, $this->getSourceContext());
            echo ">
        </a>
    ";
        } else {
            // line 111
            echo "        <div ";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            <img ";
            // line 112
            echo twig_call_macro($macros["UI"], "macro_attributes", [(isset($context["attr_img"]) || array_key_exists("attr_img", $context) ? $context["attr_img"] : (function () { throw new RuntimeError('Variable "attr_img" does not exist.', 112, $this->source); })())], 112, $context, $this->getSourceContext());
            echo ">
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroUI/layouts/blank/block_types.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  425 => 112,  420 => 111,  414 => 108,  405 => 107,  403 => 106,  400 => 105,  397 => 104,  395 => 102,  393 => 101,  391 => 100,  388 => 99,  385 => 98,  383 => 96,  381 => 95,  379 => 94,  376 => 93,  374 => 89,  372 => 88,  370 => 87,  367 => 86,  365 => 85,  362 => 84,  359 => 81,  356 => 80,  343 => 79,  327 => 75,  324 => 74,  321 => 73,  306 => 71,  300 => 69,  296 => 67,  293 => 66,  290 => 65,  282 => 63,  273 => 60,  271 => 59,  268 => 58,  265 => 57,  262 => 56,  259 => 55,  256 => 54,  253 => 53,  251 => 52,  248 => 51,  230 => 50,  224 => 47,  221 => 46,  219 => 45,  215 => 44,  210 => 43,  208 => 40,  205 => 39,  202 => 38,  199 => 37,  196 => 36,  183 => 35,  167 => 31,  162 => 30,  156 => 27,  151 => 26,  149 => 25,  144 => 24,  141 => 23,  128 => 22,  111 => 17,  106 => 16,  104 => 13,  103 => 12,  102 => 11,  101 => 10,  100 => 9,  99 => 8,  97 => 4,  94 => 3,  91 => 2,  78 => 1,  65 => 79,  62 => 78,  60 => 35,  57 => 34,  55 => 22,  52 => 21,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_subtree_update_widget %}
    {% set content = block_widget(block) %}
    {% if block.children is not empty and content|trim|length > 0 %}
    {% set attr = layout_attr_defaults(attr, {
        'data-page-component-module': 'oroui/js/app/components/view-component',
        '~data-page-component-options': {
            view: 'oroui/js/app/views/layout-subtree-view',
            blockId : block.vars.id,
            reloadEvents: reloadEvents,
            restoreFormState: restoreFormState,
            showLoading: showLoading,
            onLoadingCssClass: onLoadingCssClass,
            disableControls: disableControls
        },
    }) %}
    <div {{ block('block_attributes') }}>
        {{ content|raw }}
    </div>
    {% endif %}
{% endblock %}

{% block page_subtitle_widget %}
    {% set attr = layout_attr_defaults(attr, {'~class': ' page-subtitle'}) %}
    <h2 {{ block('block_attributes') }}>
        {% if icon %}
            <span class=\"badge {{ badge ? 'badge--' ~ badge }}\" aria-hidden=\"true\">
                <span class=\"fa-{{ icon }}\"></span>
            </span>
        {% endif %}
        <span class=\"page-subtitle__text\">{{ text|block_text(translation_domain) }}</span>
        {{ block('container_widget') }}
    </h2>
{% endblock %}

{% block breadcrumbs_widget %}
    {% if breadcrumbs is empty %}
        {% set breadcrumbs = blocks.title.vars.value|split(' - ')|reverse %}
    {% endif %}

    {% set attr = layout_attr_defaults(attr, {
        '~class': ' breadcrumbs'
    }) %}
    <nav aria-label=\"{{ 'oro.ui.breadcrumb.aria_label'|trans }}\">
        <ol {{ block('block_attributes') }}>
            {% if breadcrumbs is not iterable %}
                <li class=\"breadcrumbs__item\">
                    <a href=\"\" class=\"breadcrumbs__link\" aria-current=\"location\">{{ breadcrumbs }}</a>
                </li>
            {% else %}
                {% for breadcrumb in breadcrumbs %}
                    <li class=\"breadcrumbs__item\">
                        {% if breadcrumb.label is defined %}
                            {% if breadcrumb.uri is defined %}
                                {% set url = breadcrumb.uri %}
                            {% else %}
                                {% set url = breadcrumb.url %}
                            {% endif %}

                            {% if url and not loop.last %}
                                <a href=\"{{ url  }}\" class=\"breadcrumbs__link\">{{ breadcrumb.label|trans }}</a>
                                <span aria-hidden=\"true\">/</span>
                            {% else %}
                                <a href=\"{{ url  }}\" class=\"breadcrumbs__link\" aria-current=\"location\">{{ breadcrumb.label|trans }}</a>
                            {% endif %}
                        {%  else %}
                            {% if not loop.first %}
                                <span aria-hidden=\"true\">/</span>
                            {% endif %}
                            <a href=\"\" class=\"breadcrumbs__link\" aria-current=\"location\">{{ breadcrumb }}</a>
                        {%  endif %}
                    </li>
                {% endfor %}
            {% endif %}
        </ol>
        {{ block('container_widget') }}
    </nav>
{% endblock %}

{% block logo_widget %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% set attr = layout_attr_defaults(attr, {
        '~class': ' logo'
    }) %}

    {% set src = src|default(asset('bundles/orofrontend/blank/images/logo/demob2b-logo.svg')) %}

    {% set attr_img = attr_img|default({}) %}
    {% set attr_img = layout_attr_defaults(attr_img, {
        'src': src,
        '~class': ' logo-img',
        'alt': 'oro_frontend.logo.alt.label'|trans
    }) %}

    {% if width is defined and width is not null %}
        {% set attr_img = layout_attr_defaults(attr_img, {
            'width': width
        }) %}
    {% endif %}

    {% if height is defined and height is not null %}
        {% set attr_img = layout_attr_defaults(attr_img, {
            'height': height
        }) %}
    {% endif %}

    {% if renderLink and app.request.attributes.get('_route') != route %}
        <a href=\"{{ path(route) }}\" {{ block('block_attributes') }} aria-label=\"{{ 'oro_frontend.logo.aria_label'|trans }}\">
            <img {{ UI.attributes(attr_img) }}>
        </a>
    {% else %}
        <div {{ block('block_attributes') }}>
            <img {{ UI.attributes(attr_img) }}>
        </div>
    {% endif %}
{% endblock %}
", "@OroUI/layouts/blank/block_types.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/layouts/blank/block_types.html.twig");
    }
}
