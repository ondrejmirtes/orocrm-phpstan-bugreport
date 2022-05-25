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

/* @OroUI/macros.html.twig */
class __TwigTemplate_88200e746f23e461cff370f2c517a8f1 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUI/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/macros.html.twig"));

        // line 30
        echo "
";
        // line 68
        echo "
";
        // line 97
        echo "
";
        // line 123
        echo "
";
        // line 141
        echo "
";
        // line 156
        echo "
";
        // line 174
        echo "
";
        // line 188
        echo "
";
        // line 205
        echo "
";
        // line 237
        echo "
";
        // line 264
        echo "
";
        // line 282
        echo "
";
        // line 298
        echo "
";
        // line 342
        echo "
";
        // line 361
        echo "
";
        // line 398
        echo "
";
        // line 414
        echo "
";
        // line 448
        echo "
";
        // line 464
        echo "
";
        // line 479
        echo "
";
        // line 526
        echo "
";
        // line 562
        echo "
";
        // line 597
        echo "
";
        // line 645
        echo "
";
        // line 683
        echo "
";
        // line 764
        echo "
";
        // line 788
        echo "
";
        // line 822
        echo "
";
        // line 837
        echo "
";
        // line 869
        echo "
";
        // line 878
        echo "
";
        // line 904
        echo "
";
        // line 930
        echo "
";
        // line 964
        echo "
";
        // line 986
        echo "
";
        // line 1015
        echo "
";
        // line 1037
        echo "
";
        // line 1053
        echo "
";
        // line 1095
        echo "

";
        // line 1123
        echo "
";
        // line 1132
        echo "
";
        // line 1162
        echo "
";
        // line 1203
        echo "
";
        // line 1290
        echo "
";
        // line 1311
        echo "
";
        // line 1435
        echo "
";
        // line 1535
        echo "
";
        // line 1603
        echo "
";
        // line 1619
        echo "
";
        // line 1629
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function macro_collection_prototype($__widget__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "widget" => $__widget__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "collection_prototype"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "collection_prototype"));

            // line 2
            echo "    ";
            if (twig_in_filter("prototype", twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 2, $this->source); })()), "vars", [], "any", false, false, false, 2)))) {
                // line 3
                echo "        ";
                $context["form"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "prototype", [], "any", false, false, false, 3);
                // line 4
                echo "        ";
                $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "prototype", [], "any", false, false, false, 4), "vars", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4);
                // line 5
                echo "    ";
            } else {
                // line 6
                echo "        ";
                $context["form"] = (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 6, $this->source); })());
                // line 7
                echo "        ";
                $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "full_name", [], "any", false, false, false, 7);
                // line 8
                echo "    ";
            }
            // line 9
            echo "
    <div data-content=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "\">
        <div class=\"row-oro oro-multiselect-holder\">
            <div class=\"float-holder \">
                ";
            // line 13
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "children", [], "any", false, false, false, 13))) {
                // line 14
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 15
                    echo "                        ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                    echo "
                        ";
                    // line 16
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "                ";
            } else {
                // line 19
                echo "                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'widget');
                echo "
                ";
            }
            // line 21
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'errors');
            echo "
                ";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'rest');
            echo "
            </div>
            ";
            // line 24
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["widget"] ?? null), "parent", [], "any", false, true, false, 24), "vars", [], "any", false, true, false, 24), "allow_delete", [], "any", true, true, false, 24) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 24, $this->source); })()), "parent", [], "any", false, false, false, 24), "vars", [], "any", false, false, false, 24), "allow_delete", [], "any", false, false, false, 24))) {
                // line 25
                echo "<button class=\"removeRow btn btn-icon btn-square-light\" type=\"button\" data-related=\"";
                echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 25, $this->source); })()), "html", null, true);
                echo "\"><span class=\"fa-close\"></span></button>";
            }
            // line 27
            echo "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 31
    public function macro_tooltip($__tooltip_raw__ = null, $__tooltip_parameters__ = null, $__tooltip_placement__ = null, $__details_enabled__ = null, $__details_link__ = null, $__details_anchor__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "tooltip_raw" => $__tooltip_raw__,
            "tooltip_parameters" => $__tooltip_parameters__,
            "tooltip_placement" => $__tooltip_placement__,
            "details_enabled" => $__details_enabled__,
            "details_link" => $__details_link__,
            "details_anchor" => $__details_anchor__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tooltip"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tooltip"));

            // line 32
            echo "    ";
            $context["tooltip_parameters"] = ((array_key_exists("tooltip_parameters", $context)) ? (_twig_default_filter((isset($context["tooltip_parameters"]) || array_key_exists("tooltip_parameters", $context) ? $context["tooltip_parameters"] : (function () { throw new RuntimeError('Variable "tooltip_parameters" does not exist.', 32, $this->source); })()), [])) : ([]));
            // line 33
            echo "    ";
            // line 34
            echo "    ";
            $context["tooltip"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["tooltip_raw"]) || array_key_exists("tooltip_raw", $context) ? $context["tooltip_raw"] : (function () { throw new RuntimeError('Variable "tooltip_raw" does not exist.', 34, $this->source); })()), (isset($context["tooltip_parameters"]) || array_key_exists("tooltip_parameters", $context) ? $context["tooltip_parameters"] : (function () { throw new RuntimeError('Variable "tooltip_parameters" does not exist.', 34, $this->source); })()), "messages");
            // line 35
            echo "    ";
            if (((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 35, $this->source); })()) == (isset($context["tooltip_raw"]) || array_key_exists("tooltip_raw", $context) ? $context["tooltip_raw"] : (function () { throw new RuntimeError('Variable "tooltip_raw" does not exist.', 35, $this->source); })()))) {
                // line 36
                echo "        ";
                $context["tooltip"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["tooltip_raw"]) || array_key_exists("tooltip_raw", $context) ? $context["tooltip_raw"] : (function () { throw new RuntimeError('Variable "tooltip_raw" does not exist.', 36, $this->source); })()), (isset($context["tooltip_parameters"]) || array_key_exists("tooltip_parameters", $context) ? $context["tooltip_parameters"] : (function () { throw new RuntimeError('Variable "tooltip_parameters" does not exist.', 36, $this->source); })()), "tooltips");
                // line 37
                echo "    ";
            }
            // line 38
            if ( !twig_test_empty((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 38, $this->source); })()))) {
                // line 39
                $context["details_anchor"] = ((array_key_exists("details_anchor", $context)) ? (_twig_default_filter((isset($context["details_anchor"]) || array_key_exists("details_anchor", $context) ? $context["details_anchor"] : (function () { throw new RuntimeError('Variable "details_anchor" does not exist.', 39, $this->source); })()), null)) : (null));
                // line 40
                echo "        ";
                $context["details_link"] = ((array_key_exists("details_link", $context)) ? (_twig_default_filter((isset($context["details_link"]) || array_key_exists("details_link", $context) ? $context["details_link"] : (function () { throw new RuntimeError('Variable "details_link" does not exist.', 40, $this->source); })()), null)) : (null));
                // line 41
                echo "        ";
                $context["details_enabled"] = ((array_key_exists("details_enabled", $context)) ? (_twig_default_filter((isset($context["details_enabled"]) || array_key_exists("details_enabled", $context) ? $context["details_enabled"] : (function () { throw new RuntimeError('Variable "details_enabled" does not exist.', 41, $this->source); })()), false)) : (false));
                // line 42
                echo "        ";
                $context["tooltip_placement"] = (($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) ? ("top") : (((array_key_exists("tooltip_placement", $context)) ? (_twig_default_filter((isset($context["tooltip_placement"]) || array_key_exists("tooltip_placement", $context) ? $context["tooltip_placement"] : (function () { throw new RuntimeError('Variable "tooltip_placement" does not exist.', 42, $this->source); })()), null)) : (null))));
                // line 43
                echo "
        ";
                // line 45
                echo "        ";
                if ((((isset($context["details_enabled"]) || array_key_exists("details_enabled", $context) ? $context["details_enabled"] : (function () { throw new RuntimeError('Variable "details_enabled" does not exist.', 45, $this->source); })()) || (isset($context["details_anchor"]) || array_key_exists("details_anchor", $context) ? $context["details_anchor"] : (function () { throw new RuntimeError('Variable "details_anchor" does not exist.', 45, $this->source); })())) || (isset($context["details_link"]) || array_key_exists("details_link", $context) ? $context["details_link"] : (function () { throw new RuntimeError('Variable "details_link" does not exist.', 45, $this->source); })()))) {
                    // line 46
                    echo "            ";
                    $context["helpLink"] = ((array_key_exists("details_link", $context)) ? (_twig_default_filter((isset($context["details_link"]) || array_key_exists("details_link", $context) ? $context["details_link"] : (function () { throw new RuntimeError('Variable "details_link" does not exist.', 46, $this->source); })()), $this->extensions['Oro\Bundle\HelpBundle\Twig\HelpExtension']->getHelpLinkUrl())) : ($this->extensions['Oro\Bundle\HelpBundle\Twig\HelpExtension']->getHelpLinkUrl()));
                    // line 47
                    echo "            ";
                    if ((isset($context["details_anchor"]) || array_key_exists("details_anchor", $context) ? $context["details_anchor"] : (function () { throw new RuntimeError('Variable "details_anchor" does not exist.', 47, $this->source); })())) {
                        // line 48
                        echo "                ";
                        $context["helpLink"] = (((isset($context["helpLink"]) || array_key_exists("helpLink", $context) ? $context["helpLink"] : (function () { throw new RuntimeError('Variable "helpLink" does not exist.', 48, $this->source); })()) . "#") . (isset($context["details_anchor"]) || array_key_exists("details_anchor", $context) ? $context["details_anchor"] : (function () { throw new RuntimeError('Variable "details_anchor" does not exist.', 48, $this->source); })()));
                        // line 49
                        echo "            ";
                    }
                    // line 50
                    echo "            ";
                    $context["tooltip"] = ((((((isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 50, $this->source); })()) . "<div class=\"clearfix\"><div class=\"pull-right\"><a href=\"") .                     // line 51
(isset($context["helpLink"]) || array_key_exists("helpLink", $context) ? $context["helpLink"] : (function () { throw new RuntimeError('Variable "helpLink" does not exist.', 51, $this->source); })())) . "\">") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.form.tooltip.read_more")) . "</a></div></div>");
                    // line 54
                    echo "        ";
                }
                // line 55
                echo "        ";
                // line 56
                echo "
        ";
                // line 57
                $context["tooltip"] = (("<div class=\"oro-popover-content\">" .                 // line 58
(isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 58, $this->source); })())) . "</div>");
                // line 61
                echo "
        <i class=\"fa-info-circle tooltip-icon\"
           ";
                // line 63
                if ((isset($context["tooltip_placement"]) || array_key_exists("tooltip_placement", $context) ? $context["tooltip_placement"] : (function () { throw new RuntimeError('Variable "tooltip_placement" does not exist.', 63, $this->source); })())) {
                    echo "data-placement=\"";
                    echo twig_escape_filter($this->env, (isset($context["tooltip_placement"]) || array_key_exists("tooltip_placement", $context) ? $context["tooltip_placement"] : (function () { throw new RuntimeError('Variable "tooltip_placement" does not exist.', 63, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                // line 64
                echo "           data-content=\"";
                echo twig_escape_filter($this->env, (isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 64, $this->source); })()), "html", null, true);
                echo "\"
           data-toggle=\"popover\"></i>";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 76
    public function macro_attibuteRow($__title__ = null, $__value__ = null, $__additionalData__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "value" => $__value__,
            "additionalData" => $__additionalData__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "attibuteRow"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "attibuteRow"));

            // line 77
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 78
            echo "
    ";
            // line 79
            ob_start();
            // line 80
            echo "        <div class=\"clearfix-oro\">
            ";
            // line 81
            if ( !twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "value", [], "any", true, true, false, 81)) {
                // line 82
                echo "                <div class=\"control-label\">";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 82, $this->source); })()), "html", null, true);
                echo "</div>
            ";
            } else {
                // line 84
                echo "                <div class=\"control-label\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 84, $this->source); })()), "value", [], "any", false, false, false, 84), "html", null, true);
                echo " <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 84, $this->source); })()), "hint", [], "any", false, false, false, 84), "html", null, true);
                echo "</strong></div>
            ";
            }
            // line 86
            echo "        </div>
        ";
            // line 87
            if (twig_length_filter($this->env, (isset($context["additionalData"]) || array_key_exists("additionalData", $context) ? $context["additionalData"] : (function () { throw new RuntimeError('Variable "additionalData" does not exist.', 87, $this->source); })()))) {
                // line 88
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["additionalData"]) || array_key_exists("additionalData", $context) ? $context["additionalData"] : (function () { throw new RuntimeError('Variable "additionalData" does not exist.', 88, $this->source); })()), "data", [], "any", false, false, false, 88));
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 89
                    echo "                <div class=\"clearfix-oro\">
                    <div class=\"control-label\">";
                    // line 90
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], twig_get_attribute($this->env, $this->source, (isset($context["additionalData"]) || array_key_exists("additionalData", $context) ? $context["additionalData"] : (function () { throw new RuntimeError('Variable "additionalData" does not exist.', 90, $this->source); })()), "field", [], "any", false, false, false, 90), [], "any", false, false, false, 90), "html", null, true);
                    echo "</div>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "        ";
            }
            // line 94
            echo "    ";
            $context["attributeValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 95
            echo "    ";
            echo twig_call_macro($macros["UIMacro"], "macro_renderAttribute", [(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 95, $this->source); })()), (isset($context["attributeValue"]) || array_key_exists("attributeValue", $context) ? $context["attributeValue"] : (function () { throw new RuntimeError('Variable "attributeValue" does not exist.', 95, $this->source); })())], 95, $context, $this->getSourceContext());
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 105
    public function macro_renderAttribute($__title__ = null, $__data__ = null, $__options__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "data" => $__data__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderAttribute"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderAttribute"));

            // line 106
            echo "    ";
            $context["options"] = twig_array_merge(["rootClass" => null, "termClass" => null, "descriptionClass" => null, "tooltipHTML" => null, "dir" => null], ((            // line 112
array_key_exists("options", $context)) ? (_twig_default_filter((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 112, $this->source); })()), [])) : ([])));
            // line 113
            echo "
    <div class=\"attribute-item";
            // line 114
            if (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 114, $this->source); })()), "rootClass", [], "any", false, false, false, 114)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 114, $this->source); })()), "rootClass", [], "any", false, false, false, 114), "html", null, true);
            }
            echo "\">
        <label class=\"attribute-item__term";
            // line 115
            if (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 115, $this->source); })()), "termClass", [], "any", false, false, false, 115)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 115, $this->source); })()), "termClass", [], "any", false, false, false, 115), "html", null, true);
            }
            echo "\">";
            if (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 115, $this->source); })()), "tooltipHTML", [], "any", false, false, false, 115)) {
                echo twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 115, $this->source); })()), "tooltipHTML", [], "any", false, false, false, 115);
                echo " ";
            }
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 115, $this->source); })()), "html", null, true);
            echo "</label>
        <div class=\"attribute-item__description";
            // line 116
            if (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 116, $this->source); })()), "descriptionClass", [], "any", false, false, false, 116)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 116, $this->source); })()), "descriptionClass", [], "any", false, false, false, 116), "html", null, true);
            }
            echo "\"
            ";
            // line 117
            if (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 117, $this->source); })()), "dir", [], "any", false, false, false, 117)) {
                echo "dir=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 117, $this->source); })()), "dir", [], "any", false, false, false, 117), "html", null, true);
                echo "\" ";
            }
            // line 118
            echo "        >
            ";
            // line 119
            echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 119, $this->source); })());
            echo "
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

    // line 130
    public function macro_renderControlGroup($__title__ = null, $__data__ = null, $__options__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "data" => $__data__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderControlGroup"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderControlGroup"));

            // line 131
            echo "    ";
            $context["options"] = twig_array_merge(["rootClass" => "attribute-row"], ((            // line 133
array_key_exists("options", $context)) ? (_twig_default_filter((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 133, $this->source); })()), [])) : ([])));
            // line 134
            echo "    <div class=\"control-group";
            if (twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 134, $this->source); })()), "rootClass", [], "any", false, false, false, 134)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 134, $this->source); })()), "rootClass", [], "any", false, false, false, 134), "html", null, true);
            }
            echo "\">
        <label class=\"control-label\">";
            // line 135
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 135, $this->source); })()), "html", null, true);
            echo "</label>
        <div class=\"controls\">
            ";
            // line 137
            echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 137, $this->source); })());
            echo "
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

    // line 151
    public function macro_renderProperty($__title__ = null, $__data__ = null, $__entity__ = null, $__fieldName__ = null, $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "data" => $__data__,
            "entity" => $__entity__,
            "fieldName" => $__fieldName__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderProperty"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderProperty"));

            // line 152
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 153
            echo "
    ";
            // line 154
            echo twig_call_macro($macros["UIMacro"], "macro_renderHtmlProperty", [(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 154, $this->source); })()), twig_escape_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 154, $this->source); })())), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 154, $this->source); })()), (isset($context["fieldName"]) || array_key_exists("fieldName", $context) ? $context["fieldName"] : (function () { throw new RuntimeError('Variable "fieldName" does not exist.', 154, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 154, $this->source); })())], 154, $context, $this->getSourceContext());
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 166
    public function macro_renderHtmlProperty($__title__ = null, $__data__ = null, $__entity__ = null, $__fieldName__ = null, $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "data" => $__data__,
            "entity" => $__entity__,
            "fieldName" => $__fieldName__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderHtmlProperty"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderHtmlProperty"));

            // line 167
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 168
            echo "
    ";
            // line 169
            if (((array_key_exists("entity", $context) && array_key_exists("fieldName", $context)) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 169, $this->source); })()), (isset($context["fieldName"]) || array_key_exists("fieldName", $context) ? $context["fieldName"] : (function () { throw new RuntimeError('Variable "fieldName" does not exist.', 169, $this->source); })())))) {
                // line 170
                echo "    ";
            } else {
                // line 171
                echo "        ";
                echo twig_call_macro($macros["UIMacro"], "macro_renderAttribute", [(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 171, $this->source); })()), (("<div class=\"control-label\">" . ((array_key_exists("data", $context)) ? (_twig_default_filter((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 171, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.empty"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.empty")))) . "</div>"), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 171, $this->source); })())], 171, $context, $this->getSourceContext());
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

    // line 183
    public function macro_renderPropertyControlGroup($__title__ = null, $__data__ = null, $__entity__ = null, $__fieldName__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "data" => $__data__,
            "entity" => $__entity__,
            "fieldName" => $__fieldName__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderPropertyControlGroup"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderPropertyControlGroup"));

            // line 184
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 185
            echo "
    ";
            // line 186
            echo twig_call_macro($macros["UIMacro"], "macro_renderHtmlPropertyControlGroup", [(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 186, $this->source); })()), twig_escape_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 186, $this->source); })())), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 186, $this->source); })()), (isset($context["fieldName"]) || array_key_exists("fieldName", $context) ? $context["fieldName"] : (function () { throw new RuntimeError('Variable "fieldName" does not exist.', 186, $this->source); })())], 186, $context, $this->getSourceContext());
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 197
    public function macro_renderHtmlPropertyControlGroup($__title__ = null, $__data__ = null, $__entity__ = null, $__fieldName__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "data" => $__data__,
            "entity" => $__entity__,
            "fieldName" => $__fieldName__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderHtmlPropertyControlGroup"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderHtmlPropertyControlGroup"));

            // line 198
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 199
            echo "
    ";
            // line 200
            if (((array_key_exists("entity", $context) && array_key_exists("fieldName", $context)) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 200, $this->source); })()), (isset($context["fieldName"]) || array_key_exists("fieldName", $context) ? $context["fieldName"] : (function () { throw new RuntimeError('Variable "fieldName" does not exist.', 200, $this->source); })())))) {
                // line 201
                echo "    ";
            } else {
                // line 202
                echo "        ";
                echo twig_call_macro($macros["UIMacro"], "macro_renderControlGroup", [(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 202, $this->source); })()), (("<div class=\"control-label\">" . ((array_key_exists("data", $context)) ? (_twig_default_filter((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 202, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.empty"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.empty")))) . "</div>")], 202, $context, $this->getSourceContext());
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

    // line 214
    public function macro_renderCollapsibleHtmlProperty($__title__ = null, $__data__ = null, $__entity__ = null, $__fieldName__ = null, $__moreText__ = "Show more", $__lessText__ = "Show less", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "data" => $__data__,
            "entity" => $__entity__,
            "fieldName" => $__fieldName__,
            "moreText" => $__moreText__,
            "lessText" => $__lessText__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderCollapsibleHtmlProperty"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderCollapsibleHtmlProperty"));

            // line 215
            echo "    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 215, $this->source); })()), (isset($context["fieldName"]) || array_key_exists("fieldName", $context) ? $context["fieldName"] : (function () { throw new RuntimeError('Variable "fieldName" does not exist.', 215, $this->source); })()))) {
                // line 216
                echo "        ";
                $context["collapseView"] = ["storageKey" => (("collapseBlock[" . $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(                // line 217
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 217, $this->source); })()))) . "]"), "uid" => (((("[" .                 // line 218
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 218, $this->source); })())) . "][") . twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 218, $this->source); })()), "id", [], "any", false, false, false, 218)) . "]"), "animationSpeed" => 0, "closeClass" => "overflows", "checkOverflow" => true, "open" => false];
                // line 224
                echo "        <div class=\"collapse-block\" data-page-component-collapse=\"";
                echo twig_escape_filter($this->env, json_encode((isset($context["collapseView"]) || array_key_exists("collapseView", $context) ? $context["collapseView"] : (function () { throw new RuntimeError('Variable "collapseView" does not exist.', 224, $this->source); })())), "html", null, true);
                echo "\">
            ";
                // line 225
                $macros["UIMacro"] = $this;
                // line 226
                echo "
            ";
                // line 227
                echo twig_call_macro($macros["UIMacro"], "macro_renderAttribute", [(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 227, $this->source); })()), (((((((("<div class=\"control-label\" data-collapse-container>" . ((                // line 229
array_key_exists("data", $context)) ? (_twig_default_filter((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 229, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.empty"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.empty")))) . "</div>") . "<a href=\"#\" class=\"control-label toggle-more\" data-collapse-trigger>") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                // line 231
(isset($context["moreText"]) || array_key_exists("moreText", $context) ? $context["moreText"] : (function () { throw new RuntimeError('Variable "moreText" does not exist.', 231, $this->source); })()))) . "</a>") . "<a href=\"#\" class=\"control-label toggle-less\" data-collapse-trigger>") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                // line 232
(isset($context["lessText"]) || array_key_exists("lessText", $context) ? $context["lessText"] : (function () { throw new RuntimeError('Variable "lessText" does not exist.', 232, $this->source); })()))) . "</a>")], 227, $context, $this->getSourceContext());
                // line 233
                echo "
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 245
    public function macro_renderCollapsibleHtml($__data__ = null, $__entity__ = null, $__fieldName__ = null, $__moreText__ = "Show more", $__lessText__ = "Show less", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "entity" => $__entity__,
            "fieldName" => $__fieldName__,
            "moreText" => $__moreText__,
            "lessText" => $__lessText__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderCollapsibleHtml"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderCollapsibleHtml"));

            // line 246
            echo "    ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 246, $this->source); })()), (isset($context["fieldName"]) || array_key_exists("fieldName", $context) ? $context["fieldName"] : (function () { throw new RuntimeError('Variable "fieldName" does not exist.', 246, $this->source); })())) &&  !twig_test_empty((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 246, $this->source); })())))) {
                // line 247
                echo "        ";
                $context["collapseView"] = ["storageKey" => (("collapseBlock[" . $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(                // line 248
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 248, $this->source); })()))) . "]"), "uid" => (((("[" .                 // line 249
(isset($context["fieldName"]) || array_key_exists("fieldName", $context) ? $context["fieldName"] : (function () { throw new RuntimeError('Variable "fieldName" does not exist.', 249, $this->source); })())) . "][") . twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 249, $this->source); })()), "id", [], "any", false, false, false, 249)) . "]"), "animationSpeed" => 0, "closeClass" => "overflows", "checkOverflow" => true, "open" => false];
                // line 255
                echo "        <div class=\"collapse-block\" data-page-component-collapse=\"";
                echo twig_escape_filter($this->env, json_encode((isset($context["collapseView"]) || array_key_exists("collapseView", $context) ? $context["collapseView"] : (function () { throw new RuntimeError('Variable "collapseView" does not exist.', 255, $this->source); })())), "html", null, true);
                echo "\">
            <div class=\"control-label\" data-collapse-container>
                ";
                // line 257
                echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 257, $this->source); })());
                echo "
            </div>
            <a href=\"#\" class=\"control-label toggle-more\" data-collapse-trigger>";
                // line 259
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["moreText"]) || array_key_exists("moreText", $context) ? $context["moreText"] : (function () { throw new RuntimeError('Variable "moreText" does not exist.', 259, $this->source); })())), "html", null, true);
                echo "</a>
            <a href=\"#\" class=\"control-label toggle-less\" data-collapse-trigger>";
                // line 260
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["lessText"]) || array_key_exists("lessText", $context) ? $context["lessText"] : (function () { throw new RuntimeError('Variable "lessText" does not exist.', 260, $this->source); })())), "html", null, true);
                echo "</a>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 271
    public function macro_renderSwitchableHtmlProperty($__title__ = null, $__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderSwitchableHtmlProperty"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderSwitchableHtmlProperty"));

            // line 272
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 273
            echo "
    ";
            // line 274
            if ($this->extensions['Oro\Bundle\ConfigBundle\Twig\ConfigExtension']->getConfigValue("oro_form.wysiwyg_enabled")) {
                // line 275
                echo "        ";
                $context["data"] = $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlSanitize((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 275, $this->source); })()));
                // line 276
                echo "    ";
            } else {
                // line 277
                echo "        ";
                $context["data"] = twig_nl2br(twig_escape_filter($this->env, twig_striptags((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 277, $this->source); })())), "html", null, true));
                // line 278
                echo "    ";
            }
            // line 279
            echo "
    ";
            // line 280
            echo twig_call_macro($macros["UIMacro"], "macro_renderAttribute", [(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 280, $this->source); })()), (("<div class=\"control-label html-property\">" . ((array_key_exists("data", $context)) ? (_twig_default_filter((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 280, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.empty"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.empty")))) . "</div>")], 280, $context, $this->getSourceContext());
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 290
    public function macro_renderColorProperty($__title__ = null, $__data__ = null, $__empty__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "data" => $__data__,
            "empty" => $__empty__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderColorProperty"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderColorProperty"));

            // line 291
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 292
            echo "
    ";
            // line 293
            if ( !(null === (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 293, $this->source); })()))) {
                // line 294
                echo "       ";
                $context["data"] = (((((("<i class=\"color hide-text\" title=\"" . (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 294, $this->source); })())) . "\" style=\"background-color: ") . (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 294, $this->source); })())) . ";\">") . (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 294, $this->source); })())) . "</i>");
                // line 295
                echo "    ";
            }
            // line 296
            echo "    ";
            echo twig_call_macro($macros["UIMacro"], "macro_renderAttribute", [(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 296, $this->source); })()), (("<div class=\"control-label\">" . _twig_default_filter(((array_key_exists("data", $context)) ? (_twig_default_filter((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 296, $this->source); })()), (isset($context["empty"]) || array_key_exists("empty", $context) ? $context["empty"] : (function () { throw new RuntimeError('Variable "empty" does not exist.', 296, $this->source); })()))) : ((isset($context["empty"]) || array_key_exists("empty", $context) ? $context["empty"] : (function () { throw new RuntimeError('Variable "empty" does not exist.', 296, $this->source); })()))), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.empty"))) . "</div>")], 296, $context, $this->getSourceContext());
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 312
    public function macro_link($__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "link"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "link"));

            // line 313
            echo "    ";
            // line 314
            echo "    ";
            $context["iconHtml"] = "";
            // line 315
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "iCss", [], "any", true, true, false, 315) && twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 315, $this->source); })()), "iCss", [], "any", false, false, false, 315))) {
                // line 316
                echo "        ";
                ob_start();
                // line 317
                echo "        <span class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 317, $this->source); })()), "iCss", [], "any", false, false, false, 317), "html", null, true);
                echo "\" aria-hidden=\"true\">
            ";
                // line 318
                if ( !((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "noIconText", [], "any", true, true, false, 318)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "noIconText", [], "any", false, false, false, 318), false)) : (false))) {
                    // line 319
                    echo "                <span class=\"sr-only\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 319, $this->source); })()), "label", [], "any", false, false, false, 319), "html", null, true);
                    echo "</span>
            ";
                }
                // line 321
                echo "        </span>
        ";
                $context["iconHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 323
                echo "    ";
            } else {
                // line 324
                echo "    ";
            }
            // line 325
            echo "    ";
            ob_start();
            // line 326
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 326, $this->source); })()), "path", [], "any", false, false, false, 326), "html", null, true);
            echo "\"
        ";
            // line 327
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "id", [], "any", true, true, false, 327)) {
                // line 328
                echo "            id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 328, $this->source); })()), "id", [], "any", false, false, false, 328), "html", null, true);
                echo "\"
        ";
            }
            // line 330
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "data", [], "any", true, true, false, 330)) {
                // line 331
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 331, $this->source); })()), "data", [], "any", false, false, false, 331));
                foreach ($context['_seq'] as $context["dataItemName"] => $context["dataItemValue"]) {
                    // line 332
                    echo "                data-";
                    echo twig_escape_filter($this->env, $context["dataItemName"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["dataItemValue"], "html_attr");
                    echo "\"
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['dataItemName'], $context['dataItemValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 334
                echo "        ";
            }
            // line 335
            echo "        class=\"";
            ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "class", [], "any", true, true, false, 335)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 335, $this->source); })()), "class", [], "any", false, false, false, 335), "html", null, true))) : (print ("")));
            echo " ";
            ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "aCss", [], "any", true, true, false, 335)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 335, $this->source); })()), "aCss", [], "any", false, false, false, 335), "html", null, true))) : (print ("")));
            echo "\"
        ";
            // line 336
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "role", [], "any", true, true, false, 336)) {
                echo "role=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 336, $this->source); })()), "role", [], "any", false, false, false, 336), "html", null, true);
                echo "\"";
            }
            // line 337
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "title", [], "any", true, true, false, 337) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 337, $this->source); })()), "title", [], "any", false, false, false, 337)))) {
                echo "title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 337, $this->source); })()), "title", [], "any", false, false, false, 337), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_trim_filter((isset($context["iconHtml"]) || array_key_exists("iconHtml", $context) ? $context["iconHtml"] : (function () { throw new RuntimeError('Variable "iconHtml" does not exist.', 337, $this->source); })()));
            // line 338
            echo twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 338, $this->source); })()), "label", [], "any", false, false, false, 338)), "html", null, true);
            echo "
    </a>
    ";
            $___internal_parse_24_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 325
            echo twig_spaceless($___internal_parse_24_);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 354
    public function macro_button($__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "button"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "button"));

            // line 355
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 356
            echo "
    <div class=\"pull-left btn-group icons-holder\">
        ";
            // line 358
            echo twig_call_macro($macros["UIMacro"], "macro_link", [twig_array_merge((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 358, $this->source); })()), ["class" => "btn back icons-holder-text", "role" => "button"])], 358, $context, $this->getSourceContext());
            echo "
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 372
    public function macro_dropdownButton($__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dropdownButton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dropdownButton"));

            // line 373
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 374
            echo "
    ";
            // line 375
            $context["togglerId"] = uniqid("dropdown-");
            // line 376
            echo "    <div class=\"btn-group\">
        <a href=\"#\" role=\"button\" id=\"";
            // line 377
            echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 377, $this->source); })()), "html", null, true);
            echo "\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\"
           aria-haspopup=\"true\" aria-expanded=\"false\" data-placement=\"bottom-end\"
           data-inherit-parent-width=\"loosely\"
        >
            ";
            // line 381
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "iCss", [], "any", true, true, false, 381)) {
                // line 382
                echo "                <span class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 382, $this->source); })()), "iCss", [], "any", false, false, false, 382), "html", null, true);
                echo "\" aria-hidden=\"true\"></span>
            ";
            }
            // line 384
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 384, $this->source); })()), "label", [], "any", false, false, false, 384), "html", null, true);
            echo "
        </a>
        <ul class=\"dropdown-menu ";
            // line 386
            ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "aCss", [], "any", true, true, false, 386)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 386, $this->source); })()), "aCss", [], "any", false, false, false, 386), "html", null, true))) : (print ("")));
            echo "\" role=\"menu\" aria-labelledby=\"";
            echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 386, $this->source); })()), "html", null, true);
            echo "\">
            ";
            // line 387
            if ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "elements", [], "any", true, true, false, 387) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 387, $this->source); })()), "elements", [], "any", false, false, false, 387)))) {
                // line 388
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 388, $this->source); })()), "elements", [], "any", false, false, false, 388));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 389
                    echo "                    ";
                    echo twig_call_macro($macros["UIMacro"], "macro_dropdownItem", [$context["item"]], 389, $context, $this->getSourceContext());
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 391
                echo "            ";
            }
            // line 392
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "html", [], "any", true, true, false, 392) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 392, $this->source); })()), "html", [], "any", false, false, false, 392)))) {
                // line 393
                echo "                ";
                echo twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 393, $this->source); })()), "html", [], "any", false, false, false, 393);
                echo "
            ";
            }
            // line 395
            echo "        </ul>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 410
    public function macro_dropdownItem($__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dropdownItem"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dropdownItem"));

            // line 411
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 412
            echo "    <li>";
            echo twig_call_macro($macros["UIMacro"], "macro_link", [(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 412, $this->source); })())], 412, $context, $this->getSourceContext());
            echo "</li>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 424
    public function macro_pinnedDropdownButton($__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "pinnedDropdownButton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "pinnedDropdownButton"));

            // line 425
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 426
            echo "
    ";
            // line 427
            if (($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isDesktop() || ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "mobileEnabled", [], "any", true, true, false, 427)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "mobileEnabled", [], "any", false, false, false, 427), false)) : (false)))) {
                // line 428
                echo "        ";
                $context["options"] = ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "options", [], "any", true, true, false, 428)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "options", [], "any", false, false, false, 428), [])) : ([]));
                // line 429
                echo "        ";
                $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 429, $this->source); })()), ["widgetModule" => ((twig_get_attribute($this->env, $this->source,                 // line 430
($context["options"] ?? null), "widgetModule", [], "any", true, true, false, 430)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "widgetModule", [], "any", false, false, false, 430), "oroui/js/content-processor/pinned-dropdown-button")) : ("oroui/js/content-processor/pinned-dropdown-button")), "widgetName" => ((twig_get_attribute($this->env, $this->source,                 // line 431
($context["options"] ?? null), "widgetName", [], "any", true, true, false, 431)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "widgetName", [], "any", false, false, false, 431), "pinnedDropdownButtonProcessor")) : ("pinnedDropdownButtonProcessor")), "groupKey" => ((twig_get_attribute($this->env, $this->source,                 // line 432
($context["parameters"] ?? null), "groupKey", [], "any", true, true, false, 432)) ? (twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 432, $this->source); })()), "groupKey", [], "any", false, false, false, 432)) : ("")), "useMainButtonsClone" => true]);
                // line 435
                echo "        ";
                ob_start();
                // line 436
                echo "            <div class=\"pull-right pinned-dropdown\"
                 ";
                // line 437
                echo twig_call_macro($macros["UIMacro"], "macro_renderAttributes", [twig_array_merge(((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "dataAttributes", [], "any", true, true, false, 437)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "dataAttributes", [], "any", false, false, false, 437), [])) : ([])), ["page-component-module" => "oroui/js/app/components/jquery-widget-component", "page-component-options" =>                 // line 439
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 439, $this->source); })())])], 437, $context, $this->getSourceContext());
                // line 440
                echo ">
                ";
                // line 441
                echo twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 441, $this->source); })()), "html", [], "any", false, false, false, 441);
                echo "
            </div>
        ";
                $___internal_parse_25_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 435
                echo twig_spaceless($___internal_parse_25_);
                // line 444
                echo "    ";
            } else {
                // line 445
                echo "        ";
                echo twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 445, $this->source); })()), "html", [], "any", false, false, false, 445);
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

    // line 452
    public function macro_dropdownSaveButton($__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dropdownSaveButton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dropdownSaveButton"));

            // line 453
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 454
            echo "    ";
            $context["parameters"] = twig_array_merge(["groupKey" => "saveButtons", "options" => ["moreButtonAttrs" => ["class" => "btn-success"]]], ((            // line 461
array_key_exists("parameters", $context)) ? (_twig_default_filter((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 461, $this->source); })()), [])) : ([])));
            // line 462
            echo "    ";
            echo twig_call_macro($macros["UIMacro"], "macro_pinnedDropdownButton", [(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 462, $this->source); })())], 462, $context, $this->getSourceContext());
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 471
    public function macro_cancelButton($__path__ = null, $__label__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "path" => $__path__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "cancelButton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "cancelButton"));

            // line 472
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 473
            echo "
    ";
            // line 474
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 474, $this->source); })()))) {
                // line 475
                echo "        ";
                $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel");
                // line 476
                echo "    ";
            }
            // line 477
            echo "    ";
            echo twig_call_macro($macros["UIMacro"], "macro_button", [["path" => (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 477, $this->source); })()), "title" => (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 477, $this->source); })()), "label" => (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 477, $this->source); })()), "data" => ["action" => "cancel"]]], 477, $context, $this->getSourceContext());
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 491
    public function macro_editButton($__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "editButton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "editButton"));

            // line 492
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 493
            echo "
    ";
            // line 494
            $context["iCss"] = [0 => "fa-pencil-square-o"];
            // line 495
            echo "    ";
            $context["aCss"] = [0 => "edit-button", 1 => "main-group"];
            // line 496
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "iCss", [], "any", true, true, false, 496)) {
                // line 497
                echo "        ";
                $context["iCss"] = twig_array_merge(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 497, $this->source); })()), "iCss", [], "any", false, false, false, 497), " "), (isset($context["iCss"]) || array_key_exists("iCss", $context) ? $context["iCss"] : (function () { throw new RuntimeError('Variable "iCss" does not exist.', 497, $this->source); })()));
                // line 498
                echo "    ";
            }
            // line 499
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "aCss", [], "any", true, true, false, 499)) {
                // line 500
                echo "        ";
                $context["aCss"] = twig_array_merge(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 500, $this->source); })()), "aCss", [], "any", false, false, false, 500), " "), (isset($context["aCss"]) || array_key_exists("aCss", $context) ? $context["aCss"] : (function () { throw new RuntimeError('Variable "aCss" does not exist.', 500, $this->source); })()));
                // line 501
                echo "    ";
            }
            // line 502
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "title", [], "any", true, true, false, 502)) {
                // line 503
                echo "        ";
                $context["title"] = twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 503, $this->source); })()), "title", [], "any", false, false, false, 503);
                // line 504
                echo "    ";
            } else {
                // line 505
                echo "        ";
                $context["title"] = ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "entity_label", [], "any", true, true, false, 505)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.edit_entity", ["%entityName%" => twig_get_attribute($this->env, $this->source,                 // line 506
(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 506, $this->source); })()), "entity_label", [], "any", false, false, false, 506)])) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.edit")));
                // line 509
                echo "    ";
            }
            // line 510
            echo "    ";
            $context["label"] = ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "label", [], "any", true, true, false, 510)) ? (twig_get_attribute($this->env, $this->source,             // line 511
(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 511, $this->source); })()), "label", [], "any", false, false, false, 511)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.edit")));
            // line 514
            echo "    ";
            $context["parameters"] = twig_array_merge((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 514, $this->source); })()), ["iCss" => twig_join_filter(            // line 515
(isset($context["iCss"]) || array_key_exists("iCss", $context) ? $context["iCss"] : (function () { throw new RuntimeError('Variable "iCss" does not exist.', 515, $this->source); })()), " "), "aCss" => twig_join_filter(            // line 516
(isset($context["aCss"]) || array_key_exists("aCss", $context) ? $context["aCss"] : (function () { throw new RuntimeError('Variable "aCss" does not exist.', 516, $this->source); })()), " "), "title" =>             // line 517
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 517, $this->source); })()), "label" =>             // line 518
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 518, $this->source); })())]);
            // line 520
            echo "
    ";
            // line 522
            echo "    ";
            $context["parameters"] = twig_array_merge((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 522, $this->source); })()), ["path" => $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->addUrlQuery(twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 522, $this->source); })()), "path", [], "array", false, false, false, 522))]);
            // line 523
            echo "
    ";
            // line 524
            echo twig_call_macro($macros["UIMacro"], "macro_button", [(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 524, $this->source); })())], 524, $context, $this->getSourceContext());
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 538
    public function macro_addButton($__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "addButton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "addButton"));

            // line 539
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "label", [], "any", true, true, false, 539)) {
                // line 540
                echo "        ";
                $context["label"] = twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 540, $this->source); })()), "label", [], "any", false, false, false, 540);
                // line 541
                echo "    ";
            } else {
                // line 542
                echo "        ";
                $context["label"] = ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "entity_label", [], "any", true, true, false, 542)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => twig_get_attribute($this->env, $this->source,                 // line 543
(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 543, $this->source); })()), "entity_label", [], "any", false, false, false, 543)])) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create")));
                // line 546
                echo "    ";
            }
            // line 547
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "title", [], "any", true, true, false, 547)) {
                // line 548
                echo "        ";
                $context["title"] = twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 548, $this->source); })()), "title", [], "any", false, false, false, 548);
                // line 549
                echo "    ";
            } else {
                // line 550
                echo "        ";
                $context["title"] = ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "entity_label", [], "any", true, true, false, 550)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => twig_get_attribute($this->env, $this->source,                 // line 551
(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 551, $this->source); })()), "entity_label", [], "any", false, false, false, 551)])) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create")));
                // line 554
                echo "    ";
            }
            // line 555
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 555, $this->source); })()), "path", [], "any", false, false, false, 555), "html", null, true);
            echo "\"
        class=\"btn main-group btn-primary pull-right ";
            // line 556
            ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "aCss", [], "any", true, true, false, 556)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 556, $this->source); })()), "aCss", [], "any", false, false, false, 556), "html", null, true))) : (print ("")));
            echo "\"
        title=\"";
            // line 557
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 557, $this->source); })()), "html", null, true);
            echo "\"
    >";
            // line 559
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 559, $this->source); })()), "html", null, true);
            // line 560
            echo "</a>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 578
    public function macro_deleteButton($__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "deleteButton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "deleteButton"));

            // line 579
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 580
            echo "
    ";
            // line 581
            $context["aCss"] = "btn icons-holder-text";
            // line 582
            echo "
    ";
            // line 583
            if ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "disabled", [], "any", true, true, false, 583) && twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 583, $this->source); })()), "disabled", [], "any", false, false, false, 583))) {
                // line 584
                echo "        ";
                $context["aCss"] = ((isset($context["aCss"]) || array_key_exists("aCss", $context) ? $context["aCss"] : (function () { throw new RuntimeError('Variable "aCss" does not exist.', 584, $this->source); })()) . " disabled");
                // line 585
                echo "    ";
            }
            // line 586
            echo "
    ";
            // line 587
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "aCss", [], "any", true, true, false, 587)) {
                // line 588
                echo "        ";
                $context["aCss"] = (((isset($context["aCss"]) || array_key_exists("aCss", $context) ? $context["aCss"] : (function () { throw new RuntimeError('Variable "aCss" does not exist.', 588, $this->source); })()) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 588, $this->source); })()), "aCss", [], "any", false, false, false, 588));
                // line 589
                echo "    ";
            }
            // line 590
            echo "
    ";
            // line 591
            $context["parameters"] = twig_array_merge((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 591, $this->source); })()), ["aCss" => (isset($context["aCss"]) || array_key_exists("aCss", $context) ? $context["aCss"] : (function () { throw new RuntimeError('Variable "aCss" does not exist.', 591, $this->source); })())]);
            // line 592
            echo "
    <div class=\"pull-left btn-group icons-holder\">
        ";
            // line 594
            echo twig_call_macro($macros["UIMacro"], "macro_deleteLink", [(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 594, $this->source); })())], 594, $context, $this->getSourceContext());
            echo "
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 598
    public function macro_deleteLink($__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "deleteLink"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "deleteLink"));

            // line 599
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 600
            echo "
    ";
            // line 601
            $context["entityLabel"] = ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "entity_label", [], "any", true, true, false, 601)) ? (twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 601, $this->source); })()), "entity_label", [], "any", false, false, false, 601)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.item")));
            // line 602
            echo "    ";
            $context["label"] = ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "label", [], "any", true, true, false, 602)) ? (twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 602, $this->source); })()), "label", [], "any", false, false, false, 602)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.delete")));
            // line 603
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "title", [], "any", true, true, false, 603)) {
                // line 604
                echo "        ";
                $context["title"] = twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 604, $this->source); })()), "title", [], "any", false, false, false, 604);
                // line 605
                echo "    ";
            } else {
                // line 606
                echo "        ";
                $context["title"] = ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "entity_label", [], "any", true, true, false, 606)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.delete_entity", ["%entityName%" => twig_get_attribute($this->env, $this->source,                 // line 607
(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 607, $this->source); })()), "entity_label", [], "any", false, false, false, 607)])) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.delete")));
                // line 610
                echo "    ";
            }
            // line 611
            echo "
    ";
            // line 612
            $context["message"] = ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "dataMessage", [], "any", true, true, false, 612)) ? (twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 612, $this->source); })()), "dataMessage", [], "any", false, false, false, 612)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.delete_confirm", ["%entity_label%" => (isset($context["entityLabel"]) || array_key_exists("entityLabel", $context) ? $context["entityLabel"] : (function () { throw new RuntimeError('Variable "entityLabel" does not exist.', 612, $this->source); })())])));
            // line 613
            echo "    ";
            $context["successMessage"] = ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "successMessage", [], "any", true, true, false, 613)) ? (twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 613, $this->source); })()), "successMessage", [], "any", false, false, false, 613)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.delete_message", ["%entity_label%" => (isset($context["entityLabel"]) || array_key_exists("entityLabel", $context) ? $context["entityLabel"] : (function () { throw new RuntimeError('Variable "entityLabel" does not exist.', 613, $this->source); })())])));
            // line 614
            echo "    ";
            $context["url"] = ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "dataUrl", [], "any", true, true, false, 614)) ? (twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 614, $this->source); })()), "dataUrl", [], "any", false, false, false, 614)) : (""));
            // line 615
            echo "    ";
            $context["linkParams"] = ["data" => ["message" =>             // line 617
(isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 617, $this->source); })()), "success-message" =>             // line 618
(isset($context["successMessage"]) || array_key_exists("successMessage", $context) ? $context["successMessage"] : (function () { throw new RuntimeError('Variable "successMessage" does not exist.', 618, $this->source); })()), "url" =>             // line 619
(isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 619, $this->source); })())], "iCss" => ((twig_get_attribute($this->env, $this->source,             // line 621
($context["parameters"] ?? null), "iCss", [], "any", true, true, false, 621)) ? (twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 621, $this->source); })()), "iCss", [], "any", false, false, false, 621)) : ("fa-trash-o")), "aCss" => twig_get_attribute($this->env, $this->source,             // line 622
(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 622, $this->source); })()), "aCss", [], "any", false, false, false, 622), "title" =>             // line 623
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 623, $this->source); })()), "label" =>             // line 624
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 624, $this->source); })()), "path" => "#"];
            // line 627
            echo "

    ";
            // line 629
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "dataId", [], "any", true, true, false, 629)) {
                // line 630
                echo "        ";
                $context["data"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["linkParams"]) || array_key_exists("linkParams", $context) ? $context["linkParams"] : (function () { throw new RuntimeError('Variable "linkParams" does not exist.', 630, $this->source); })()), "data", [], "any", false, false, false, 630), ["id" => twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 630, $this->source); })()), "dataId", [], "any", false, false, false, 630)]);
                // line 631
                echo "        ";
                $context["linkParams"] = twig_array_merge((isset($context["linkParams"]) || array_key_exists("linkParams", $context) ? $context["linkParams"] : (function () { throw new RuntimeError('Variable "linkParams" does not exist.', 631, $this->source); })()), ["data" => (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 631, $this->source); })())]);
                // line 632
                echo "    ";
            }
            // line 633
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "dataRedirect", [], "any", true, true, false, 633)) {
                // line 634
                echo "        ";
                $context["data"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["linkParams"]) || array_key_exists("linkParams", $context) ? $context["linkParams"] : (function () { throw new RuntimeError('Variable "linkParams" does not exist.', 634, $this->source); })()), "data", [], "any", false, false, false, 634), ["redirect" => twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 634, $this->source); })()), "dataRedirect", [], "any", false, false, false, 634)]);
                // line 635
                echo "        ";
                $context["linkParams"] = twig_array_merge((isset($context["linkParams"]) || array_key_exists("linkParams", $context) ? $context["linkParams"] : (function () { throw new RuntimeError('Variable "linkParams" does not exist.', 635, $this->source); })()), ["data" => (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 635, $this->source); })())]);
                // line 636
                echo "    ";
            }
            // line 637
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "data", [], "any", true, true, false, 637)) {
                // line 638
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 638, $this->source); })()), "data", [], "any", false, false, false, 638));
                foreach ($context['_seq'] as $context["dataItemName"] => $context["dataItemValue"]) {
                    // line 639
                    echo "            ";
                    $context["data"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["linkParams"]) || array_key_exists("linkParams", $context) ? $context["linkParams"] : (function () { throw new RuntimeError('Variable "linkParams" does not exist.', 639, $this->source); })()), "data", [], "any", false, false, false, 639), [$context["dataItemName"] => $context["dataItemValue"]]);
                    // line 640
                    echo "            ";
                    $context["linkParams"] = twig_array_merge((isset($context["linkParams"]) || array_key_exists("linkParams", $context) ? $context["linkParams"] : (function () { throw new RuntimeError('Variable "linkParams" does not exist.', 640, $this->source); })()), ["data" => (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 640, $this->source); })())]);
                    // line 641
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['dataItemName'], $context['dataItemValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 642
                echo "    ";
            }
            // line 643
            echo "    ";
            echo twig_call_macro($macros["UIMacro"], "macro_link", [(isset($context["linkParams"]) || array_key_exists("linkParams", $context) ? $context["linkParams"] : (function () { throw new RuntimeError('Variable "linkParams" does not exist.', 643, $this->source); })())], 643, $context, $this->getSourceContext());
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 665
    public function macro_clientLink($__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "clientLink"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "clientLink"));

            // line 666
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 667
            echo "    ";
            $context["parameters"] = twig_array_merge((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 667, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source,             // line 668
($context["parameters"] ?? null), "class", [], "any", true, true, false, 668)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "class", [], "any", false, false, false, 668), "")) : ("")) . ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "aCss", [], "any", true, true, false, 668)) ? ((" " . twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 668, $this->source); })()), "aCss", [], "any", false, false, false, 668))) : ("")))]);
            // line 670
            echo "    ";
            ob_start();
            // line 671
            echo "        <a href=\"#\"";
            // line 672
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "dataUrlRaw", [], "any", true, true, false, 672)) {
                // line 673
                echo "data-url=\"";
                echo twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 673, $this->source); })()), "dataUrlRaw", [], "any", false, false, false, 673);
                echo "\"
            ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 674
($context["parameters"] ?? null), "dataUrl", [], "any", true, true, false, 674)) {
                // line 675
                echo "                data-url=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 675, $this->source); })()), "dataUrl", [], "any", false, false, false, 675), "html", null, true);
                echo "\"";
            }
            // line 677
            echo twig_call_macro($macros["UIMacro"], "macro_clientControlAttrs", [(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 677, $this->source); })())], 677, $context, $this->getSourceContext());
            echo ">";
            // line 678
            echo twig_call_macro($macros["UIMacro"], "macro_clientControlIcon", [(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 678, $this->source); })())], 678, $context, $this->getSourceContext());
            // line 679
            ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "label", [], "any", true, true, false, 679)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 679, $this->source); })()), "label", [], "any", false, false, false, 679), "html", null, true))) : (print ("")));
            // line 680
            echo "</a>
    ";
            $___internal_parse_26_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 670
            echo twig_spaceless($___internal_parse_26_);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 704
    public function macro_clientControlAttrs($__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "clientControlAttrs"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "clientControlAttrs"));

            // line 705
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 706
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "class", [], "any", true, true, false, 706)) {
                // line 707
                echo "        class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 707, $this->source); })()), "class", [], "any", false, false, false, 707), "html", null, true);
                echo "\"
    ";
            }
            // line 709
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "id", [], "any", true, true, false, 709)) {
                // line 710
                echo "        id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 710, $this->source); })()), "id", [], "any", false, false, false, 710), "html", null, true);
                echo "\"
    ";
            }
            // line 712
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "title", [], "any", true, true, false, 712)) {
                // line 713
                echo "        title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 713, $this->source); })()), "title", [], "any", false, false, false, 713), "html", null, true);
                echo "\"
    ";
            }
            // line 715
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "dataId", [], "any", true, true, false, 715)) {
                // line 716
                echo "        data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 716, $this->source); })()), "dataId", [], "any", false, false, false, 716), "html", null, true);
                echo "\"
    ";
            }
            // line 718
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "dataIntention", [], "any", true, true, false, 718)) {
                // line 719
                echo "        data-intention=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 719, $this->source); })()), "dataIntention", [], "any", false, false, false, 719), "html", null, true);
                echo "\"
    ";
            }
            // line 721
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "successMessage", [], "any", true, true, false, 721)) {
                // line 722
                echo "        data-success-message=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 722, $this->source); })()), "successMessage", [], "any", false, false, false, 722), "html", null, true);
                echo "\"
    ";
            }
            // line 724
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "dataRedirect", [], "any", true, true, false, 724)) {
                // line 725
                echo "        data-redirect=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 725, $this->source); })()), "dataRedirect", [], "any", false, false, false, 725), "html", null, true);
                echo "\"
    ";
            }
            // line 727
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "role", [], "any", true, true, false, 727)) {
                // line 728
                echo "        role=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 728, $this->source); })()), "role", [], "any", false, false, false, 728), "html", null, true);
                echo "\"
    ";
            }
            // line 730
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "dir", [], "any", true, true, false, 730)) {
                // line 731
                echo "        dir=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 731, $this->source); })()), "dir", [], "any", false, false, false, 731), "html", null, true);
                echo "\"
    ";
            }
            // line 733
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "ariaSelected", [], "any", true, true, false, 733)) {
                // line 734
                echo "        aria-selected=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 734, $this->source); })()), "ariaSelected", [], "any", false, false, false, 734), "html", null, true);
                echo "\"
    ";
            }
            // line 736
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "ariaControls", [], "any", true, true, false, 736)) {
                // line 737
                echo "        aria-controls=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 737, $this->source); })()), "ariaControls", [], "any", false, false, false, 737), "html", null, true);
                echo "\"
    ";
            }
            // line 739
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "ariaLabel", [], "any", true, true, false, 739)) {
                // line 740
                echo "        aria-label=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 740, $this->source); })()), "ariaLabel", [], "any", false, false, false, 740), "html", null, true);
                echo "\"
    ";
            }
            // line 742
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "ariaHaspopup", [], "any", true, true, false, 742)) {
                // line 743
                echo "        aria-haspopup=\"";
                echo ((twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 743, $this->source); })()), "ariaHaspopup", [], "any", false, false, false, 743)) ? ("true") : ("false"));
                echo "\"
    ";
            }
            // line 745
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "visible", [], "any", true, true, false, 745) &&  !twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 745, $this->source); })()), "visible", [], "any", false, false, false, 745))) {
                // line 746
                echo "        style=\"display: none\"
    ";
            }
            // line 748
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "widget", [], "any", true, true, false, 748) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 748, $this->source); })()), "widget", [], "any", false, false, false, 748)))) {
                // line 749
                echo "        ";
                $context["options"] = twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 749, $this->source); })()), "widget", [], "any", false, false, false, 749);
                // line 750
                if ( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "createOnEvent", [], "any", true, true, false, 750)) {
                    // line 751
                    $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 751, $this->source); })()), ["createOnEvent" => ((twig_get_attribute($this->env, $this->source,                     // line 752
($context["options"] ?? null), "event", [], "any", true, true, false, 752)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "event", [], "any", false, false, false, 752), "click")) : ("click"))]);
                }
                // line 755
                echo twig_call_macro($macros["UIMacro"], "macro_renderWidgetAttributes", [(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 755, $this->source); })())], 755, $context, $this->getSourceContext());
                echo "
    ";
            }
            // line 757
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "pageComponent", [], "any", true, true, false, 757)) {
                // line 758
                echo twig_call_macro($macros["UIMacro"], "macro_renderPageComponentAttributes", [twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 758, $this->source); })()), "pageComponent", [], "any", false, false, false, 758)], 758, $context, $this->getSourceContext());
            }
            // line 760
            if ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "dataAttributes", [], "any", true, true, false, 760) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 760, $this->source); })()), "dataAttributes", [], "any", false, false, false, 760)))) {
                // line 761
                echo twig_call_macro($macros["UIMacro"], "macro_renderAttributes", [twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 761, $this->source); })()), "dataAttributes", [], "any", false, false, false, 761)], 761, $context, $this->getSourceContext());
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 775
    public function macro_clientControlIcon($__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "clientControlIcon"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "clientControlIcon"));

            // line 776
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 777
            echo "    ";
            ob_start();
            // line 778
            $context["labelInIcon"] = ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "labelInIcon", [], "any", true, true, false, 778)) ? (twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 778, $this->source); })()), "labelInIcon", [], "any", false, false, false, 778)) : (true));
            // line 779
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "iCss", [], "any", true, true, false, 779)) {
                // line 780
                echo "<span class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 780, $this->source); })()), "iCss", [], "any", false, false, false, 780), "html", null, true);
                echo "\" aria-hidden=\"true\">";
                // line 781
                if ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "label", [], "any", true, true, false, 781) && (isset($context["labelInIcon"]) || array_key_exists("labelInIcon", $context) ? $context["labelInIcon"] : (function () { throw new RuntimeError('Variable "labelInIcon" does not exist.', 781, $this->source); })()))) {
                    // line 782
                    echo "<span class=\"sr-only\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 782, $this->source); })()), "label", [], "any", false, false, false, 782), "html", null, true);
                    echo "</span>";
                }
                // line 784
                echo "</span>";
            }
            $___internal_parse_27_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 777
            echo twig_spaceless($___internal_parse_27_);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 807
    public function macro_clientBtn($__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "clientBtn"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "clientBtn"));

            // line 808
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 809
            echo "    ";
            $context["parameters"] = twig_array_merge((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 809, $this->source); })()), ["class" => ((((twig_get_attribute($this->env, $this->source,             // line 810
($context["parameters"] ?? null), "class", [], "any", true, true, false, 810)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "class", [], "any", false, false, false, 810), "")) : ("")) . " ") . ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "btnCss", [], "any", true, true, false, 810)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "btnCss", [], "any", false, false, false, 810), "btn")) : ("btn")))]);
            // line 812
            echo "    ";
            ob_start();
            // line 813
            echo "        <button";
            echo twig_call_macro($macros["UIMacro"], "macro_clientControlAttrs", [(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 813, $this->source); })())], 813, $context, $this->getSourceContext());
            // line 814
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "title", [], "any", true, true, false, 814)) {
                // line 815
                echo "                title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 815, $this->source); })()), "title", [], "any", false, false, false, 815), "html", null, true);
                echo "\"
            ";
            }
            // line 816
            echo ">";
            // line 817
            echo twig_call_macro($macros["UIMacro"], "macro_clientControlIcon", [(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 817, $this->source); })())], 817, $context, $this->getSourceContext());
            // line 818
            ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "label", [], "any", true, true, false, 818)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 818, $this->source); })()), "label", [], "any", false, false, false, 818), "html", null, true))) : (print ("")));
            // line 819
            echo "</button>
    ";
            $___internal_parse_28_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 812
            echo twig_spaceless($___internal_parse_28_);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 826
    public function macro_renderPageComponentAttributes($__pageComponent__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "pageComponent" => $__pageComponent__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderPageComponentAttributes"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderPageComponentAttributes"));

            // line 827
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pageComponent"]) || array_key_exists("pageComponent", $context) ? $context["pageComponent"] : (function () { throw new RuntimeError('Variable "pageComponent" does not exist.', 827, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 828
                echo "        ";
                if (($context["key"] == "layout")) {
                    // line 829
                    echo "            data-layout=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pageComponent"]) || array_key_exists("pageComponent", $context) ? $context["pageComponent"] : (function () { throw new RuntimeError('Variable "pageComponent" does not exist.', 829, $this->source); })()), "layout", [], "any", false, false, false, 829), "html", null, true);
                    echo "\"
        ";
                } elseif (twig_test_iterable(                // line 830
$context["value"])) {
                    // line 831
                    echo "            data-page-component-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, json_encode($context["value"]), "html", null, true);
                    echo "\"
        ";
                } else {
                    // line 833
                    echo "            data-page-component-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\"
        ";
                }
                // line 835
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 843
    public function macro_renderWidgetAttributes($__options__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderWidgetAttributes"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderWidgetAttributes"));

            // line 844
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 845
            echo "
    ";
            // line 846
            $context["pageComponent"] = ["module" => "oroui/js/app/components/widget-component", "options" =>             // line 848
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 848, $this->source); })())];
            // line 850
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "options", [], "any", false, true, false, 850), "pageComponentName", [], "any", true, true, false, 850)) {
                // line 851
                echo "        ";
                $context["pageComponent"] = twig_array_merge((isset($context["pageComponent"]) || array_key_exists("pageComponent", $context) ? $context["pageComponent"] : (function () { throw new RuntimeError('Variable "pageComponent" does not exist.', 851, $this->source); })()), ["name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 851, $this->source); })()), "options", [], "any", false, false, false, 851), "pageComponentName", [], "any", false, false, false, 851)]);
                // line 852
                echo "    ";
            }
            // line 853
            echo "    ";
            echo twig_call_macro($macros["UIMacro"], "macro_renderPageComponentAttributes", [(isset($context["pageComponent"]) || array_key_exists("pageComponent", $context) ? $context["pageComponent"] : (function () { throw new RuntimeError('Variable "pageComponent" does not exist.', 853, $this->source); })())], 853, $context, $this->getSourceContext());
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 859
    public function macro_renderWidgetDataAttributes($__options__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderWidgetDataAttributes"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderWidgetDataAttributes"));

            // line 860
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 861
            echo "
    ";
            // line 862
            if ( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "createOnEvent", [], "any", true, true, false, 862)) {
                // line 863
                echo "        ";
                $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 863, $this->source); })()), ["createOnEvent" => ((twig_get_attribute($this->env, $this->source,                 // line 864
($context["options"] ?? null), "event", [], "any", true, true, false, 864)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "event", [], "any", false, false, false, 864), "click")) : ("click"))]);
                // line 866
                echo "    ";
            }
            // line 867
            echo "    ";
            echo twig_call_macro($macros["UIMacro"], "macro_renderWidgetAttributes", [(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 867, $this->source); })())], 867, $context, $this->getSourceContext());
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 870
    public function macro_renderAttributes($__options__ = null, $__prefix__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "options" => $__options__,
            "prefix" => $__prefix__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderAttributes"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderAttributes"));

            // line 871
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 871, $this->source); })()));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 872
                echo "        ";
                if (twig_test_iterable($context["value"])) {
                    // line 873
                    echo "            ";
                    $context["value"] = json_encode($context["value"], twig_constant("JSON_FORCE_OBJECT"));
                    // line 874
                    echo "        ";
                }
                // line 875
                echo "        data-";
                if ( !twig_test_empty((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 875, $this->source); })()))) {
                    echo twig_escape_filter($this->env, (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 875, $this->source); })()), "html", null, true);
                    echo "-";
                }
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 895
    public function macro_clientButton($__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "clientButton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "clientButton"));

            // line 896
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 897
            echo "
    ";
            // line 899
            echo "        <div class=\"pull-left btn-group icons-holder\">
            ";
            // line 900
            echo twig_call_macro($macros["UIMacro"], "macro_clientLink", [twig_array_merge((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 900, $this->source); })()), ["class" => "btn icons-holder-text", "role" => "button"])], 900, $context, $this->getSourceContext());
            echo "
        </div>
    ";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 923
    public function macro_ajaxButton($__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "ajaxButton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "ajaxButton"));

            // line 924
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 925
            echo "
    <div class=\"pull-left btn-group icons-holder\">
        ";
            // line 927
            echo twig_call_macro($macros["UIMacro"], "macro_ajaxLink", [twig_array_merge((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 927, $this->source); })()), ["class" => "btn icons-holder-text", "role" => "button"])], 927, $context, $this->getSourceContext());
            echo "
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 949
    public function macro_ajaxLink($__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "ajaxLink"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "ajaxLink"));

            // line 950
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 951
            echo "
    ";
            // line 952
            $context["additionalParameters"] = ["pageComponent" => ["module" => "oroui/js/app/components/ajax-button"], "dataAttributes" => ["method" => ((twig_get_attribute($this->env, $this->source,             // line 957
($context["parameters"] ?? null), "dataMethod", [], "any", true, true, false, 957)) ? (twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 957, $this->source); })()), "dataMethod", [], "any", false, false, false, 957)) : ("GET")), "error-message" => ((twig_get_attribute($this->env, $this->source,             // line 958
($context["parameters"] ?? null), "errorMessage", [], "any", true, true, false, 958)) ? (twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 958, $this->source); })()), "errorMessage", [], "any", false, false, false, 958)) : ("oro.ui.unexpected_error"))]];
            // line 961
            echo "
    ";
            // line 962
            echo twig_call_macro($macros["UIMacro"], "macro_clientLink", [twig_array_merge((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 962, $this->source); })()), (isset($context["additionalParameters"]) || array_key_exists("additionalParameters", $context) ? $context["additionalParameters"] : (function () { throw new RuntimeError('Variable "additionalParameters" does not exist.', 962, $this->source); })()))], 962, $context, $this->getSourceContext());
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 981
    public function macro_dropdownClientItem($__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dropdownClientItem"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dropdownClientItem"));

            // line 982
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 983
            echo "
    <li>";
            // line 984
            echo twig_call_macro($macros["UIMacro"], "macro_clientLink", [(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 984, $this->source); })())], 984, $context, $this->getSourceContext());
            echo "</li>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 993
    public function macro_saveAndCloseButton($__parametersOrLabel__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parametersOrLabel" => $__parametersOrLabel__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "saveAndCloseButton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "saveAndCloseButton"));

            // line 994
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 995
            echo "
    ";
            // line 996
            $context["defaultParameters"] = ["class" => "btn-success", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save and Close")];
            // line 1000
            echo "
    ";
            // line 1001
            if (twig_test_iterable((isset($context["parametersOrLabel"]) || array_key_exists("parametersOrLabel", $context) ? $context["parametersOrLabel"] : (function () { throw new RuntimeError('Variable "parametersOrLabel" does not exist.', 1001, $this->source); })()))) {
                // line 1002
                echo "        ";
                $context["parameters"] = (isset($context["parametersOrLabel"]) || array_key_exists("parametersOrLabel", $context) ? $context["parametersOrLabel"] : (function () { throw new RuntimeError('Variable "parametersOrLabel" does not exist.', 1002, $this->source); })());
                // line 1003
                echo "    ";
            } else {
                // line 1004
                echo "        ";
                // line 1005
                echo "        ";
                $context["parameters"] = ["label" => ((                // line 1006
array_key_exists("parametersOrLabel", $context)) ? (_twig_default_filter((isset($context["parametersOrLabel"]) || array_key_exists("parametersOrLabel", $context) ? $context["parametersOrLabel"] : (function () { throw new RuntimeError('Variable "parametersOrLabel" does not exist.', 1006, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save and Close"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save and Close"))), "action" => "save_and_close"];
                // line 1009
                echo "    ";
            }
            // line 1010
            echo "
    ";
            // line 1011
            $context["parameters"] = twig_array_merge((isset($context["defaultParameters"]) || array_key_exists("defaultParameters", $context) ? $context["defaultParameters"] : (function () { throw new RuntimeError('Variable "defaultParameters" does not exist.', 1011, $this->source); })()), (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 1011, $this->source); })()));
            // line 1012
            echo "
    ";
            // line 1013
            echo twig_call_macro($macros["UIMacro"], "macro_saveActionButton", [(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 1013, $this->source); })())], 1013, $context, $this->getSourceContext());
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 1022
    public function macro_saveAndStayButton($__parametersOrLabel__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parametersOrLabel" => $__parametersOrLabel__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "saveAndStayButton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "saveAndStayButton"));

            // line 1023
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 1024
            echo "
    ";
            // line 1025
            if (twig_test_iterable((isset($context["parametersOrLabel"]) || array_key_exists("parametersOrLabel", $context) ? $context["parametersOrLabel"] : (function () { throw new RuntimeError('Variable "parametersOrLabel" does not exist.', 1025, $this->source); })()))) {
                // line 1026
                echo "        ";
                $context["parameters"] = (isset($context["parametersOrLabel"]) || array_key_exists("parametersOrLabel", $context) ? $context["parametersOrLabel"] : (function () { throw new RuntimeError('Variable "parametersOrLabel" does not exist.', 1026, $this->source); })());
                // line 1027
                echo "    ";
            } else {
                // line 1028
                echo "        ";
                // line 1029
                echo "        ";
                $context["parameters"] = ["label" => ((                // line 1030
array_key_exists("parametersOrLabel", $context)) ? (_twig_default_filter((isset($context["parametersOrLabel"]) || array_key_exists("parametersOrLabel", $context) ? $context["parametersOrLabel"] : (function () { throw new RuntimeError('Variable "parametersOrLabel" does not exist.', 1030, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"))), "action" => "save_and_stay"];
                // line 1033
                echo "    ";
            }
            // line 1034
            echo "
    ";
            // line 1035
            echo twig_call_macro($macros["UIMacro"], "macro_saveActionButton", [(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 1035, $this->source); })())], 1035, $context, $this->getSourceContext());
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 1042
    public function macro_saveAndNewButton($__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "saveAndNewButton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "saveAndNewButton"));

            // line 1043
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 1044
            echo "
    ";
            // line 1045
            $context["defaultParameters"] = ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save and New")];
            // line 1048
            echo "
    ";
            // line 1049
            $context["parameters"] = twig_array_merge((isset($context["defaultParameters"]) || array_key_exists("defaultParameters", $context) ? $context["defaultParameters"] : (function () { throw new RuntimeError('Variable "defaultParameters" does not exist.', 1049, $this->source); })()), (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 1049, $this->source); })()));
            // line 1050
            echo "
    ";
            // line 1051
            echo twig_call_macro($macros["UIMacro"], "macro_saveActionButton", [(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 1051, $this->source); })())], 1051, $context, $this->getSourceContext());
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 1071
    public function macro_saveActionButton($__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "saveActionButton"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "saveActionButton"));

            // line 1072
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 1073
            echo "
    ";
            // line 1074
            $context["defaultParameters"] = ["type" => "submit", "class" => "btn-success main-group", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save")];
            // line 1079
            echo "
    ";
            // line 1080
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "action", [], "any", true, true, false, 1080)) {
                // line 1081
                echo "        ";
                // line 1082
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "route", [], "any", true, true, false, 1082)) {
                // line 1083
                echo "        ";
                // line 1084
                echo "        ";
                $context["action"] = ["route" => twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 1084, $this->source); })()), "route", [], "any", false, false, false, 1084)];
                // line 1085
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "params", [], "any", true, true, false, 1085)) {
                    // line 1086
                    echo "            ";
                    $context["action"] = twig_array_merge((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 1086, $this->source); })()), ["params" => twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 1086, $this->source); })()), "params", [], "any", false, false, false, 1086)]);
                    // line 1087
                    echo "        ";
                }
                // line 1088
                echo "        ";
                $context["parameters"] = twig_array_merge((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 1088, $this->source); })()), ["action" => json_encode((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 1088, $this->source); })()))]);
                // line 1089
                echo "    ";
            }
            // line 1090
            echo "
    ";
            // line 1091
            $context["parameters"] = twig_array_merge((isset($context["defaultParameters"]) || array_key_exists("defaultParameters", $context) ? $context["defaultParameters"] : (function () { throw new RuntimeError('Variable "defaultParameters" does not exist.', 1091, $this->source); })()), (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 1091, $this->source); })()));
            // line 1092
            echo "
    ";
            // line 1093
            echo twig_call_macro($macros["UIMacro"], "macro_buttonType", [(isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 1093, $this->source); })())], 1093, $context, $this->getSourceContext());
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 1106
    public function macro_buttonType($__parameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "buttonType"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "buttonType"));

            // line 1107
            echo "    ";
            $context["defaultParameters"] = ["type" => "button"];
            // line 1110
            echo "    ";
            $context["parameters"] = twig_array_merge((isset($context["defaultParameters"]) || array_key_exists("defaultParameters", $context) ? $context["defaultParameters"] : (function () { throw new RuntimeError('Variable "defaultParameters" does not exist.', 1110, $this->source); })()), (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 1110, $this->source); })()));
            // line 1111
            echo "    <div class=\"btn-group\">
        <button type=\"";
            // line 1112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 1112, $this->source); })()), "type", [], "any", false, false, false, 1112), "html", null, true);
            echo "\" class=\"btn ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "class", [], "any", true, true, false, 1112)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 1112, $this->source); })()), "class", [], "any", false, false, false, 1112), "html", null, true);
            }
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "action", [], "any", true, true, false, 1112)) {
                echo " action-button";
            }
            echo "\"
                ";
            // line 1113
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "action", [], "any", true, true, false, 1113)) {
                echo "data-action=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 1113, $this->source); })()), "action", [], "any", false, false, false, 1113), "html", null, true);
                echo "\"";
            }
            // line 1114
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "data", [], "any", true, true, false, 1114)) {
                // line 1115
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 1115, $this->source); })()), "data", [], "any", false, false, false, 1115));
                foreach ($context['_seq'] as $context["dataItemName"] => $context["dataItemValue"]) {
                    // line 1116
                    echo "                        data-";
                    echo twig_escape_filter($this->env, $context["dataItemName"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["dataItemValue"], "html_attr");
                    echo "\"
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['dataItemName'], $context['dataItemValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1118
                echo "                ";
            }
            echo ">
            ";
            // line 1119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 1119, $this->source); })()), "label", [], "any", false, false, false, 1119), "html", null, true);
            echo "
        </button>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 1127
    public function macro_buttonSeparator(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "buttonSeparator"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "buttonSeparator"));

            // line 1128
            echo "    <div class=\"pull-left\" aria-hidden=\"true\">
        <div class=\"separator-btn\"></div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 1142
    public function macro_scrollSubblock($__title__ = null, $__data__ = null, $__isForm__ = null, $__useSpan__ = null, $__spanClass__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "data" => $__data__,
            "isForm" => $__isForm__,
            "useSpan" => $__useSpan__,
            "spanClass" => $__spanClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "scrollSubblock"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "scrollSubblock"));

            // line 1143
            echo "    ";
            $context["spanClass"] = ((array_key_exists("spanClass", $context)) ? (_twig_default_filter((isset($context["spanClass"]) || array_key_exists("spanClass", $context) ? $context["spanClass"] : (function () { throw new RuntimeError('Variable "spanClass" does not exist.', 1143, $this->source); })()), "responsive-cell")) : ("responsive-cell"));
            // line 1144
            echo "    ";
            // line 1152
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["spanClass"]) || array_key_exists("spanClass", $context) ? $context["spanClass"] : (function () { throw new RuntimeError('Variable "spanClass" does not exist.', 1152, $this->source); })()), "html", null, true);
            echo "\">
    ";
            // line 1153
            if (twig_length_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 1153, $this->source); })()))) {
                echo "<h5 class=\"user-fieldset\"><span>";
                echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 1153, $this->source); })()), "html", null, true);
                echo "</span></h5>";
            }
            // line 1154
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1154, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dataBlock"]) {
                // line 1155
                echo "        ";
                echo $context["dataBlock"];
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dataBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1157
            echo "    </div>
    ";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 1177
    public function macro_scrollBlock($__blockId__ = null, $__title__ = null, $__subblocks__ = null, $__isForm__ = null, $__contentAttributes__ = null, $__useSubBlockDivider__ = null, $__headerLinkContent__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "blockId" => $__blockId__,
            "title" => $__title__,
            "subblocks" => $__subblocks__,
            "isForm" => $__isForm__,
            "contentAttributes" => $__contentAttributes__,
            "useSubBlockDivider" => $__useSubBlockDivider__,
            "headerLinkContent" => $__headerLinkContent__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "scrollBlock"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "scrollBlock"));

            // line 1178
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 1179
            echo "
    ";
            // line 1180
            $context["cols"] = twig_length_filter($this->env, (isset($context["subblocks"]) || array_key_exists("subblocks", $context) ? $context["subblocks"] : (function () { throw new RuntimeError('Variable "subblocks" does not exist.', 1180, $this->source); })()));
            // line 1181
            echo "    <div class=\"responsive-section\">
        <h4 class=\"scrollspy-title\">";
            // line 1182
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 1182, $this->source); })()), "html", null, true);
            if (array_key_exists("headerLinkContent", $context)) {
                echo twig_escape_filter($this->env, (isset($context["headerLinkContent"]) || array_key_exists("headerLinkContent", $context) ? $context["headerLinkContent"] : (function () { throw new RuntimeError('Variable "headerLinkContent" does not exist.', 1182, $this->source); })()), "html", null, true);
            }
            echo "</h4>
        <div id=\"";
            // line 1183
            echo twig_escape_filter($this->env, (isset($context["blockId"]) || array_key_exists("blockId", $context) ? $context["blockId"] : (function () { throw new RuntimeError('Variable "blockId" does not exist.', 1183, $this->source); })()), "html", null, true);
            echo "\" class=\"scrollspy-nav-target\"></div>
        <div class=\"section-content\">
            <div class=\"row-fluid";
            // line 1185
            if (((array_key_exists("contentAttributes", $context) && twig_get_attribute($this->env, $this->source, ($context["contentAttributes"] ?? null), "class", [], "any", true, true, false, 1185)) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contentAttributes"]) || array_key_exists("contentAttributes", $context) ? $context["contentAttributes"] : (function () { throw new RuntimeError('Variable "contentAttributes" does not exist.', 1185, $this->source); })()), "class", [], "any", false, false, false, 1185)))) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contentAttributes"]) || array_key_exists("contentAttributes", $context) ? $context["contentAttributes"] : (function () { throw new RuntimeError('Variable "contentAttributes" does not exist.', 1185, $this->source); })()), "class", [], "any", false, false, false, 1185), "html", null, true);
            }
            if ((((isset($context["cols"]) || array_key_exists("cols", $context) ? $context["cols"] : (function () { throw new RuntimeError('Variable "cols" does not exist.', 1185, $this->source); })()) > 1) && ( !array_key_exists("useSubBlockDivider", $context) || ((isset($context["useSubBlockDivider"]) || array_key_exists("useSubBlockDivider", $context) ? $context["useSubBlockDivider"] : (function () { throw new RuntimeError('Variable "useSubBlockDivider" does not exist.', 1185, $this->source); })()) == true)))) {
                echo " row-fluid-divider";
            }
            echo "\" ";
            echo twig_call_macro($macros["UIMacro"], "macro_attributes", [(isset($context["contentAttributes"]) || array_key_exists("contentAttributes", $context) ? $context["contentAttributes"] : (function () { throw new RuntimeError('Variable "contentAttributes" does not exist.', 1185, $this->source); })()), [0 => "class"]], 1185, $context, $this->getSourceContext());
            echo ">
                ";
            // line 1186
            if ((array_key_exists("isForm", $context) && ((isset($context["isForm"]) || array_key_exists("isForm", $context) ? $context["isForm"] : (function () { throw new RuntimeError('Variable "isForm" does not exist.', 1186, $this->source); })()) == true))) {
                // line 1187
                echo "                    <fieldset class=\"form-horizontal\">
                ";
            } else {
                // line 1189
                echo "                    <div class=\"form-horizontal\">
                ";
            }
            // line 1191
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subblocks"]) || array_key_exists("subblocks", $context) ? $context["subblocks"] : (function () { throw new RuntimeError('Variable "subblocks" does not exist.', 1191, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["subblock"]) {
                // line 1192
                echo "                        ";
                echo twig_call_macro($macros["UIMacro"], "macro_scrollSubblock", [(((twig_get_attribute($this->env, $this->source, $context["subblock"], "title", [], "any", true, true, false, 1192) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subblock"], "title", [], "any", false, false, false, 1192)))) ? (twig_get_attribute($this->env, $this->source, $context["subblock"], "title", [], "any", false, false, false, 1192)) : (null)), twig_get_attribute($this->env, $this->source, $context["subblock"], "data", [], "any", false, false, false, 1192), (isset($context["isForm"]) || array_key_exists("isForm", $context) ? $context["isForm"] : (function () { throw new RuntimeError('Variable "isForm" does not exist.', 1192, $this->source); })()), ((twig_get_attribute($this->env, $this->source, $context["subblock"], "useSpan", [], "any", true, true, false, 1192)) ? (twig_get_attribute($this->env, $this->source, $context["subblock"], "useSpan", [], "any", false, false, false, 1192)) : (true)), ((twig_get_attribute($this->env, $this->source, $context["subblock"], "spanClass", [], "any", true, true, false, 1192)) ? (twig_get_attribute($this->env, $this->source, $context["subblock"], "spanClass", [], "any", false, false, false, 1192)) : (""))], 1192, $context, $this->getSourceContext());
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subblock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1194
            echo "                ";
            if ((array_key_exists("isForm", $context) && ((isset($context["isForm"]) || array_key_exists("isForm", $context) ? $context["isForm"] : (function () { throw new RuntimeError('Variable "isForm" does not exist.', 1194, $this->source); })()) == true))) {
                // line 1195
                echo "                    </fieldset>
                ";
            } else {
                // line 1197
                echo "                    </div>
                ";
            }
            // line 1199
            echo "            </div>
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

    // line 1228
    public function macro_scrollData($__dataTarget__ = null, $__data__ = null, $__entity__ = null, $__form__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "dataTarget" => $__dataTarget__,
            "data" => $__data__,
            "entity" => $__entity__,
            "form" => $__form__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "scrollData"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "scrollData"));

            // line 1229
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 1230
            echo "
    ";
            // line 1231
            $context["data"] = $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->scrollDataBefore($this->env, (isset($context["dataTarget"]) || array_key_exists("dataTarget", $context) ? $context["dataTarget"] : (function () { throw new RuntimeError('Variable "dataTarget" does not exist.', 1231, $this->source); })()), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1231, $this->source); })()), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 1231, $this->source); })()), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1231, $this->source); })()));
            // line 1232
            echo "
    ";
            // line 1233
            if ((array_key_exists("form", $context) && (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1233, $this->source); })()))) {
                // line 1234
                echo "        ";
                $context["isForm"] = true;
                // line 1235
                echo "    ";
            } else {
                // line 1236
                echo "        ";
                $context["isForm"] = false;
                // line 1237
                echo "    ";
            }
            // line 1238
            echo "
    ";
            // line 1239
            $context["dataBlocks"] = $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->sortBy(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1239, $this->source); })()), "dataBlocks", [], "any", false, false, false, 1239));
            // line 1240
            echo "
    ";
            // line 1241
            if ( !$this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) {
                // line 1242
                echo "        <div id=\"";
                echo twig_escape_filter($this->env, (isset($context["dataTarget"]) || array_key_exists("dataTarget", $context) ? $context["dataTarget"] : (function () { throw new RuntimeError('Variable "dataTarget" does not exist.', 1242, $this->source); })()), "html", null, true);
                echo "\" class=\"navbar navbar-static scrollspy-nav\">
            <nav class=\"nav\">
                ";
                // line 1244
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 1244, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["navElement"]) {
                    // line 1245
                    echo "                    <a class=\"nav-link";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 1245)) {
                        echo " active ";
                    }
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["navElement"], "class", [], "any", true, true, false, 1245)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navElement"], "class", [], "any", false, false, false, 1245), "")) : ("")), "html", null, true);
                    echo "\"
                       href=\"#scroll-";
                    // line 1246
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 1246), "html", null, true);
                    echo "\"
                    >";
                    // line 1247
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["navElement"], "title", [], "any", false, false, false, 1247), "html", null, true);
                    echo "</a>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navElement'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1249
                echo "            </nav>
        </div>
    ";
            }
            // line 1252
            echo "    <div class=\"scrollspy-main-container clearfix\">
        ";
            // line 1253
            if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "formErrors", [], "any", true, true, false, 1253) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1253, $this->source); })()), "formErrors", [], "any", false, false, false, 1253)))) {
                // line 1254
                echo "            <div class=\"customer-info-actions container-fluid well-small alert-wrap\" role=\"alert\">
                <div class=\"alert alert-error alert-dismissible\">
                    <button class=\"close\" type=\"button\" data-dismiss=\"alert\" data-target=\".alert-wrap\" aria-label=\"";
                // line 1256
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
                echo "\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    ";
                // line 1259
                echo twig_nl2br(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1259, $this->source); })()), "formErrors", [], "any", false, false, false, 1259));
                echo "
                </div>
            </div>
        ";
            }
            // line 1263
            echo "        <div data-spy=\"scroll\" data-target=\"#";
            echo twig_escape_filter($this->env, (isset($context["dataTarget"]) || array_key_exists("dataTarget", $context) ? $context["dataTarget"] : (function () { throw new RuntimeError('Variable "dataTarget" does not exist.', 1263, $this->source); })()), "html", null, true);
            echo "\" data-offset=\"1\" class=\"scrollspy scrollable-container";
            if ((isset($context["isForm"]) || array_key_exists("isForm", $context) ? $context["isForm"] : (function () { throw new RuntimeError('Variable "isForm" does not exist.', 1263, $this->source); })())) {
                echo " form-container";
            }
            echo "\">
            <div class=\"container-fluid\">
            ";
            // line 1265
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 1265, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["scrollBlock"]) {
                // line 1266
                echo "                ";
                echo twig_call_macro($macros["UIMacro"], "macro_scrollBlock", [("scroll-" . twig_get_attribute($this->env, $this->source,                 // line 1267
$context["loop"], "index", [], "any", false, false, false, 1267)), twig_get_attribute($this->env, $this->source,                 // line 1268
$context["scrollBlock"], "title", [], "any", false, false, false, 1268), twig_get_attribute($this->env, $this->source,                 // line 1269
$context["scrollBlock"], "subblocks", [], "any", false, false, false, 1269),                 // line 1270
(isset($context["isForm"]) || array_key_exists("isForm", $context) ? $context["isForm"] : (function () { throw new RuntimeError('Variable "isForm" does not exist.', 1270, $this->source); })()), ((twig_get_attribute($this->env, $this->source,                 // line 1271
$context["scrollBlock"], "content_attr", [], "any", true, true, false, 1271)) ? (twig_get_attribute($this->env, $this->source, $context["scrollBlock"], "content_attr", [], "any", false, false, false, 1271)) : (null)), ((twig_get_attribute($this->env, $this->source,                 // line 1272
$context["scrollBlock"], "useSubBlockDivider", [], "any", true, true, false, 1272)) ? (twig_get_attribute($this->env, $this->source, $context["scrollBlock"], "useSubBlockDivider", [], "any", false, false, false, 1272)) : (true)), ((twig_get_attribute($this->env, $this->source,                 // line 1273
$context["scrollBlock"], "headerLinkContent", [], "any", true, true, false, 1273)) ? (twig_get_attribute($this->env, $this->source, $context["scrollBlock"], "headerLinkContent", [], "any", false, false, false, 1273)) : (null))], 1266, $context, $this->getSourceContext());
                // line 1274
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scrollBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1276
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "hiddenData", [], "any", true, true, false, 1276) || (isset($context["isForm"]) || array_key_exists("isForm", $context) ? $context["isForm"] : (function () { throw new RuntimeError('Variable "isForm" does not exist.', 1276, $this->source); })()))) {
                // line 1277
                echo "                <div class=\"hide\" data-skip-input-widgets data-layout=\"separate\">
                    ";
                // line 1278
                if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "hiddenData", [], "any", true, true, false, 1278)) {
                    // line 1279
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1279, $this->source); })()), "hiddenData", [], "any", false, false, false, 1279);
                    echo "
                    ";
                }
                // line 1281
                echo "                    ";
                if ((isset($context["isForm"]) || array_key_exists("isForm", $context) ? $context["isForm"] : (function () { throw new RuntimeError('Variable "isForm" does not exist.', 1281, $this->source); })())) {
                    // line 1282
                    echo "                        ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1282, $this->source); })()), 'rest');
                    echo "
                    ";
                }
                // line 1284
                echo "                </div>
            ";
            }
            // line 1286
            echo "            </div>
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

    // line 1297
    public function macro_attributes($__attr__ = null, $__excludes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "attr" => $__attr__,
            "excludes" => $__excludes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "attributes"));

            // line 1298
            echo "    ";
            ob_start();
            // line 1299
            echo "        ";
            $context["attr"] = ((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1299, $this->source); })()), [])) : ([]));
            // line 1300
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1300, $this->source); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                // line 1301
                echo "            ";
                if (( !array_key_exists("excludes", $context) ||  !twig_get_attribute($this->env, $this->source, ($context["excludes"] ?? null), $context["attrname"], [], "array", true, true, false, 1301))) {
                    // line 1302
                    echo "                ";
                    if ((twig_in_filter($context["attrname"], [0 => "placeholder", 1 => "title"]) && array_key_exists("translation_domain", $context))) {
                        // line 1303
                        echo "                    ";
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["attrvalue"], [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 1303, $this->source); })())), "html", null, true);
                        echo "\"
                ";
                    } else {
                        // line 1305
                        echo "                    ";
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, ((twig_test_iterable($context["attrvalue"])) ? (json_encode($context["attrvalue"])) : ($context["attrvalue"])), "html", null, true);
                        echo "\"
                ";
                    }
                    // line 1307
                    echo "            ";
                }
                // line 1308
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1309
            echo "    ";
            $___internal_parse_29_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1298
            echo twig_spaceless($___internal_parse_29_);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 1318
    public function macro_entityOwnerLink($__entity__ = null, $__renderLabel__ = true, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "renderLabel" => $__renderLabel__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "entityOwnerLink"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "entityOwnerLink"));

            // line 1319
            $macros["UIMacro"] = $this;
            // line 1320
            echo "
    ";
            // line 1321
            ob_start();
            // line 1322
            if ((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 1322, $this->source); })())) {
                // line 1323
                echo "            ";
                $context["ownerType"] = $this->extensions['Oro\Bundle\OrganizationBundle\Twig\OrganizationExtension']->getOwnerType((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 1323, $this->source); })()));
                // line 1324
                if ((isset($context["ownerType"]) || array_key_exists("ownerType", $context) ? $context["ownerType"] : (function () { throw new RuntimeError('Variable "ownerType" does not exist.', 1324, $this->source); })())) {
                    // line 1325
                    echo "                ";
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 1325, $this->source); })()), $this->extensions['Oro\Bundle\OrganizationBundle\Twig\OrganizationExtension']->getOwnerFieldName((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 1325, $this->source); })())))) {
                        // line 1326
                        echo "                    ";
                        $context["owner"] = $this->extensions['Oro\Bundle\OrganizationBundle\Twig\OrganizationExtension']->getEntityOwner((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 1326, $this->source); })()));
                        // line 1327
                        echo "                    ";
                        if ((isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 1327, $this->source); })())) {
                            // line 1328
                            echo "                        ";
                            if (((isset($context["ownerType"]) || array_key_exists("ownerType", $context) ? $context["ownerType"] : (function () { throw new RuntimeError('Variable "ownerType" does not exist.', 1328, $this->source); })()) == "USER")) {
                                // line 1329
                                echo "                            ";
                                $context["ownerPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_view", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 1329, $this->source); })()), "id", [], "any", false, false, false, 1329)]);
                                // line 1330
                                echo "                            ";
                                $context["ownerName"] = $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName((isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 1330, $this->source); })()));
                                // line 1331
                                echo "                        ";
                            } elseif (((isset($context["ownerType"]) || array_key_exists("ownerType", $context) ? $context["ownerType"] : (function () { throw new RuntimeError('Variable "ownerType" does not exist.', 1331, $this->source); })()) == "BUSINESS_UNIT")) {
                                // line 1332
                                echo "                            ";
                                $context["ownerPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_business_unit_view", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 1332, $this->source); })()), "id", [], "any", false, false, false, 1332)]);
                                // line 1333
                                echo "                            ";
                                $context["ownerName"] = twig_get_attribute($this->env, $this->source, (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 1333, $this->source); })()), "name", [], "any", false, false, false, 1333);
                                // line 1334
                                echo "                        ";
                            }
                            // line 1335
                            echo "                        ";
                            if (array_key_exists("ownerName", $context)) {
                                // line 1336
                                echo "                            ";
                                if ((isset($context["renderLabel"]) || array_key_exists("renderLabel", $context) ? $context["renderLabel"] : (function () { throw new RuntimeError('Variable "renderLabel" does not exist.', 1336, $this->source); })())) {
                                    // line 1337
                                    echo "                                ";
                                    $context["entityClassName"] = $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 1337, $this->source); })()));
                                    // line 1338
                                    echo "                                ";
                                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getFieldConfigValue(                                    // line 1339
(isset($context["entityClassName"]) || array_key_exists("entityClassName", $context) ? $context["entityClassName"] : (function () { throw new RuntimeError('Variable "entityClassName" does not exist.', 1339, $this->source); })()), $this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassConfigValue(                                    // line 1340
(isset($context["entityClassName"]) || array_key_exists("entityClassName", $context) ? $context["entityClassName"] : (function () { throw new RuntimeError('Variable "entityClassName" does not exist.', 1340, $this->source); })()), "owner_field_name", "ownership"), "label")), "html", null, true);
                                    // line 1343
                                    echo ":
                            ";
                                }
                                // line 1345
                                echo "                            ";
                                if ((array_key_exists("ownerPath", $context) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", (isset($context["owner"]) || array_key_exists("owner", $context) ? $context["owner"] : (function () { throw new RuntimeError('Variable "owner" does not exist.', 1345, $this->source); })())))) {
                                    // line 1346
                                    echo "                                ";
                                    echo twig_call_macro($macros["UIMacro"], "macro_renderUrl", [(isset($context["ownerPath"]) || array_key_exists("ownerPath", $context) ? $context["ownerPath"] : (function () { throw new RuntimeError('Variable "ownerPath" does not exist.', 1346, $this->source); })()), (isset($context["ownerName"]) || array_key_exists("ownerName", $context) ? $context["ownerName"] : (function () { throw new RuntimeError('Variable "ownerName" does not exist.', 1346, $this->source); })())], 1346, $context, $this->getSourceContext());
                                    echo "
                            ";
                                } else {
                                    // line 1348
                                    echo "                                ";
                                    echo twig_escape_filter($this->env, (isset($context["ownerName"]) || array_key_exists("ownerName", $context) ? $context["ownerName"] : (function () { throw new RuntimeError('Variable "ownerName" does not exist.', 1348, $this->source); })()), "html", null, true);
                                    echo "
                            ";
                                }
                                // line 1350
                                echo "                        ";
                            }
                            // line 1351
                            echo "                    ";
                        }
                        // line 1352
                        echo "                ";
                    }
                    // line 1353
                    echo "            ";
                }
            }
            $___internal_parse_30_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1321
            echo twig_spaceless($___internal_parse_30_);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 1358
    public function macro_renderUrl($__url__ = null, $__text__ = null, $__class__ = null, $__title__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "url" => $__url__,
            "text" => $__text__,
            "class" => $__class__,
            "title" => $__title__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderUrl"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderUrl"));

            // line 1359
            ob_start();
            // line 1360
            echo "        ";
            if (twig_test_empty((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 1360, $this->source); })()))) {
                // line 1361
                echo "            ";
                $context["text"] = (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 1361, $this->source); })());
                // line 1362
                echo "        ";
            }
            // line 1363
            echo "        ";
            if (twig_test_empty((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 1363, $this->source); })()))) {
                // line 1364
                echo "            ";
                $context["title"] = (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 1364, $this->source); })());
                // line 1365
                echo "        ";
            }
            // line 1366
            echo "        ";
            if (twig_test_empty((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 1366, $this->source); })()))) {
                // line 1367
                echo "            ";
                $context["class"] = "";
                // line 1368
                echo "        ";
            }
            // line 1369
            echo "        ";
            if ( !twig_test_empty((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 1369, $this->source); })()))) {
                // line 1370
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 1370, $this->source); })()), "html_attr");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 1370, $this->source); })()), "html_attr");
                echo "\" class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 1370, $this->source); })()), "html", null, true);
                echo "\"
            ";
                // line 1371
                if ( !$this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->isUrlLocal((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 1371, $this->source); })()))) {
                    echo " target=\"_blank\"";
                }
                // line 1372
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(((array_key_exists("attributes", $context)) ? (_twig_default_filter((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1372, $this->source); })()), [])) : ([])));
                foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                    // line 1373
                    echo "                ";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\"
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1375
                echo "            >";
                echo twig_escape_filter($this->env, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 1375, $this->source); })()), "html", null, true);
                echo "</a>
        ";
            }
            // line 1377
            echo "    ";
            $___internal_parse_31_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1359
            echo twig_spaceless($___internal_parse_31_);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 1380
    public function macro_renderUrlWithActions($__parameters__ = null, $__entity__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "parameters" => $__parameters__,
            "entity" => $__entity__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderUrlWithActions"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderUrlWithActions"));

            // line 1381
            $macros["UIMacro"] = $this;
            // line 1382
            echo "
    ";
            // line 1383
            $context["url"] = ((twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "url", [], "any", true, true, false, 1383)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "url", [], "any", false, false, false, 1383))) : (""));
            // line 1384
            ob_start();
            // line 1385
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("url_actions", $context)) ? (_twig_default_filter((isset($context["url_actions"]) || array_key_exists("url_actions", $context) ? $context["url_actions"] : (function () { throw new RuntimeError('Variable "url_actions" does not exist.', 1385, $this->source); })()), "url_actions")) : ("url_actions")), ["data" => (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 1385, $this->source); })()), "entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 1385, $this->source); })())]);
            $context["actions"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1387
            $context["actions"] = twig_trim_filter((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 1387, $this->source); })()));
            // line 1388
            echo "    <span class=\"inline-actions-element truncate";
            if (twig_test_empty((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 1388, $this->source); })()))) {
                echo " inline-actions-element_no-actions";
            }
            echo "\">
        <span class=\"inline-actions-element_wrapper\">
            ";
            // line 1390
            echo twig_call_macro($macros["UIMacro"], "macro_renderUrl", [            // line 1391
(isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 1391, $this->source); })()), ((twig_get_attribute($this->env, $this->source,             // line 1392
($context["parameters"] ?? null), "text", [], "any", true, true, false, 1392)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "text", [], "any", false, false, false, 1392))) : ("")), ((twig_get_attribute($this->env, $this->source,             // line 1393
($context["parameters"] ?? null), "class", [], "any", true, true, false, 1393)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "class", [], "any", false, false, false, 1393))) : ("")), ((twig_get_attribute($this->env, $this->source,             // line 1394
($context["parameters"] ?? null), "title", [], "any", true, true, false, 1394)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "title", [], "any", false, false, false, 1394))) : ("")), ((twig_get_attribute($this->env, $this->source,             // line 1395
($context["parameters"] ?? null), "attributes", [], "any", true, true, false, 1395)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["parameters"] ?? null), "attributes", [], "any", false, false, false, 1395))) : (""))], 1390, $context, $this->getSourceContext());
            // line 1396
            echo "
        </span>
        ";
            // line 1398
            if ( !twig_test_empty((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 1398, $this->source); })()))) {
                // line 1399
                echo "<span class=\"inline-actions-element_actions url-actions\">";
                echo (isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 1399, $this->source); })());
                echo "</span>";
            }
            // line 1401
            echo "    </span>";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 1404
    public function macro_renderPhone($__phone__ = null, $__title__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "phone" => $__phone__,
            "title" => $__title__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderPhone"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderPhone"));

            // line 1405
            if (twig_test_empty((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 1405, $this->source); })()))) {
                // line 1406
                echo "        ";
                $context["title"] = (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 1406, $this->source); })());
                // line 1407
                echo "    ";
            }
            // line 1408
            echo "    ";
            if ( !twig_test_empty((isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 1408, $this->source); })()))) {
                // line 1409
                echo "        <a href=\"tel:";
                echo twig_escape_filter($this->env, (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 1409, $this->source); })()), "html_attr");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 1409, $this->source); })()), "html_attr");
                echo "\" class=\"phone\"><bdo dir=\"ltr\">";
                echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 1409, $this->source); })()), "html", null, true);
                echo "</bdo></a>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 1419
    public function macro_renderPhoneWithActions($__phone__ = null, $__entity__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "phone" => $__phone__,
            "entity" => $__entity__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderPhoneWithActions"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderPhoneWithActions"));

            // line 1420
            $macros["UIMacro"] = $this;
            // line 1421
            echo "
    ";
            // line 1422
            if ( !twig_test_empty((isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 1422, $this->source); })()))) {
                // line 1423
                ob_start();
                // line 1424
                echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("phone_actions", $context)) ? (_twig_default_filter((isset($context["phone_actions"]) || array_key_exists("phone_actions", $context) ? $context["phone_actions"] : (function () { throw new RuntimeError('Variable "phone_actions" does not exist.', 1424, $this->source); })()), "phone_actions")) : ("phone_actions")), ["phone" => (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 1424, $this->source); })()), "entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 1424, $this->source); })())]);
                $context["actions"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 1426
                $context["actions"] = twig_trim_filter((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 1426, $this->source); })()));
                // line 1427
                echo "        <span class=\"inline-actions-element";
                if (twig_test_empty((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 1427, $this->source); })()))) {
                    echo " inline-actions-element_no-actions";
                }
                echo "\">
            <span class=\"inline-actions-element_wrapper\">";
                // line 1428
                echo twig_call_macro($macros["UIMacro"], "macro_renderPhone", [(isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 1428, $this->source); })())], 1428, $context, $this->getSourceContext());
                echo "</span>
            ";
                // line 1429
                if ( !twig_test_empty((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 1429, $this->source); })()))) {
                    // line 1430
                    echo "<span class=\"inline-actions-element_actions phone-actions\">";
                    echo (isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 1430, $this->source); })());
                    echo "</span>";
                }
                // line 1432
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

    // line 1436
    public function macro_getApplicableForUnderscore($__str__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "str" => $__str__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "getApplicableForUnderscore"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "getApplicableForUnderscore"));

            // line 1437
            echo "    ";
            echo twig_replace_filter((isset($context["str"]) || array_key_exists("str", $context) ? $context["str"] : (function () { throw new RuntimeError('Variable "str" does not exist.', 1437, $this->source); })()), ["<script" => "<% print(\"<sc\" + \"ript\"); %>", "</script" => "<% print(\"</sc\" + \"ript\"); %>", "<%" => "<% print(\"<\" + \"%\"); %>", "%>" => "<% print(\"%\" + \">\"); %>"]);
            // line 1442
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 1445
    public function macro_renderList($__elements__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "elements" => $__elements__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderList"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderList"));

            // line 1446
            echo "<ul class=\"extra-list\">";
            // line 1447
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new RuntimeError('Variable "elements" does not exist.', 1447, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 1448
                echo "            <li class=\"extra-list-element\">";
                echo twig_escape_filter($this->env, $context["element"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1450
            echo "</ul>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 1453
    public function macro_renderTable($__titles__ = null, $__rows__ = null, $__style__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "titles" => $__titles__,
            "rows" => $__rows__,
            "style" => $__style__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderTable"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderTable"));

            // line 1454
            echo "<table class=\"";
            echo twig_escape_filter($this->env, (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 1454, $this->source); })()), "html", null, true);
            echo "\">
     <thead>
     <tr>";
            // line 1457
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new RuntimeError('Variable "titles" does not exist.', 1457, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
                // line 1458
                echo "        <th>";
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "</th>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1460
            echo "</tr>
     </thead>";
            // line 1462
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 1462, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 1463
                echo "        <tr>";
                // line 1464
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 1465
                    echo "                <td>";
                    echo twig_escape_filter($this->env, $context["element"], "html", null, true);
                    echo "</td>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1467
                echo "</tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1469
            echo "</table>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 1472
    public function macro_entityViewLink($__entity__ = null, $__label__ = null, $__route__ = null, $__permission__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "label" => $__label__,
            "route" => $__route__,
            "permission" => $__permission__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "entityViewLink"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "entityViewLink"));

            // line 1473
            $macros["UIMacro"] = $this;
            // line 1474
            echo "
    ";
            // line 1475
            if ((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 1475, $this->source); })())) {
                // line 1476
                echo "        ";
                if (((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 1476, $this->source); })()) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(((array_key_exists("permission", $context)) ? (_twig_default_filter((isset($context["permission"]) || array_key_exists("permission", $context) ? $context["permission"] : (function () { throw new RuntimeError('Variable "permission" does not exist.', 1476, $this->source); })()), "VIEW")) : ("VIEW")), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 1476, $this->source); })())))) {
                    // line 1477
                    echo "            ";
                    echo twig_call_macro($macros["UIMacro"], "macro_renderUrl", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 1477, $this->source); })()), ["id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 1477, $this->source); })()), "id", [], "any", false, false, false, 1477)]), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 1477, $this->source); })())], 1477, $context, $this->getSourceContext());
                    echo "
        ";
                } else {
                    // line 1479
                    echo "            ";
                    echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 1479, $this->source); })()));
                    echo "
        ";
                }
                // line 1481
                echo "    ";
            } else {
                // line 1482
                echo "        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.empty"), "html", null, true);
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

    // line 1486
    public function macro_entityViewLinks($__entities__ = null, $__labelProperty__ = null, $__route__ = null, $__permission__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entities" => $__entities__,
            "labelProperty" => $__labelProperty__,
            "route" => $__route__,
            "permission" => $__permission__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "entityViewLinks"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "entityViewLinks"));

            // line 1487
            $macros["UIMacro"] = $this;
            // line 1488
            echo "
    ";
            // line 1489
            $context["links"] = [];
            // line 1490
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 1490, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 1491
                echo "        ";
                $context["links"] = twig_array_merge((isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 1491, $this->source); })()), [0 => twig_call_macro($macros["UIMacro"], "macro_entityViewLink", [$context["entity"], twig_get_attribute($this->env, $this->source, $context["entity"], (isset($context["labelProperty"]) || array_key_exists("labelProperty", $context) ? $context["labelProperty"] : (function () { throw new RuntimeError('Variable "labelProperty" does not exist.', 1491, $this->source); })()), [], "any", false, false, false, 1491), (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 1491, $this->source); })()), (isset($context["permission"]) || array_key_exists("permission", $context) ? $context["permission"] : (function () { throw new RuntimeError('Variable "permission" does not exist.', 1491, $this->source); })())], 1491, $context, $this->getSourceContext())]);
                // line 1492
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1493
            echo "    ";
            echo twig_call_macro($macros["UIMacro"], "macro_renderList", [(isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 1493, $this->source); })())], 1493, $context, $this->getSourceContext());
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 1501
    public function macro_renderDisabledLabel($__labelText__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "labelText" => $__labelText__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderDisabledLabel"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderDisabledLabel"));

            // line 1502
            echo "<i>";
            echo twig_escape_filter($this->env, (isset($context["labelText"]) || array_key_exists("labelText", $context) ? $context["labelText"] : (function () { throw new RuntimeError('Variable "labelText" does not exist.', 1502, $this->source); })()), "html", null, true);
            echo "</i>";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 1513
    public function macro_renderEntityViewLabel($__entity__ = null, $__fieldName__ = null, $__entityLabelIfNotGranted__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "entity" => $__entity__,
            "fieldName" => $__fieldName__,
            "entityLabelIfNotGranted" => $__entityLabelIfNotGranted__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderEntityViewLabel"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderEntityViewLabel"));

            // line 1514
            if (( !(null === (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 1514, $this->source); })())) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("VIEW", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 1514, $this->source); })()), (isset($context["fieldName"]) || array_key_exists("fieldName", $context) ? $context["fieldName"] : (function () { throw new RuntimeError('Variable "fieldName" does not exist.', 1514, $this->source); })())))) {
                // line 1515
                echo "        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 1515, $this->source); })()), (isset($context["fieldName"]) || array_key_exists("fieldName", $context) ? $context["fieldName"] : (function () { throw new RuntimeError('Variable "fieldName" does not exist.', 1515, $this->source); })()), [], "any", false, false, false, 1515), "html", null, true);
                echo "
    ";
            } else {
                // line 1517
                echo "        ";
                if ( !(null === (isset($context["entityLabelIfNotGranted"]) || array_key_exists("entityLabelIfNotGranted", $context) ? $context["entityLabelIfNotGranted"] : (function () { throw new RuntimeError('Variable "entityLabelIfNotGranted" does not exist.', 1517, $this->source); })()))) {
                    // line 1518
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("view %entityName%", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["entityLabelIfNotGranted"]) || array_key_exists("entityLabelIfNotGranted", $context) ? $context["entityLabelIfNotGranted"] : (function () { throw new RuntimeError('Variable "entityLabelIfNotGranted" does not exist.', 1518, $this->source); })()))]), "html", null, true);
                    echo "
        ";
                }
                // line 1520
                echo "    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 1523
    public function macro_renderJsTree($__data__ = null, $__actions__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "actions" => $__actions__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderJsTree"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderJsTree"));

            // line 1524
            $this->loadTemplate("@OroUI/macros.html.twig", "@OroUI/macros.html.twig", 1524, "1338725397")->display(twig_array_merge($context, ["data" =>             // line 1525
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1525, $this->source); })()), "actions" =>             // line 1526
(isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 1526, $this->source); })())]));
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 1531
    public function macro_app_logo($__organization_name__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "organization_name" => $__organization_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "app_logo"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "app_logo"));

            // line 1532
            echo "    ";
            $context["organization_name"] = ((array_key_exists("organization_name", $context)) ? (_twig_default_filter((isset($context["organization_name"]) || array_key_exists("organization_name", $context) ? $context["organization_name"] : (function () { throw new RuntimeError('Variable "organization_name" does not exist.', 1532, $this->source); })()), "")) : (""));
            // line 1533
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_default");
            echo "\" class=\"app-logo\" title=\"";
            echo twig_escape_filter($this->env, twig_trim_filter((isset($context["organization_name"]) || array_key_exists("organization_name", $context) ? $context["organization_name"] : (function () { throw new RuntimeError('Variable "organization_name" does not exist.', 1533, $this->source); })())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_trim_filter((isset($context["organization_name"]) || array_key_exists("organization_name", $context) ? $context["organization_name"] : (function () { throw new RuntimeError('Variable "organization_name" does not exist.', 1533, $this->source); })())), "html", null, true);
            echo "</a>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 1536
    public function macro_insertIcon($__classNames__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "classNames" => $__classNames__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "insertIcon"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "insertIcon"));

            // line 1537
            echo "    ";
            $context["classNames"] = ((array_key_exists("classNames", $context)) ? (_twig_default_filter((isset($context["classNames"]) || array_key_exists("classNames", $context) ? $context["classNames"] : (function () { throw new RuntimeError('Variable "classNames" does not exist.', 1537, $this->source); })()), "")) : (""));
            // line 1538
            echo "
    ";
            // line 1539
            if ((isset($context["classNames"]) || array_key_exists("classNames", $context) ? $context["classNames"] : (function () { throw new RuntimeError('Variable "classNames" does not exist.', 1539, $this->source); })())) {
                // line 1540
                echo "        <span class=\"";
                echo twig_escape_filter($this->env, (isset($context["classNames"]) || array_key_exists("classNames", $context) ? $context["classNames"] : (function () { throw new RuntimeError('Variable "classNames" does not exist.', 1540, $this->source); })()), "html", null, true);
                echo "\" aria-hidden=\"true\"></span>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 1556
    public function macro_sortable_list_view($__widget__ = null, $__attr__ = [], $__options__ = [], $__widgetContainerAttributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "widget" => $__widget__,
            "attr" => $__attr__,
            "options" => $__options__,
            "widgetContainerAttributes" => $__widgetContainerAttributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "sortable_list_view"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "sortable_list_view"));

            // line 1557
            echo "    ";
            $macros["UIMacro"] = $this;
            // line 1558
            echo "
    ";
            // line 1559
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["widget"] ?? null), "vars", [], "any", false, true, false, 1559), "prototype", [], "any", true, true, false, 1559)) {
                // line 1560
                echo "        ";
                $context["prototype_html"] = twig_call_macro($macros["UIMacro"], "macro_sortable_list_view_collection_prototype", [(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 1560, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 1560, $this->source); })()), (isset($context["widgetContainerAttributes"]) || array_key_exists("widgetContainerAttributes", $context) ? $context["widgetContainerAttributes"] : (function () { throw new RuntimeError('Variable "widgetContainerAttributes" does not exist.', 1560, $this->source); })())], 1560, $context, $this->getSourceContext());
                // line 1561
                echo "    ";
            }
            // line 1562
            echo "
    ";
            // line 1563
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1563, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1563)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1563, $this->source); })()), "class", [], "any", false, false, false, 1563) . " ")) : ("")) . "oro-item-collection grid-container")]);
            // line 1564
            echo "
    ";
            // line 1565
            $context["id"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 1565, $this->source); })()), "vars", [], "any", false, false, false, 1565), "id", [], "any", false, false, false, 1565) . "_collection");
            // line 1566
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "collection_class", [], "any", true, true, false, 1566)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "collection_class", [], "any", false, false, false, 1566), "")) : ("")), "html", null, true);
            echo " drag-n-drop-sorting-view\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "data_page_component_module", [], "any", true, true, false, 1566)) {
                echo " data-page-component-module=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 1566, $this->source); })()), "data_page_component_module", [], "any", false, false, false, 1566));
                echo "\"";
            }
            echo ">
        <div class=\"drag-n-drop-sorting-view__wrapper row-oro\" ";
            // line 1567
            echo twig_call_macro($macros["UIMacro"], "macro_renderPageComponentAttributes", [["module" => "oroui/js/app/components/view-component", "options" => ["view" => "oroui/js/drag-n-drop-sorting", "autoRender" => true]]], 1567, $context, $this->getSourceContext());
            // line 1573
            echo ">
            ";
            // line 1574
            $context["prototype_name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 1574, $this->source); })()), "vars", [], "any", false, false, false, 1574), "prototype_name", [], "any", false, false, false, 1574);
            // line 1575
            echo "           <div ";
            echo twig_call_macro($macros["UIMacro"], "macro_attributes", [(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1575, $this->source); })())], 1575, $context, $this->getSourceContext());
            echo ">
                <table class=\"grid table-hover table table-bordered\">
                    <thead>
                    <tr>
                        <th class=\"drag-n-drop-sorting-view__column\"><span>";
            // line 1579
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "column_label", [], "any", true, true, false, 1579)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "column_label", [], "any", false, false, false, 1579), "")) : ("")), "html", null, true);
            echo "</span></th>
                        <th class=\"drag-n-drop-sorting-view__column_options\"><span>";
            // line 1580
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "column_options_label", [], "any", true, true, false, 1580)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "column_options_label", [], "any", false, false, false, 1580), "")) : ("")), "html", null, true);
            echo "</span></th>
                        ";
            // line 1581
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mergeAllowed", [], "any", true, true, false, 1581)) {
                // line 1582
                echo "                            <th></th>
                        ";
            }
            // line 1584
            echo "                    </tr>
                    </thead>
                    <tbody class=\"sortable-wrapper\" data-last-index=\"";
            // line 1586
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 1586, $this->source); })()), "children", [], "any", false, false, false, 1586)), "html", null, true);
            echo "\" data-prototype-name=\"";
            echo twig_escape_filter($this->env, (isset($context["prototype_name"]) || array_key_exists("prototype_name", $context) ? $context["prototype_name"] : (function () { throw new RuntimeError('Variable "prototype_name" does not exist.', 1586, $this->source); })()), "html", null, true);
            echo "\"";
            if (array_key_exists("prototype_html", $context)) {
                echo " data-prototype=\"";
                echo twig_escape_filter($this->env, (isset($context["prototype_html"]) || array_key_exists("prototype_html", $context) ? $context["prototype_html"] : (function () { throw new RuntimeError('Variable "prototype_html" does not exist.', 1586, $this->source); })()));
                echo "\"";
            }
            echo ">
                    ";
            // line 1587
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 1587, $this->source); })()), "children", [], "any", false, false, false, 1587))) {
                // line 1588
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 1588, $this->source); })()), "children", [], "any", false, false, false, 1588));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 1589
                    echo "                            ";
                    echo twig_call_macro($macros["UIMacro"], "macro_sortable_list_view_collection_prototype", [$context["child"], (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 1589, $this->source); })()), (isset($context["widgetContainerAttributes"]) || array_key_exists("widgetContainerAttributes", $context) ? $context["widgetContainerAttributes"] : (function () { throw new RuntimeError('Variable "widgetContainerAttributes" does not exist.', 1589, $this->source); })())], 1589, $context, $this->getSourceContext());
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1591
                echo "                    ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "show_form_when_empty", [], "any", true, true, false, 1591) && array_key_exists("prototype_html", $context))) {
                // line 1592
                echo "                        ";
                echo twig_replace_filter((isset($context["prototype_html"]) || array_key_exists("prototype_html", $context) ? $context["prototype_html"] : (function () { throw new RuntimeError('Variable "prototype_html" does not exist.', 1592, $this->source); })()), [(isset($context["prototype_name"]) || array_key_exists("prototype_name", $context) ? $context["prototype_name"] : (function () { throw new RuntimeError('Variable "prototype_name" does not exist.', 1592, $this->source); })()) => "0"]);
                echo "
                    ";
            }
            // line 1594
            echo "                    </tbody>
                </table>
            </div>
            <a class=\"btn add-list-item\" data-container=\".oro-item-collection tbody\" href=\"#\">
                ";
            // line 1598
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_btn_label", [], "any", true, true, false, 1598)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_btn_label", [], "any", false, false, false, 1598), "")) : ("")), "html", null, true);
            echo "
            </a>
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

    // line 1604
    public function macro_sortable_list_view_collection_prototype($__widget__ = null, $__options__ = null, $__widgetContainerAttributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "widget" => $__widget__,
            "options" => $__options__,
            "widgetContainerAttributes" => $__widgetContainerAttributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "sortable_list_view_collection_prototype"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "sortable_list_view_collection_prototype"));

            // line 1605
            echo "    ";
            if (twig_in_filter("collection", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 1605, $this->source); })()), "vars", [], "any", false, false, false, 1605), "block_prefixes", [], "any", false, false, false, 1605))) {
                // line 1606
                echo "        ";
                $context["form"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 1606, $this->source); })()), "vars", [], "any", false, false, false, 1606), "prototype", [], "any", false, false, false, 1606);
                // line 1607
                echo "        ";
                $context["name"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 1607, $this->source); })()), "vars", [], "any", false, false, false, 1607), "full_name", [], "any", false, false, false, 1607) . "[") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 1607, $this->source); })()), "vars", [], "any", false, false, false, 1607), "prototype", [], "any", false, false, false, 1607), "vars", [], "any", false, false, false, 1607), "name", [], "any", false, false, false, 1607)) . "]");
                // line 1608
                echo "    ";
            } else {
                // line 1609
                echo "        ";
                $context["form"] = (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 1609, $this->source); })());
                // line 1610
                echo "        ";
                $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 1610, $this->source); })()), "vars", [], "any", false, false, false, 1610), "full_name", [], "any", false, false, false, 1610);
                // line 1611
                echo "    ";
            }
            // line 1612
            echo "    ";
            ob_start();
            // line 1613
            echo "    <tr data-content=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 1613, $this->source); })()), "html", null, true);
            echo "\" data-validation-optional-group ";
            echo twig_escape_filter($this->env, (isset($context["widgetContainerAttributes"]) || array_key_exists("widgetContainerAttributes", $context) ? $context["widgetContainerAttributes"] : (function () { throw new RuntimeError('Variable "widgetContainerAttributes" does not exist.', 1613, $this->source); })()), "html", null, true);
            echo "
            class=\"";
            // line 1614
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "collection_class", [], "any", true, true, false, 1614)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "collection_class", [], "any", false, false, false, 1614), "")) : ("")), "html", null, true);
            echo "\">
        ";
            // line 1615
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1615, $this->source); })()), 'widget');
            echo "
    </tr>
    ";
            $___internal_parse_32_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1612
            echo twig_spaceless($___internal_parse_32_);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 1620
    public function macro_render_birthday($__birthday__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "birthday" => $__birthday__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_birthday"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_birthday"));

            // line 1621
            echo "    ";
            if ( !twig_test_empty((isset($context["birthday"]) || array_key_exists("birthday", $context) ? $context["birthday"] : (function () { throw new RuntimeError('Variable "birthday" does not exist.', 1621, $this->source); })()))) {
                // line 1622
                echo "        ";
                echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDate((isset($context["birthday"]) || array_key_exists("birthday", $context) ? $context["birthday"] : (function () { throw new RuntimeError('Variable "birthday" does not exist.', 1622, $this->source); })())), "html", null, true);
                echo "
        ";
                // line 1623
                $context["age"] = $this->extensions['Oro\Bundle\UIBundle\Twig\FormatExtension']->getAgeAsString((isset($context["birthday"]) || array_key_exists("birthday", $context) ? $context["birthday"] : (function () { throw new RuntimeError('Variable "birthday" does not exist.', 1623, $this->source); })()));
                // line 1624
                echo "        ";
                (( !twig_test_empty((isset($context["age"]) || array_key_exists("age", $context) ? $context["age"] : (function () { throw new RuntimeError('Variable "age" does not exist.', 1624, $this->source); })()))) ? (print (twig_escape_filter($this->env, (("(" . (isset($context["age"]) || array_key_exists("age", $context) ? $context["age"] : (function () { throw new RuntimeError('Variable "age" does not exist.', 1624, $this->source); })())) . ")"), "html", null, true))) : (print (null)));
                echo "
    ";
            } else {
                // line 1626
                echo "        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
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

    // line 1630
    public function macro_badge($__label__ = null, $__badgeClass__ = "info", $__iconClass__ = "fa-circle", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "badgeClass" => $__badgeClass__,
            "iconClass" => $__iconClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "badge"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "badge"));

            // line 1631
            echo "    <span class=\"badge badge-pill badge-";
            echo twig_escape_filter($this->env, (isset($context["badgeClass"]) || array_key_exists("badgeClass", $context) ? $context["badgeClass"] : (function () { throw new RuntimeError('Variable "badgeClass" does not exist.', 1631, $this->source); })()), "html", null, true);
            echo " status-";
            echo twig_escape_filter($this->env, (isset($context["badgeClass"]) || array_key_exists("badgeClass", $context) ? $context["badgeClass"] : (function () { throw new RuntimeError('Variable "badgeClass" does not exist.', 1631, $this->source); })()), "html", null, true);
            echo "\">
        <i class=\"icon-status-";
            // line 1632
            echo twig_escape_filter($this->env, (isset($context["badgeClass"]) || array_key_exists("badgeClass", $context) ? $context["badgeClass"] : (function () { throw new RuntimeError('Variable "badgeClass" does not exist.', 1632, $this->source); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["iconClass"]) || array_key_exists("iconClass", $context) ? $context["iconClass"] : (function () { throw new RuntimeError('Variable "iconClass" does not exist.', 1632, $this->source); })()), "html", null, true);
            echo "\" aria-hidden=\"true\"></i>";
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 1632, $this->source); })()), "html", null, true);
            echo "
    </span>
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
        return "@OroUI/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4942 => 1632,  4935 => 1631,  4914 => 1630,  4895 => 1626,  4889 => 1624,  4887 => 1623,  4882 => 1622,  4879 => 1621,  4860 => 1620,  4845 => 1612,  4839 => 1615,  4835 => 1614,  4828 => 1613,  4825 => 1612,  4822 => 1611,  4819 => 1610,  4816 => 1609,  4813 => 1608,  4810 => 1607,  4807 => 1606,  4804 => 1605,  4783 => 1604,  4763 => 1598,  4757 => 1594,  4751 => 1592,  4748 => 1591,  4739 => 1589,  4734 => 1588,  4732 => 1587,  4720 => 1586,  4716 => 1584,  4712 => 1582,  4710 => 1581,  4706 => 1580,  4702 => 1579,  4694 => 1575,  4692 => 1574,  4689 => 1573,  4687 => 1567,  4676 => 1566,  4674 => 1565,  4671 => 1564,  4669 => 1563,  4666 => 1562,  4663 => 1561,  4660 => 1560,  4658 => 1559,  4655 => 1558,  4652 => 1557,  4630 => 1556,  4611 => 1540,  4609 => 1539,  4606 => 1538,  4603 => 1537,  4584 => 1536,  4562 => 1533,  4559 => 1532,  4540 => 1531,  4525 => 1526,  4524 => 1525,  4523 => 1524,  4503 => 1523,  4487 => 1520,  4481 => 1518,  4478 => 1517,  4472 => 1515,  4470 => 1514,  4449 => 1513,  4432 => 1502,  4413 => 1501,  4397 => 1493,  4391 => 1492,  4388 => 1491,  4383 => 1490,  4381 => 1489,  4378 => 1488,  4376 => 1487,  4354 => 1486,  4335 => 1482,  4332 => 1481,  4326 => 1479,  4320 => 1477,  4317 => 1476,  4315 => 1475,  4312 => 1474,  4310 => 1473,  4288 => 1472,  4272 => 1469,  4265 => 1467,  4256 => 1465,  4252 => 1464,  4250 => 1463,  4246 => 1462,  4243 => 1460,  4234 => 1458,  4230 => 1457,  4224 => 1454,  4203 => 1453,  4187 => 1450,  4178 => 1448,  4174 => 1447,  4172 => 1446,  4153 => 1445,  4137 => 1442,  4134 => 1437,  4115 => 1436,  4098 => 1432,  4093 => 1430,  4091 => 1429,  4087 => 1428,  4080 => 1427,  4078 => 1426,  4075 => 1424,  4073 => 1423,  4071 => 1422,  4068 => 1421,  4066 => 1420,  4046 => 1419,  4023 => 1409,  4020 => 1408,  4017 => 1407,  4014 => 1406,  4012 => 1405,  3992 => 1404,  3977 => 1401,  3972 => 1399,  3970 => 1398,  3966 => 1396,  3964 => 1395,  3963 => 1394,  3962 => 1393,  3961 => 1392,  3960 => 1391,  3959 => 1390,  3951 => 1388,  3949 => 1387,  3946 => 1385,  3944 => 1384,  3942 => 1383,  3939 => 1382,  3937 => 1381,  3917 => 1380,  3902 => 1359,  3899 => 1377,  3893 => 1375,  3882 => 1373,  3877 => 1372,  3873 => 1371,  3864 => 1370,  3861 => 1369,  3858 => 1368,  3855 => 1367,  3852 => 1366,  3849 => 1365,  3846 => 1364,  3843 => 1363,  3840 => 1362,  3837 => 1361,  3834 => 1360,  3832 => 1359,  3809 => 1358,  3794 => 1321,  3789 => 1353,  3786 => 1352,  3783 => 1351,  3780 => 1350,  3774 => 1348,  3768 => 1346,  3765 => 1345,  3761 => 1343,  3759 => 1340,  3758 => 1339,  3756 => 1338,  3753 => 1337,  3750 => 1336,  3747 => 1335,  3744 => 1334,  3741 => 1333,  3738 => 1332,  3735 => 1331,  3732 => 1330,  3729 => 1329,  3726 => 1328,  3723 => 1327,  3720 => 1326,  3717 => 1325,  3715 => 1324,  3712 => 1323,  3710 => 1322,  3708 => 1321,  3705 => 1320,  3703 => 1319,  3683 => 1318,  3668 => 1298,  3665 => 1309,  3659 => 1308,  3656 => 1307,  3648 => 1305,  3640 => 1303,  3637 => 1302,  3634 => 1301,  3629 => 1300,  3626 => 1299,  3623 => 1298,  3603 => 1297,  3585 => 1286,  3581 => 1284,  3575 => 1282,  3572 => 1281,  3566 => 1279,  3564 => 1278,  3561 => 1277,  3558 => 1276,  3543 => 1274,  3541 => 1273,  3540 => 1272,  3539 => 1271,  3538 => 1270,  3537 => 1269,  3536 => 1268,  3535 => 1267,  3533 => 1266,  3516 => 1265,  3506 => 1263,  3499 => 1259,  3493 => 1256,  3489 => 1254,  3487 => 1253,  3484 => 1252,  3479 => 1249,  3463 => 1247,  3459 => 1246,  3451 => 1245,  3434 => 1244,  3428 => 1242,  3426 => 1241,  3423 => 1240,  3421 => 1239,  3418 => 1238,  3415 => 1237,  3412 => 1236,  3409 => 1235,  3406 => 1234,  3404 => 1233,  3401 => 1232,  3399 => 1231,  3396 => 1230,  3393 => 1229,  3371 => 1228,  3353 => 1199,  3349 => 1197,  3345 => 1195,  3342 => 1194,  3333 => 1192,  3328 => 1191,  3324 => 1189,  3320 => 1187,  3318 => 1186,  3306 => 1185,  3301 => 1183,  3294 => 1182,  3291 => 1181,  3289 => 1180,  3286 => 1179,  3283 => 1178,  3258 => 1177,  3242 => 1157,  3233 => 1155,  3228 => 1154,  3222 => 1153,  3217 => 1152,  3215 => 1144,  3212 => 1143,  3189 => 1142,  3171 => 1128,  3153 => 1127,  3134 => 1119,  3129 => 1118,  3118 => 1116,  3113 => 1115,  3110 => 1114,  3104 => 1113,  3093 => 1112,  3090 => 1111,  3087 => 1110,  3084 => 1107,  3065 => 1106,  3048 => 1093,  3045 => 1092,  3043 => 1091,  3040 => 1090,  3037 => 1089,  3034 => 1088,  3031 => 1087,  3028 => 1086,  3025 => 1085,  3022 => 1084,  3020 => 1083,  3017 => 1082,  3015 => 1081,  3013 => 1080,  3010 => 1079,  3008 => 1074,  3005 => 1073,  3002 => 1072,  2983 => 1071,  2966 => 1051,  2963 => 1050,  2961 => 1049,  2958 => 1048,  2956 => 1045,  2953 => 1044,  2950 => 1043,  2931 => 1042,  2914 => 1035,  2911 => 1034,  2908 => 1033,  2906 => 1030,  2904 => 1029,  2902 => 1028,  2899 => 1027,  2896 => 1026,  2894 => 1025,  2891 => 1024,  2888 => 1023,  2869 => 1022,  2852 => 1013,  2849 => 1012,  2847 => 1011,  2844 => 1010,  2841 => 1009,  2839 => 1006,  2837 => 1005,  2835 => 1004,  2832 => 1003,  2829 => 1002,  2827 => 1001,  2824 => 1000,  2822 => 996,  2819 => 995,  2816 => 994,  2797 => 993,  2780 => 984,  2777 => 983,  2774 => 982,  2755 => 981,  2738 => 962,  2735 => 961,  2733 => 958,  2732 => 957,  2731 => 952,  2728 => 951,  2725 => 950,  2706 => 949,  2688 => 927,  2684 => 925,  2681 => 924,  2662 => 923,  2644 => 900,  2641 => 899,  2638 => 897,  2635 => 896,  2616 => 895,  2588 => 875,  2585 => 874,  2582 => 873,  2579 => 872,  2574 => 871,  2554 => 870,  2536 => 867,  2533 => 866,  2531 => 864,  2529 => 863,  2527 => 862,  2524 => 861,  2521 => 860,  2502 => 859,  2484 => 853,  2481 => 852,  2478 => 851,  2475 => 850,  2473 => 848,  2472 => 846,  2469 => 845,  2466 => 844,  2447 => 843,  2428 => 835,  2420 => 833,  2412 => 831,  2410 => 830,  2405 => 829,  2402 => 828,  2397 => 827,  2378 => 826,  2363 => 812,  2359 => 819,  2357 => 818,  2355 => 817,  2353 => 816,  2347 => 815,  2345 => 814,  2342 => 813,  2339 => 812,  2337 => 810,  2335 => 809,  2332 => 808,  2313 => 807,  2298 => 777,  2294 => 784,  2289 => 782,  2287 => 781,  2283 => 780,  2281 => 779,  2279 => 778,  2276 => 777,  2273 => 776,  2254 => 775,  2238 => 761,  2236 => 760,  2233 => 758,  2231 => 757,  2226 => 755,  2223 => 752,  2222 => 751,  2220 => 750,  2217 => 749,  2214 => 748,  2210 => 746,  2207 => 745,  2201 => 743,  2198 => 742,  2192 => 740,  2189 => 739,  2183 => 737,  2180 => 736,  2174 => 734,  2171 => 733,  2165 => 731,  2162 => 730,  2156 => 728,  2153 => 727,  2147 => 725,  2144 => 724,  2138 => 722,  2135 => 721,  2129 => 719,  2126 => 718,  2120 => 716,  2117 => 715,  2111 => 713,  2108 => 712,  2102 => 710,  2099 => 709,  2093 => 707,  2090 => 706,  2087 => 705,  2068 => 704,  2053 => 670,  2049 => 680,  2047 => 679,  2045 => 678,  2042 => 677,  2037 => 675,  2035 => 674,  2030 => 673,  2028 => 672,  2026 => 671,  2023 => 670,  2021 => 668,  2019 => 667,  2016 => 666,  1997 => 665,  1979 => 643,  1976 => 642,  1970 => 641,  1967 => 640,  1964 => 639,  1959 => 638,  1956 => 637,  1953 => 636,  1950 => 635,  1947 => 634,  1944 => 633,  1941 => 632,  1938 => 631,  1935 => 630,  1933 => 629,  1929 => 627,  1927 => 624,  1926 => 623,  1925 => 622,  1924 => 621,  1923 => 619,  1922 => 618,  1921 => 617,  1919 => 615,  1916 => 614,  1913 => 613,  1911 => 612,  1908 => 611,  1905 => 610,  1903 => 607,  1901 => 606,  1898 => 605,  1895 => 604,  1892 => 603,  1889 => 602,  1887 => 601,  1884 => 600,  1881 => 599,  1862 => 598,  1844 => 594,  1840 => 592,  1838 => 591,  1835 => 590,  1832 => 589,  1829 => 588,  1827 => 587,  1824 => 586,  1821 => 585,  1818 => 584,  1816 => 583,  1813 => 582,  1811 => 581,  1808 => 580,  1805 => 579,  1786 => 578,  1770 => 560,  1768 => 559,  1764 => 557,  1760 => 556,  1755 => 555,  1752 => 554,  1750 => 551,  1748 => 550,  1745 => 549,  1742 => 548,  1739 => 547,  1736 => 546,  1734 => 543,  1732 => 542,  1729 => 541,  1726 => 540,  1723 => 539,  1704 => 538,  1687 => 524,  1684 => 523,  1681 => 522,  1678 => 520,  1676 => 518,  1675 => 517,  1674 => 516,  1673 => 515,  1671 => 514,  1669 => 511,  1667 => 510,  1664 => 509,  1662 => 506,  1660 => 505,  1657 => 504,  1654 => 503,  1651 => 502,  1648 => 501,  1645 => 500,  1642 => 499,  1639 => 498,  1636 => 497,  1633 => 496,  1630 => 495,  1628 => 494,  1625 => 493,  1622 => 492,  1603 => 491,  1585 => 477,  1582 => 476,  1579 => 475,  1577 => 474,  1574 => 473,  1571 => 472,  1551 => 471,  1533 => 462,  1531 => 461,  1529 => 454,  1526 => 453,  1507 => 452,  1488 => 445,  1485 => 444,  1483 => 435,  1477 => 441,  1474 => 440,  1472 => 439,  1471 => 437,  1468 => 436,  1465 => 435,  1463 => 432,  1462 => 431,  1461 => 430,  1459 => 429,  1456 => 428,  1454 => 427,  1451 => 426,  1448 => 425,  1429 => 424,  1411 => 412,  1408 => 411,  1389 => 410,  1372 => 395,  1366 => 393,  1363 => 392,  1360 => 391,  1351 => 389,  1346 => 388,  1344 => 387,  1338 => 386,  1332 => 384,  1326 => 382,  1324 => 381,  1317 => 377,  1314 => 376,  1312 => 375,  1309 => 374,  1306 => 373,  1287 => 372,  1269 => 358,  1265 => 356,  1262 => 355,  1243 => 354,  1228 => 325,  1222 => 338,  1213 => 337,  1207 => 336,  1200 => 335,  1197 => 334,  1186 => 332,  1181 => 331,  1178 => 330,  1172 => 328,  1170 => 327,  1165 => 326,  1162 => 325,  1159 => 324,  1156 => 323,  1152 => 321,  1146 => 319,  1144 => 318,  1139 => 317,  1136 => 316,  1133 => 315,  1130 => 314,  1128 => 313,  1109 => 312,  1091 => 296,  1088 => 295,  1085 => 294,  1083 => 293,  1080 => 292,  1077 => 291,  1056 => 290,  1039 => 280,  1036 => 279,  1033 => 278,  1030 => 277,  1027 => 276,  1024 => 275,  1022 => 274,  1019 => 273,  1016 => 272,  996 => 271,  977 => 260,  973 => 259,  968 => 257,  962 => 255,  960 => 249,  959 => 248,  957 => 247,  954 => 246,  931 => 245,  913 => 233,  911 => 232,  910 => 231,  909 => 229,  908 => 227,  905 => 226,  903 => 225,  898 => 224,  896 => 218,  895 => 217,  893 => 216,  890 => 215,  866 => 214,  847 => 202,  844 => 201,  842 => 200,  839 => 199,  836 => 198,  814 => 197,  797 => 186,  794 => 185,  791 => 184,  769 => 183,  750 => 171,  747 => 170,  745 => 169,  742 => 168,  739 => 167,  716 => 166,  699 => 154,  696 => 153,  693 => 152,  670 => 151,  651 => 137,  646 => 135,  638 => 134,  636 => 133,  634 => 131,  613 => 130,  594 => 119,  591 => 118,  585 => 117,  578 => 116,  565 => 115,  558 => 114,  555 => 113,  553 => 112,  551 => 106,  530 => 105,  512 => 95,  509 => 94,  506 => 93,  497 => 90,  494 => 89,  489 => 88,  487 => 87,  484 => 86,  476 => 84,  470 => 82,  468 => 81,  465 => 80,  463 => 79,  460 => 78,  457 => 77,  436 => 76,  417 => 64,  411 => 63,  407 => 61,  405 => 58,  404 => 57,  401 => 56,  399 => 55,  396 => 54,  394 => 51,  392 => 50,  389 => 49,  386 => 48,  383 => 47,  380 => 46,  377 => 45,  374 => 43,  371 => 42,  368 => 41,  365 => 40,  363 => 39,  361 => 38,  358 => 37,  355 => 36,  352 => 35,  349 => 34,  347 => 33,  344 => 32,  320 => 31,  303 => 27,  298 => 25,  296 => 24,  291 => 22,  286 => 21,  280 => 19,  277 => 18,  269 => 16,  264 => 15,  259 => 14,  257 => 13,  251 => 10,  248 => 9,  245 => 8,  242 => 7,  239 => 6,  236 => 5,  233 => 4,  230 => 3,  227 => 2,  208 => 1,  194 => 1629,  191 => 1619,  188 => 1603,  185 => 1535,  182 => 1435,  179 => 1311,  176 => 1290,  173 => 1203,  170 => 1162,  167 => 1132,  164 => 1123,  160 => 1095,  157 => 1053,  154 => 1037,  151 => 1015,  148 => 986,  145 => 964,  142 => 930,  139 => 904,  136 => 878,  133 => 869,  130 => 837,  127 => 822,  124 => 788,  121 => 764,  118 => 683,  115 => 645,  112 => 597,  109 => 562,  106 => 526,  103 => 479,  100 => 464,  97 => 448,  94 => 414,  91 => 398,  88 => 361,  85 => 342,  82 => 298,  79 => 282,  76 => 264,  73 => 237,  70 => 205,  67 => 188,  64 => 174,  61 => 156,  58 => 141,  55 => 123,  52 => 97,  49 => 68,  46 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro collection_prototype(widget) %}
    {% if 'prototype' in widget.vars|keys %}
        {% set form = widget.vars.prototype %}
        {% set name = widget.vars.prototype.vars.name %}
    {% else %}
        {% set form = widget %}
        {% set name = widget.vars.full_name %}
    {% endif %}

    <div data-content=\"{{ name }}\">
        <div class=\"row-oro oro-multiselect-holder\">
            <div class=\"float-holder \">
                {% if form.children|length  %}
                    {% for child in form %}
                        {{ form_widget(child) }}
                        {{ form_errors(child) }}
                    {% endfor %}
                {% else %}
                    {{ form_widget(form) }}
                {% endif %}
                {{ form_errors(form) }}
                {{ form_rest(form) }}
            </div>
            {% if widget.parent.vars.allow_delete is not defined or widget.parent.vars.allow_delete -%}
                <button class=\"removeRow btn btn-icon btn-square-light\" type=\"button\" data-related=\"{{ name }}\"><span class=\"fa-close\"></span></button>
            {%- endif %}
        </div>
    </div>
{% endmacro %}

{% macro tooltip(tooltip_raw, tooltip_parameters, tooltip_placement, details_enabled, details_link, details_anchor) %}
    {% set tooltip_parameters = tooltip_parameters|default({}) %}
    {# deprecated tooltips domain since 1.9:1:11 for tooltips use instead 'messages' translation domain #}
    {% set tooltip = tooltip_raw|trans(tooltip_parameters, \"messages\") %}
    {% if (tooltip == tooltip_raw) %}
        {% set tooltip = tooltip_raw|trans(tooltip_parameters, \"tooltips\") %}
    {% endif %}
    {%- if tooltip is not empty -%}
        {% set details_anchor = details_anchor|default(null) %}
        {% set details_link = details_link|default(null) %}
        {% set details_enabled = details_enabled|default(false) %}
        {% set tooltip_placement = isMobileVersion() ? 'top' : tooltip_placement|default(null) %}

        {# Help link logic #}
        {% if details_enabled or details_anchor or details_link %}
            {% set helpLink = details_link|default(get_help_link()) %}
            {% if details_anchor %}
                {% set helpLink = helpLink ~ '#' ~ details_anchor %}
            {% endif %}
            {% set tooltip = tooltip
                ~ '<div class=\"clearfix\"><div class=\"pull-right\"><a href=\"' ~ helpLink ~ '\">'
                ~ 'oro.form.tooltip.read_more'|trans ~ '</a></div></div>'
            %}
        {% endif %}
        {# End help link logic #}

        {% set tooltip = '<div class=\"oro-popover-content\">'
            ~ tooltip
            ~ '</div>'
        %}

        <i class=\"fa-info-circle tooltip-icon\"
           {% if tooltip_placement %}data-placement=\"{{ tooltip_placement }}\"{% endif %}
           data-content=\"{{ tooltip }}\"
           data-toggle=\"popover\"></i>
    {%- endif -%}
{% endmacro %}

{#
    Render attribute row
    Parameters:
        title - attribute title
        value - attribute value
        additionalData - array with additional data
#}
{% macro attibuteRow(title, value, additionalData) %}
    {% import _self as UIMacro %}

    {% set attributeValue %}
        <div class=\"clearfix-oro\">
            {% if value.value is not defined  %}
                <div class=\"control-label\">{{ value }}</div>
            {% else %}
                <div class=\"control-label\">{{ value.value }} <strong>{{ value.hint }}</strong></div>
            {% endif %}
        </div>
        {% if additionalData|length %}
            {% for data in additionalData.data %}
                <div class=\"clearfix-oro\">
                    <div class=\"control-label\">{{ attribute(data, additionalData.field) }}</div>
                </div>
            {% endfor %}
        {% endif %}
    {% endset %}
    {{ UIMacro.renderAttribute(title, attributeValue) }}
{% endmacro %}

{#
    Render attribute row with custom data block
    Parameters:
        title - row title
        data - row data
        options - addtional options for attribute
#}
{% macro renderAttribute(title, data, options) %}
    {% set options = {
        rootClass: null,
        termClass: null,
        descriptionClass: null,
        tooltipHTML: null,
        dir: null
    }|merge(options|default({})) %}

    <div class=\"attribute-item{% if options.rootClass %} {{ options.rootClass }}{% endif %}\">
        <label class=\"attribute-item__term{% if options.termClass %} {{ options.termClass }}{% endif %}\">{% if options.tooltipHTML %}{{ options.tooltipHTML|raw }} {% endif %}{{ title }}</label>
        <div class=\"attribute-item__description{% if options.descriptionClass %} {{ options.descriptionClass }}{% endif %}\"
            {% if options.dir %}dir=\"{{ options.dir }}\" {% endif %}
        >
            {{ data|raw }}
        </div>
    </div>
{% endmacro %}

{#
    Render attribute row with custom data block
    Parameters:
        title - row title
        data - row data
#}
{% macro renderControlGroup(title, data, options) %}
    {% set options = {
        rootClass: 'attribute-row'
    }|merge(options|default({})) %}
    <div class=\"control-group{% if options.rootClass %} {{ options.rootClass }}{% endif %}\">
        <label class=\"control-label\">{{ title }}</label>
        <div class=\"controls\">
            {{ data|raw }}
        </div>
    </div>
{% endmacro %}

{#
    Render property block
    Parameters:
        title - property title
        data  - property data
        entity - the entitty instance on wich Field ACL should be checked
        fieldName - the name of field on wich Field ACL should be checked
        options - addtional options for property
#}
{% macro renderProperty(title, data, entity = null, fieldName = null, options = {}) %}
    {% import _self as UIMacro %}

    {{ UIMacro.renderHtmlProperty(title, data|escape, entity, fieldName, options) }}
{% endmacro %}

{#
    Render html property block
    Parameters:
        title - property title
        data  - property data
        entity - the entitty instance on wich Field ACL should be checked
        fieldName - the name of field on wich Field ACL should be checked
        options - addtional options for property
#}
{% macro renderHtmlProperty(title, data, entity = null, fieldName = null, options = {}) %}
    {% import _self as UIMacro %}

    {% if entity is defined and fieldName is defined and not is_granted('VIEW', entity, fieldName) %}
    {% else %}
        {{ UIMacro.renderAttribute(title, '<div class=\"control-label\">' ~ data|default('oro.ui.empty'|trans) ~ '</div>', options) }}
    {% endif %}
{% endmacro %}

{#
    Render property block
    Parameters:
        title - property title
        data  - property data
        entity - the entitty instance on wich Field ACL should be checked
        fieldName - the name of field on wich Field ACL should be checked
#}
{% macro renderPropertyControlGroup(title, data, entity = null, fieldName = null) %}
    {% import _self as UIMacro %}

    {{ UIMacro.renderHtmlPropertyControlGroup(title, data|escape, entity, fieldName) }}
{% endmacro %}

{#
    Render html property block
    Parameters:
        title - property title
        data  - property data
        entity - the entitty instance on wich Field ACL should be checked
        fieldName - the name of field on wich Field ACL should be checked
#}
{% macro renderHtmlPropertyControlGroup(title, data, entity = null, fieldName = null) %}
    {% import _self as UIMacro %}

    {% if entity is defined and fieldName is defined and not is_granted('VIEW', entity, fieldName) %}
    {% else %}
        {{ UIMacro.renderControlGroup(title, '<div class=\"control-label\">' ~ data|default('oro.ui.empty'|trans) ~ '</div>') }}
    {% endif %}
{% endmacro %}

{#
    Render collapsible html property block
    Parameters:
        title - property title
        data  - property data
        entity - the entitty instance on wich Field ACL should be checked
        fieldName - the name of field on wich Field ACL should be checked
#}
{% macro renderCollapsibleHtmlProperty(title, data, entity, fieldName, moreText = 'Show more', lessText = 'Show less') %}
    {% if is_granted('VIEW', entity, fieldName) %}
        {% set collapseView = {
            storageKey: 'collapseBlock[' ~ oro_class_name(entity) ~ ']',
            uid: '[' ~ title ~ '][' ~ entity.id ~ ']',
            animationSpeed: 0,
            closeClass: 'overflows',
            checkOverflow: true,
            open: false
        } %}
        <div class=\"collapse-block\" data-page-component-collapse=\"{{ collapseView|json_encode }}\">
            {% import _self as UIMacro %}

            {{ UIMacro.renderAttribute(title,
                '<div class=\"control-label\" data-collapse-container>' ~
                    data|default('oro.ui.empty'|trans) ~
                '</div>' ~
                '<a href=\"#\" class=\"control-label toggle-more\" data-collapse-trigger>' ~ moreText|trans ~ '</a>' ~
                '<a href=\"#\" class=\"control-label toggle-less\" data-collapse-trigger>' ~ lessText|trans ~ '</a>'
            ) }}
        </div>
    {% endif %}
{% endmacro %}

{#
    Render collapsible html block
    Parameters:
        data  - rendered data
        entity - the entitty instance on wich Field ACL should be checked
        fieldName - the name of field on wich Field ACL should be checked
#}
{% macro renderCollapsibleHtml(data, entity, fieldName, moreText = 'Show more', lessText = 'Show less') %}
    {% if is_granted('VIEW', entity, fieldName) and data is not empty %}
        {% set collapseView = {
            storageKey: 'collapseBlock[' ~ oro_class_name(entity) ~ ']',
            uid: '[' ~ fieldName ~ '][' ~ entity.id ~ ']',
            animationSpeed: 0,
            closeClass: 'overflows',
            checkOverflow: true,
            open: false
        } %}
        <div class=\"collapse-block\" data-page-component-collapse=\"{{ collapseView|json_encode }}\">
            <div class=\"control-label\" data-collapse-container>
                {{ data|raw }}
            </div>
            <a href=\"#\" class=\"control-label toggle-more\" data-collapse-trigger>{{ moreText|trans }}</a>
            <a href=\"#\" class=\"control-label toggle-less\" data-collapse-trigger>{{ lessText|trans }}</a>
        </div>
    {% endif %}
{% endmacro %}

{#
    Render html property block. HTML rendering may be switched off with system config.
    Parameters:
        title - property title
        data  - property data
#}
{% macro renderSwitchableHtmlProperty(title, data) %}
    {% import _self as UIMacro %}

    {% if oro_config_value('oro_form.wysiwyg_enabled') %}
        {% set data = data|oro_html_sanitize %}
    {%  else %}
        {% set data = data|striptags|nl2br %}
    {% endif %}

    {{ UIMacro.renderAttribute(title, '<div class=\"control-label html-property\">' ~ data|default('oro.ui.empty'|trans) ~ '</div>') }}
{% endmacro %}

{#
    Render color property block
    Parameters:
        title - property title
        data  - property data
        empty - a value which should be used if data is empty
#}
{% macro renderColorProperty(title, data, empty) %}
    {% import _self as UIMacro %}

    {% if data is not none %}
       {% set data = '<i class=\"color hide-text\" title=\"' ~ data ~ '\" style=\"background-color: ' ~ data ~ ';\">' ~ data ~ '</i>' %}
    {% endif %}
    {{ UIMacro.renderAttribute(title, '<div class=\"control-label\">' ~ data|default(empty)|default('oro.ui.empty'|trans) ~ '</div>') }}
{% endmacro %}

{#
    Create the link
    Parameters - array:
        [
            'path'  - button url
            'class' - default class
            'aCss'  - additional button class
            'title' - button title
            'iCss'  - css class for 'i' tag (icon)
            'label' - button label
            'role'  - link role HTML attribute
        ]
#}
{% macro link(parameters) %}
    {# need to remove spaces just before label #}
    {% set iconHtml = '' %}
    {% if parameters.iCss is defined and parameters.iCss %}
        {% set iconHtml %}
        <span class=\"{{ parameters.iCss }}\" aria-hidden=\"true\">
            {% if not parameters.noIconText|default(false)%}
                <span class=\"sr-only\">{{ parameters.label }}</span>
            {% endif %}
        </span>
        {% endset %}
    {% else %}
    {% endif %}
    {% apply spaceless %}
    <a href=\"{{ parameters.path }}\"
        {% if (parameters.id is defined) %}
            id=\"{{ parameters.id }}\"
        {% endif %}
        {% if parameters.data is defined %}
            {% for dataItemName,dataItemValue in parameters.data %}
                data-{{ dataItemName }}=\"{{ dataItemValue|e('html_attr')|raw }}\"
            {% endfor %}
        {% endif %}
        class=\"{{ parameters.class is defined? parameters.class : '' }} {{ parameters.aCss is defined? parameters.aCss : '' }}\"
        {% if parameters.role is defined %}role=\"{{ parameters.role }}\"{% endif %}
        {% if parameters.title is defined and parameters.title is not empty %}title=\"{{ parameters.title }}\"{% endif %}>{{ iconHtml|trim|raw }}
        {{- parameters.label|trim }}
    </a>
    {% endapply %}
{% endmacro %}

{#
    Create the button
    Parameters - array:
        [
            'path'  - button url
            'aCss'  - additional button class
            'title' - button title
            'iCss'  - css class for 'i' tag (icon)
            'label' - button label
        ]
#}
{% macro button(parameters) %}
    {% import _self as UIMacro %}

    <div class=\"pull-left btn-group icons-holder\">
        {{ UIMacro.link(parameters|merge({'class': 'btn back icons-holder-text', 'role': 'button'})) }}
    </div>
{% endmacro %}

{#
    Create dropdown button
    Parameters - array:
        [
            'label' - button label
            'elements' - dropdown elements
            'html' - html from placeholder
            'aCss'  - additional drop down class
        ]
#}
{% macro dropdownButton(parameters) %}
    {% import _self as UIMacro %}

    {% set togglerId = 'dropdown-'|uniqid %}
    <div class=\"btn-group\">
        <a href=\"#\" role=\"button\" id=\"{{ togglerId }}\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\"
           aria-haspopup=\"true\" aria-expanded=\"false\" data-placement=\"bottom-end\"
           data-inherit-parent-width=\"loosely\"
        >
            {% if parameters.iCss is defined %}
                <span class=\"{{ parameters.iCss }}\" aria-hidden=\"true\"></span>
            {% endif %}
            {{ parameters.label }}
        </a>
        <ul class=\"dropdown-menu {{ parameters.aCss is defined? parameters.aCss : '' }}\" role=\"menu\" aria-labelledby=\"{{ togglerId }}\">
            {% if parameters.elements is defined and parameters.elements is not empty %}
                {% for item in parameters.elements %}
                    {{ UIMacro.dropdownItem(item) }}
                {% endfor %}
            {% endif %}
            {% if parameters.html is defined and parameters.html is not empty %}
                {{ parameters.html|raw }}
            {% endif %}
        </ul>
    </div>
{% endmacro %}

{#
    Create the dropdown button item
    Parameters - array:
        [
            'path'  - button url
            'aCss'  - additional button class
            'title' - button title
            'iCss'  - css class for 'i' tag (icon)
            'label' - button label
        ]
#}
{% macro dropdownItem(parameters) %}
    {% import _self as UIMacro %}
    <li>{{ UIMacro.link(parameters) }}</li>
{% endmacro %}

{#
    Create the dropdown button wich preserves last used button
    Parameters - array:
        [
            'html'     - original buttons markup
            'groupKey' - key, to remember last used button
            'options'  - options for pinnedDropdownButtonProcessor widget
        ]
#}
{% macro pinnedDropdownButton(parameters) %}
    {% import _self as UIMacro %}

    {% if isDesktopVersion() or parameters.mobileEnabled|default(false) %}
        {% set options = parameters.options|default({}) %}
        {% set options = options|merge({
            widgetModule: options.widgetModule|default('oroui/js/content-processor/pinned-dropdown-button'),
            widgetName: options.widgetName|default('pinnedDropdownButtonProcessor'),
            groupKey: parameters.groupKey is defined ? parameters.groupKey : '',
            useMainButtonsClone: true
        }) %}
        {% apply spaceless %}
            <div class=\"pull-right pinned-dropdown\"
                 {{ UIMacro.renderAttributes(parameters.dataAttributes|default({})|merge({
                     'page-component-module': 'oroui/js/app/components/jquery-widget-component',
                     'page-component-options': options
                 })) }}>
                {{ parameters.html|raw }}
            </div>
        {% endapply %}
    {% else %}
        {{ parameters.html|raw }}
    {% endif %}
{% endmacro %}

{#
    Predefined pinnedDropdownButton's settings for save button
#}
{% macro dropdownSaveButton(parameters) %}
    {% import _self as UIMacro %}
    {% set parameters = {
        'groupKey': 'saveButtons',
        'options': {
            'moreButtonAttrs': {
                'class': 'btn-success'
            }
        }
    }|merge(parameters|default({})) %}
    {{ UIMacro.pinnedDropdownButton(parameters) }}
{% endmacro %}

{#
    Create 'Cancel' button
    Parameters
        'path' - button url
        'label' - button label | 'Cancel' by default
#}
{% macro cancelButton(path, label) %}
    {% import _self as UIMacro %}

    {% if label is empty %}
        {% set label = 'Cancel'|trans %}
    {% endif %}
    {{ UIMacro.button({'path' : path, 'title' : label, 'label' : label, data: {action: 'cancel'} }) }}
{% endmacro %}

{#
    Create 'Edit' button
    Parameters - array:
        [
            'path'  - button url
            'aCss'  - additional button class
            'title' - button title | 'Edit' by default
            'label' - button label | 'Edit' by default
            'entity_label' - if specified will be added for title and label
        ]
#}
{% macro editButton(parameters) %}
    {% import _self as UIMacro %}

    {% set iCss = ['fa-pencil-square-o'] %}
    {% set aCss = ['edit-button', 'main-group'] %}
    {% if parameters.iCss is defined %}
        {% set iCss = parameters.iCss|split(' ')|merge(iCss) %}
    {% endif %}
    {% if parameters.aCss is defined %}
        {% set aCss = parameters.aCss|split(' ')|merge(aCss) %}
    {% endif %}
    {% if parameters.title is defined %}
        {% set title = parameters.title %}
    {% else %}
        {% set title = parameters.entity_label is defined
            ? 'oro.ui.edit_entity'|trans({'%entityName%': parameters.entity_label})
            : 'oro.ui.edit'|trans
        %}
    {% endif %}
    {% set label = parameters.label is defined
        ? parameters.label
        : 'oro.ui.edit'|trans
    %}
    {% set parameters = parameters|merge({
        'iCss': iCss|join(' '),
        'aCss': aCss|join(' '),
        'title': title,
        'label': label
    }) %}

    {# Add URL parameters to button path #}
    {% set parameters = parameters|merge({ 'path' : oro_url_add_query(parameters['path']) }) %}

    {{ UIMacro.button(parameters) }}
{% endmacro %}

{#
    Create 'add' button
    Parameters - array:
        [
            'path'  - button url
            'aCss'  - additional button class
            'title' - button title | 'Create' by default
            'label' - button label | 'Create' by default
            'entity_label' - if specified will be added for title and label
        ]
#}
{% macro addButton(parameters) %}
    {% if parameters.label is defined %}
        {% set label = parameters.label %}
    {% else %}
        {% set label = parameters.entity_label is defined
            ? 'oro.ui.create_entity'|trans({'%entityName%': parameters.entity_label})
            : 'oro.ui.create'|trans
        %}
    {% endif %}
    {% if parameters.title is defined %}
        {% set title = parameters.title %}
    {% else %}
        {% set title = parameters.entity_label is defined
            ? 'oro.ui.create_entity'|trans({'%entityName%': parameters.entity_label})
            : 'oro.ui.create'|trans
        %}
    {% endif %}
    <a href=\"{{ parameters.path }}\"
        class=\"btn main-group btn-primary pull-right {{ parameters.aCss is defined? parameters.aCss : '' }}\"
        title=\"{{ title }}\"
    >
        {{- label -}}
    </a>
{% endmacro %}

{#
    Delete button with javascript handler
    Parameters - array:
        [
            'aCss' - additional css class for 'a' tag
            'dataId' - data-id parameter
            'dataMessage' - message before delete record | 'Are you sure you want to delete this %entity_label%?' by default
            'dataRedirect' - url to redirect after delete | '%entity_label% deleted' by default
            'dataUrl' - data-url parameter
            'title' - button title | 'Delete' by default
            'label' - button label | 'Delete' by default
            'entity_label' - if specified will be added for title, label and messages| 'item' by default
            'disabled' - if true this control is rendered as disabled
        ]
#}
{% macro deleteButton(parameters) %}
    {% import _self as UIMacro %}

    {% set aCss = 'btn icons-holder-text' %}

    {% if parameters.disabled is defined and parameters.disabled %}
        {% set aCss = aCss ~ ' disabled' %}
    {% endif %}

    {% if parameters.aCss is defined %}
        {% set aCss = aCss ~ ' ' ~ parameters.aCss %}
    {% endif %}

    {% set parameters = parameters|merge({'aCss': aCss}) %}

    <div class=\"pull-left btn-group icons-holder\">
        {{ UIMacro.deleteLink(parameters) }}
    </div>
{% endmacro %}

{% macro deleteLink(parameters) %}
    {% import _self as UIMacro %}

    {% set entityLabel = parameters.entity_label is defined ? parameters.entity_label : 'oro.ui.item'|trans %}
    {% set label = parameters.label is defined ? parameters.label : 'oro.ui.delete'|trans %}
    {% if parameters.title is defined %}
        {% set title = parameters.title %}
    {% else %}
        {% set title = parameters.entity_label is defined
            ? 'oro.ui.delete_entity'|trans({'%entityName%': parameters.entity_label})
            : 'oro.ui.delete'|trans
        %}
    {% endif %}

    {% set message = parameters.dataMessage is defined ? parameters.dataMessage : 'oro.ui.delete_confirm'|trans({ '%entity_label%' : entityLabel }) %}
    {% set successMessage = parameters.successMessage is defined ? parameters.successMessage : 'oro.ui.delete_message'|trans({ '%entity_label%' : entityLabel }) %}
    {% set url = parameters.dataUrl is defined ? parameters.dataUrl : '' %}
    {% set linkParams = {
        'data': {
            'message': message,
            'success-message': successMessage,
            'url': url
        },
        'iCss': parameters.iCss is defined ? parameters.iCss: 'fa-trash-o',
        'aCss': parameters.aCss,
        'title': title,
        'label': label,
        'path': '#'
    } %}


    {% if (parameters.dataId is defined) %}
        {% set data = linkParams.data|merge({'id': parameters.dataId}) %}
        {% set linkParams = linkParams|merge({ 'data': data }) %}
    {% endif %}
    {% if parameters.dataRedirect is defined %}
        {% set data = linkParams.data|merge({'redirect': parameters.dataRedirect}) %}
        {% set linkParams = linkParams|merge({ 'data': data }) %}
    {% endif %}
    {% if parameters.data is defined %}
        {% for dataItemName,dataItemValue in parameters.data %}
            {% set data = linkParams.data|merge({(dataItemName): dataItemValue}) %}
            {% set linkParams = linkParams|merge({ 'data': data }) %}
        {% endfor %}
    {% endif %}
    {{ UIMacro.link(linkParams) }}
{% endmacro %}

{#
    A link with a Javascript handler

    Parameters - array:
        [
            'class' - default class
            'aCss' - additional css class for 'a' tag
            'iCss' - additional css class for 'i' tag
            'dataId' - data-id parameter
            'dataUrl' - data-url parameter
            'dataRedirect' - url to redirect to after the operation is finished
            'successMessage' - message to display after the operation is finished
            'title' - button title
            'label' - button label
            'labelInIcon' - defines whether the label is included in the icon (true by default)
            'visible' - defines whether the button is visible (true by default)
            'dataAttributes' - additional data attributes
        ]
#}
{% macro clientLink(parameters) %}
    {% import _self as UIMacro %}
    {% set parameters = parameters|merge({
        class: parameters.class|default('') ~ (parameters.aCss is defined ? ' ' ~ parameters.aCss : '')
    })%}
    {% apply spaceless %}
        <a href=\"#\"
            {%- if (parameters.dataUrlRaw is defined) -%}
                data-url=\"{{ parameters.dataUrlRaw|raw }}\"
            {% elseif (parameters.dataUrl is defined) %}
                data-url=\"{{ parameters.dataUrl }}\"
            {%- endif -%}
            {{- UIMacro.clientControlAttrs(parameters) -}}>
            {{- UIMacro.clientControlIcon(parameters) -}}
            {{- parameters.label is defined ? parameters.label : '' -}}
        </a>
    {% endapply %}
{% endmacro %}

{#
    Attributes for a control with a Javascript handler

    Parameters - array:
        [
            'class' - default class
            'id' - HTML attribute id
            'dataId' - HTML attribute data-id
            'successMessage' - message to display after the operation is finished
            'dataRedirect' - url to redirect to after the operation is finished
            'role' - HTML attribute role
            'ariaSelected' - HTML attribute aria-selected
            'ariaControls' - HTML attribute aria-controls
            'ariaLabel' - HTML attribute aria-label
            'visible' - defines whether the label is included in the icon (true by default)
            'widget' - options to define a widget on the control
            'pageComponent' - options to define a page-component on the control
            'dataAttributes' - additional HTML data attributes
        ]
#}
{% macro clientControlAttrs(parameters) %}
    {% import _self as UIMacro %}
    {% if (parameters.class is defined) %}
        class=\"{{ parameters.class }}\"
    {% endif %}
    {% if (parameters.id is defined) %}
        id=\"{{ parameters.id }}\"
    {% endif %}
    {% if (parameters.title is defined) %}
        title=\"{{ parameters.title }}\"
    {% endif %}
    {% if (parameters.dataId is defined) %}
        data-id=\"{{ parameters.dataId }}\"
    {% endif %}
    {% if (parameters.dataIntention is defined) %}
        data-intention=\"{{ parameters.dataIntention }}\"
    {% endif %}
    {% if (parameters.successMessage is defined) %}
        data-success-message=\"{{ parameters.successMessage }}\"
    {% endif %}
    {% if parameters.dataRedirect is defined %}
        data-redirect=\"{{ parameters.dataRedirect }}\"
    {% endif %}
    {% if parameters.role is defined %}
        role=\"{{ parameters.role }}\"
    {% endif %}
    {% if parameters.dir is defined %}
        dir=\"{{ parameters.dir }}\"
    {% endif %}
    {% if parameters.ariaSelected is defined %}
        aria-selected=\"{{ parameters.ariaSelected }}\"
    {% endif %}
    {% if parameters.ariaControls is defined %}
        aria-controls=\"{{ parameters.ariaControls }}\"
    {% endif %}
    {% if (parameters.ariaLabel is defined) %}
        aria-label=\"{{ parameters.ariaLabel }}\"
    {% endif %}
    {% if (parameters.ariaHaspopup is defined) %}
        aria-haspopup=\"{{ parameters.ariaHaspopup ? 'true' : 'false' }}\"
    {% endif %}
    {% if (parameters.visible is defined and not parameters.visible) %}
        style=\"display: none\"
    {% endif %}
    {% if parameters.widget is defined and parameters.widget|length %}
        {% set options = parameters.widget %}
        {%- if (options.createOnEvent is not defined) -%}
            {% set options = options|merge({
                'createOnEvent' : options.event|default('click')
            }) %}
        {%- endif -%}
        {{ UIMacro.renderWidgetAttributes(options) }}
    {% endif %}
    {%- if parameters.pageComponent is defined -%}
        {{ UIMacro.renderPageComponentAttributes(parameters.pageComponent) }}
    {%- endif -%}
    {%- if parameters.dataAttributes is defined and parameters.dataAttributes|length -%}
        {{ UIMacro.renderAttributes(parameters.dataAttributes) }}
    {%- endif -%}
{% endmacro %}

{#
    An icon for a link/button control with a Javascript handler

    Parameters - array:
        [
            'iCss' - additional css class for 'span' tag
            'label' - control label
            'labelInIcon' - defines whether the label is included in the icon (true by default)
        ]
#}
{% macro clientControlIcon(parameters) %}
    {% import _self as UIMacro %}
    {% apply spaceless %}
    {%- set labelInIcon = parameters.labelInIcon is defined ? parameters.labelInIcon : true -%}
    {%- if (parameters.iCss is defined) -%}
        <span class=\"{{ parameters.iCss }}\" aria-hidden=\"true\">
            {%- if (parameters.label is defined and labelInIcon) -%}
                <span class=\"sr-only\">{{- parameters.label -}}</span>
            {%- endif -%}
        </span>
    {%- endif -%}
    {% endapply %}
{% endmacro %}

{#
    A button with a Javascript handler

    Parameters - array:
        [
            'class' - default class
            'btnCss' - additional css class for 'button' tag
            'iCss' - additional css class for 'span' tag
            'ariaLabel' - aria-label text for button
            'dataId' - data-id parameter
            'dataRedirect' - url to redirect to after the operation is finished
            'successMessage' - message to display after the operation is finished
            'label' - button label
            'labelInIcon' - defines whether the label is included in the icon (true by default)
            'visible' - defines whether the button is visible (true by default)
            'dataAttributes' - additional HTML data attributes
        ]
#}
{% macro clientBtn(parameters) %}
    {% import _self as UIMacro %}
    {% set parameters = parameters|merge({
        class: parameters.class|default('') ~ ' ' ~ parameters.btnCss|default('btn')
    })%}
    {% apply spaceless %}
        <button {{- UIMacro.clientControlAttrs(parameters) -}}
            {% if (parameters.title is defined) %}
                title=\"{{ parameters.title }}\"
            {% endif %}>
            {{- UIMacro.clientControlIcon(parameters) -}}
            {{- parameters.label is defined ? parameters.label : '' -}}
        </button>
    {% endapply %}
{% endmacro %}

{#
    Renders page component attributes passed in array
#}
{% macro renderPageComponentAttributes(pageComponent) %}
    {% for key,value in pageComponent %}
        {% if key == 'layout' %}
            data-layout=\"{{ pageComponent.layout }}\"
        {% elseif value is iterable %}
            data-page-component-{{ key }}=\"{{ value|json_encode }}\"
        {% else %}
            data-page-component-{{ key }}=\"{{ value }}\"
        {% endif %}
    {% endfor %}
{% endmacro %}

{#
    Renders attributes for widget

    Parameters: options array for widget
#}
{% macro renderWidgetAttributes(options) %}
    {% import _self as UIMacro %}

    {% set pageComponent = {
        module:  \"oroui/js/app/components/widget-component\",
        options: options
    }  %}
    {% if options.options.pageComponentName is defined %}
        {% set pageComponent = pageComponent|merge({name: options.options.pageComponentName}) %}
    {% endif %}
    {{ UIMacro.renderPageComponentAttributes(pageComponent) }}
{% endmacro %}
{#
    @deprecated
    Please use renderWidgetAttributes() with createOnEvent option specified instead
#}
{% macro renderWidgetDataAttributes(options) %}
    {% import _self as UIMacro %}

    {% if (options.createOnEvent is not defined) %}
        {% set options = options|merge({
            'createOnEvent' : options.event|default('click')
        }) %}
    {% endif %}
    {{ UIMacro.renderWidgetAttributes(options) }}
{% endmacro %}

{% macro renderAttributes(options, prefix) %}
    {% for name, value in options %}
        {% if (value is iterable) %}
            {% set value = value|json_encode(constant('JSON_FORCE_OBJECT')) %}
        {% endif %}
        data-{% if prefix is not empty %}{{ prefix }}-{% endif %}{{ name }}=\"{{ value }}\"
    {% endfor %}
{% endmacro %}

{#
    A button with javascript handler
    Parameters - array:
        [
            'class' - default class
            'aCss' - additional css class for 'a' tag
            'iCss' - additional css class for 'i' tag
            'dataId' - data-id parameter
            'dataUrl' - data-url parameter
            'dataRedirect' - url to redirect after an operation finished
            'successMessage' - a message which will be shown after an operation finished
            'title' - button title
            'label' - button label
            'visible' - determined whether the button is visible or not. Defaults to true
        ]
#}
{% macro clientButton(parameters) %}
    {% import _self as UIMacro %}

    {#{% espaceless %}#}
        <div class=\"pull-left btn-group icons-holder\">
            {{ UIMacro.clientLink(parameters|merge({class: 'btn icons-holder-text', role: 'button'})) }}
        </div>
    {#{% endapply %}#}
{% endmacro %}

{#
    A button that sends request to server
    Parameters - array:
        [
            'class' - default class
            'aCss' - additional css class for 'a' tag
            'iCss' - additional css class for 'i' tag
            'dataId' - data-id parameter
            'dataMethod' - request http method
            'dataUrl' - data-url parameter
            'dataRedirect' - url to redirect after an operation finished
            'successMessage' - a message which will be shown after an operation finished
            'errorMessage' - a message which will be shown if operation failed
            'title' - button title
            'label' - button label
            'visible' - determined whether the button is visible or not. Defaults to true
        ]
#}
{% macro ajaxButton(parameters) %}
    {% import _self as UIMacro %}

    <div class=\"pull-left btn-group icons-holder\">
        {{ UIMacro.ajaxLink(parameters|merge({'class': 'btn icons-holder-text', role: 'button'})) }}
    </div>
{% endmacro %}

{#
    A link that sends request to server
    Parameters - array:
        [
            'class' - default class
            'aCss' - additional css class for 'a' tag
            'iCss' - additional css class for 'i' tag
            'dataId' - data-id parameter
            'dataMethod' - request http method
            'dataUrl' - data-url parameter
            'dataRedirect' - url to redirect after an operation finished
            'successMessage' - a message which will be shown after an operation finished
            'errorMessage' - a message which will be shown if operation failed
            'title' - button title
            'label' - button label
            'visible' - determined whether the link is visible or not. Defaults to true
        ]
#}
{% macro ajaxLink(parameters) %}
    {% import _self as UIMacro %}

    {% set additionalParameters = {
        'pageComponent': {
            'module': 'oroui/js/app/components/ajax-button'
        },
        'dataAttributes': {
            'method': parameters.dataMethod is defined ? parameters.dataMethod : 'GET',
            'error-message': parameters.errorMessage is defined ? parameters.errorMessage : 'oro.ui.unexpected_error'
        }
    } %}

    {{ UIMacro.clientLink(parameters|merge(additionalParameters)) }}
{% endmacro %}

{#
    A button with javascript handler
    Parameters - array:
        [
            'class' - default class
            'aCss' - additional css class for 'a' tag
            'iCss' - additional css class for 'i' tag
            'dataId' - data-id parameter
            'dataUrl' - data-url parameter
            'dataRedirect' - url to redirect after an operation finished
            'successMessage' - a message which will be shown after an operation finished
            'title' - button title
            'label' - button label
            'visible' - determined whether the button is visible or not. Defaults to true
        ]
#}
{% macro dropdownClientItem(parameters) %}
    {% import _self as UIMacro %}

    <li>{{ UIMacro.clientLink(parameters) }}</li>
{% endmacro %}

{#
    Outputs a button with \"Save and Close\" label. After save application will show a page configured by parameter with name \"action\".
    For parameters description see documentation of saveActionButton macros.

    For backward compatibility macros supports input parameter as a label of button.
#}
{% macro saveAndCloseButton(parametersOrLabel) %}
    {% import _self as UIMacro %}

    {% set defaultParameters = {
        'class': 'btn-success',
        'label': 'Save and Close'|trans
    } %}

    {% if parametersOrLabel is iterable %}
        {% set parameters = parametersOrLabel %}
    {% else %}
        {# @deprecated since 1.10, support backward compatibility #}
        {% set parameters = {
            'label': parametersOrLabel|default('Save and Close'|trans),
            'action': 'save_and_close'
        } %}
    {% endif %}

    {% set parameters = defaultParameters|merge(parameters) %}

    {{ UIMacro.saveActionButton(parameters) }}
{% endmacro %}

{#
    Outputs a button with \"Save and Stay\" label. After save application will show a page configured by parameter with name \"action\".
    For parameters description see documentation of saveActionButton macros.

    For backward compatibility macros supports input parameter as a label of button.
#}
{% macro saveAndStayButton(parametersOrLabel) %}
    {% import _self as UIMacro %}

    {% if parametersOrLabel is iterable %}
        {% set parameters = parametersOrLabel %}
    {% else %}
        {# @deprecated since 1.10, support backward compatibility #}
        {% set parameters = {
            'label': parametersOrLabel|default('Save'|trans),
            'action': 'save_and_stay'
        } %}
    {% endif %}

    {{ UIMacro.saveActionButton(parameters) }}
{% endmacro %}

{#
    Outputs a button with \"Save and New\" label. After save application will show a page configured by parameter with name \"action\".
    For parameters description see documentation of saveActionButton macros.
#}
{% macro saveAndNewButton(parameters) %}
    {% import _self as UIMacro %}

    {% set defaultParameters = {
        'label': 'Save and New'|trans
    } %}

    {% set parameters = defaultParameters|merge(parameters) %}

    {{ UIMacro.saveActionButton(parameters) }}
{% endmacro %}

{#
    Outputs generic button with \"Save\" label and redirect behavior. Redirect is configured with parameter \"route\"
    and \"route_params\". Route params could contain paths instead of values if value will be available only after save.

    Parameters - array
        [
            'type' - button type, should be \"button\" or \"submit\"
            'class' - CSS class
            'label' - label of button
            'route' - Optional name of route to make a redirect.
            'params' - Optional list of route parameters. In case if value of parameter will be available only
                after save you can pass property path. For example: ['id': '\$id']. '\$' at the means property path.
                So when controller will handle save it will redirect to route using actual id value of entity.
            'action' - Contains data used by controller to make redirect. This value is prepared automatically
                based on route and route_params so you don't need to use this attribute directly.
        ]
#}
{% macro saveActionButton(parameters) %}
    {% import _self as UIMacro %}

    {% set defaultParameters = {
        'type' : 'submit',
        'class': 'btn-success main-group',
        'label': 'Save'|trans,
    } %}

    {% if parameters.action is defined %}
        {# @deprecated since 1.10, support backward compatibility #}
    {% elseif parameters.route is defined %}
        {# Prepare action parameter based on route #}
        {% set action = {'route': parameters.route} %}
        {% if parameters.params is defined %}
            {% set action = action|merge({'params': parameters.params}) %}
        {% endif %}
        {% set parameters = parameters|merge({'action': action|json_encode}) %}
    {% endif %}

    {% set parameters = defaultParameters|merge(parameters) %}

    {{ UIMacro.buttonType(parameters) }}
{% endmacro %}


{#
    Button macros with custom button type
    Parameters - array:
        [
            'type' - button type
            'class' - additional button css classes
            'label' - label of button
        ]
#}
{% macro buttonType(parameters) %}
    {% set defaultParameters = {
        'type' : 'button'
    } %}
    {% set parameters = defaultParameters|merge(parameters) %}
    <div class=\"btn-group\">
        <button type=\"{{ parameters.type }}\" class=\"btn {% if (parameters.class is defined) %}{{ parameters.class }}{% endif %}{% if (parameters.action is defined) %} action-button{% endif %}\"
                {% if (parameters.action is defined) %}data-action=\"{{ parameters.action }}\"{% endif %}
                {% if parameters.data is defined %}
                    {% for dataItemName,dataItemValue in parameters.data %}
                        data-{{ dataItemName }}=\"{{ dataItemValue|e('html_attr')|raw }}\"
                    {% endfor %}
                {% endif %}>
            {{ parameters.label }}
        </button>
    </div>
{% endmacro %}

{#
    Separator between buttons
#}
{% macro buttonSeparator() %}
    <div class=\"pull-left\" aria-hidden=\"true\">
        <div class=\"separator-btn\"></div>
    </div>
{% endmacro %}

{#
    Create scroll sub block for scroll block
    Parameters:
        title - title of sub block
        data - array with data fields (i.e. form_row() or attibuteRow() data)
        isForm - flag what scroll block mut contain the form
        useSpan - flag to indicate is subblock must have css class specified in spanClass parameter or not
        spanClass - css class name of subblock, if this parameter is not specified the css class is span6
#}
{% macro scrollSubblock(title, data, isForm, useSpan, spanClass) %}
    {% set spanClass = spanClass|default('responsive-cell') %}
    {#% if useSpan is not defined or useSpan == true %}
        {% set span = spanClass %}
    {% else %}
        {% set span = '' %}
    {% endif %}
    {% if span %}
        <div class=\"{{ span }}\">
    {% endif %#}
    <div class=\"{{ spanClass }}\">
    {% if title|length %}<h5 class=\"user-fieldset\"><span>{{ title }}</span></h5>{% endif %}
    {% for dataBlock in data %}
        {{ dataBlock|raw }}
    {% endfor %}
    </div>
    {#% if span %}
        </div>
    {% endif %#}
{% endmacro %}

{#
    Create scroll block for scroll data area
    Parameters:
        blockId - id of block
        title - block title
        'subblocks' - array with scroll sub blocks:
            [
                'title' - title of sub block
                'data' - array with data fields (i.e. form_row() or attibuteRow() data)
            ]
        isForm - flag what scroll block mut contain the form
        contentAttributes - additional attributes for block content
        useSubBlockDivider - indicates if 'row-fluid-divider' css class should be added to a row when there are more than one subblocks
#}
{% macro scrollBlock(blockId, title, subblocks, isForm, contentAttributes, useSubBlockDivider, headerLinkContent = '') %}
    {% import _self as UIMacro %}

    {% set cols = subblocks|length %}
    <div class=\"responsive-section\">
        <h4 class=\"scrollspy-title\">{{ title }}{% if headerLinkContent is defined %}{{ headerLinkContent }}{% endif %}</h4>
        <div id=\"{{ blockId }}\" class=\"scrollspy-nav-target\"></div>
        <div class=\"section-content\">
            <div class=\"row-fluid{% if (contentAttributes is defined and contentAttributes.class is defined and contentAttributes.class|length) %} {{ contentAttributes.class }}{% endif %}{% if cols > 1 and (useSubBlockDivider is not defined or useSubBlockDivider == true) %} row-fluid-divider{% endif %}\" {{ UIMacro.attributes(contentAttributes, ['class']) }}>
                {% if isForm is defined and isForm == true %}
                    <fieldset class=\"form-horizontal\">
                {% else %}
                    <div class=\"form-horizontal\">
                {% endif %}
                    {% for subblock in subblocks %}
                        {{ UIMacro.scrollSubblock(subblock.title is defined and subblock.title|length ? subblock.title : null, subblock.data, isForm, subblock.useSpan is defined ? subblock.useSpan : true, subblock.spanClass is defined ? subblock.spanClass : '') }}
                    {% endfor %}
                {% if isForm is defined and isForm == true %}
                    </fieldset>
                {% else %}
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
{% endmacro %}

{#
    Create scroll blocks (like in view or update pages)
    Parameters:
        dataTarget - id of scroll block
        data - array with scroll data blocks
        form
    data parameter structure:
        [
            'dataBlocks' - array of blocks. each block consist of:
                [
                    'title' - title of scroll block
                    'priority' - a number that can be used to change the order of blocks
                    'class' - additional css class for scroll block menu item
                    'useSubBlockDivider' - [optional] indicates if 'row-fluid-divider' css class should be added to a row when there are more than one subblocks
                    'subblocks' - array with scroll sub blocks:
                        [
                            'title' - title of sub block
                            'data' - array with data fields (i.e. form_row() or attibuteRow() data)
                        ]
                ]
            'formErrors' - errors from the form
            'hiddenData' - additional data (hidden fields from the form)
        ]
#}
{% macro scrollData(dataTarget, data, entity, form = null) %}
    {% import _self as UIMacro %}

    {% set data = oro_ui_scroll_data_before(dataTarget, data, entity, form) %}

    {% if form is defined and form %}
        {% set isForm = true %}
    {% else %}
        {% set isForm = false %}
    {% endif %}

    {% set dataBlocks = data.dataBlocks|oro_sort_by %}

    {% if not isMobileVersion() %}
        <div id=\"{{ dataTarget }}\" class=\"navbar navbar-static scrollspy-nav\">
            <nav class=\"nav\">
                {% for navElement in dataBlocks %}
                    <a class=\"nav-link{% if loop.first %} active {% endif %}{{ navElement.class|default('') }}\"
                       href=\"#scroll-{{ loop.index }}\"
                    >{{ navElement.title }}</a>
                {% endfor %}
            </nav>
        </div>
    {% endif %}
    <div class=\"scrollspy-main-container clearfix\">
        {% if data.formErrors is defined and data.formErrors | length%}
            <div class=\"customer-info-actions container-fluid well-small alert-wrap\" role=\"alert\">
                <div class=\"alert alert-error alert-dismissible\">
                    <button class=\"close\" type=\"button\" data-dismiss=\"alert\" data-target=\".alert-wrap\" aria-label=\"{{ 'Close'|trans }}\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    {{ data.formErrors|raw|nl2br }}
                </div>
            </div>
        {% endif %}
        <div data-spy=\"scroll\" data-target=\"#{{ dataTarget }}\" data-offset=\"1\" class=\"scrollspy scrollable-container{% if isForm %} form-container{% endif %}\">
            <div class=\"container-fluid\">
            {% for scrollBlock in dataBlocks %}
                {{ UIMacro.scrollBlock(
                    \"scroll-\" ~ loop.index,
                    scrollBlock.title,
                    scrollBlock.subblocks,
                    isForm,
                    scrollBlock.content_attr is defined ? scrollBlock.content_attr : null,
                    scrollBlock.useSubBlockDivider is defined ? scrollBlock.useSubBlockDivider : true,
                    scrollBlock.headerLinkContent is defined ? scrollBlock.headerLinkContent : null
                ) }}
            {% endfor %}
            {% if data.hiddenData is defined or isForm %}
                <div class=\"hide\" data-skip-input-widgets data-layout=\"separate\">
                    {% if data.hiddenData is defined %}
                        {{ data.hiddenData|raw }}
                    {% endif %}
                    {% if isForm %}
                        {{ form_rest(form) }}
                    {% endif %}
                </div>
            {% endif %}
            </div>
        </div>
    </div>
{% endmacro %}

{#
    Render attributes of HTML element.
    Parameters:
        attr - attributes
        excludes - names of attributes which should not be rendered even if they exist in attr parameter
#}
{% macro attributes(attr, excludes) %}
    {% apply spaceless %}
        {% set attr = attr|default({}) %}
        {% for attrname, attrvalue in attr %}
            {% if not excludes is defined or not excludes[attrname] is defined %}
                {% if attrname in ['placeholder', 'title'] and translation_domain is defined %}
                    {{ attrname }}=\"{{ attrvalue|trans({}, translation_domain) }}\"
                {% else %}
                    {{ attrname }}=\"{{ attrvalue is iterable ? attrvalue|json_encode : attrvalue }}\"
                {% endif %}
            {% endif %}
        {% endfor %}
    {% endapply %}
{% endmacro %}

{#
    Render link to entity owner
    Parameters:
        entity - entity record
        renderLabel - need render default label
#}
{%- macro entityOwnerLink(entity, renderLabel = true) -%}
    {% import _self as UIMacro %}

    {% apply spaceless %}
        {%- if entity %}
            {% set ownerType = oro_get_owner_type(entity) %}
            {%- if ownerType %}
                {% if  is_granted('VIEW', entity, oro_get_owner_field_name(entity)) %}
                    {% set owner = oro_get_entity_owner(entity) %}
                    {% if owner %}
                        {% if (ownerType == 'USER') %}
                            {% set ownerPath = path('oro_user_view', {'id': owner.id}) %}
                            {% set ownerName = owner|oro_format_name %}
                        {% elseif (ownerType == 'BUSINESS_UNIT') %}
                            {% set ownerPath = path('oro_business_unit_view', {'id': owner.id}) %}
                            {% set ownerName = owner.name %}
                        {% endif %}
                        {% if ownerName is defined %}
                            {% if renderLabel %}
                                {% set entityClassName = oro_class_name(entity) %}
                                {{ oro_field_config_value(
                                        entityClassName,
                                        oro_entity_config_value(entityClassName, 'owner_field_name', 'ownership'),
                                        'label'
                                    )|trans
                                }}:
                            {% endif %}
                            {% if ownerPath is defined and is_granted('VIEW', owner) %}
                                {{ UIMacro.renderUrl(ownerPath, ownerName) }}
                            {% else %}
                                {{ ownerName }}
                            {% endif %}
                        {% endif %}
                    {% endif %}
                {% endif %}
            {% endif -%}
        {% endif -%}
    {% endapply %}
{%- endmacro -%}

{%- macro renderUrl(url, text, class, title, attributes) -%}
    {% apply spaceless %}
        {% if text is empty %}
            {% set text = url %}
        {% endif %}
        {% if title is empty %}
            {% set title = text %}
        {% endif %}
        {% if class is empty %}
            {% set class = '' %}
        {% endif %}
        {% if url is not empty %}
            <a href=\"{{ url|escape('html_attr') }}\" title=\"{{ title|escape('html_attr') }}\" class=\"{{ class }}\"
            {% if (not oro_is_url_local(url)) %} target=\"_blank\"{% endif %}
            {% for name,value in attributes|default({}) %}
                {{ name }}=\"{{ value }}\"
            {% endfor %}
            >{{ text }}</a>
        {% endif %}
    {% endapply %}
{%- endmacro -%}

{%- macro renderUrlWithActions(parameters, entity) -%}
    {% import _self as UIMacro %}

    {% set url = parameters.url|default %}
    {%- set actions %}
        {%- placeholder url_actions with {data: url, entity: entity} -%}
    {% endset -%}
    {% set actions = actions|trim %}
    <span class=\"inline-actions-element truncate{% if actions is empty %} inline-actions-element_no-actions{% endif %}\">
        <span class=\"inline-actions-element_wrapper\">
            {{ UIMacro.renderUrl(
                url,
                parameters.text|default,
                parameters.class|default,
                parameters.title|default,
                parameters.attributes|default
            ) }}
        </span>
        {% if actions is not empty -%}
            <span class=\"inline-actions-element_actions url-actions\">{{ actions|raw }}</span>
        {%- endif %}
    </span>
{%- endmacro %}

{%- macro renderPhone(phone, title) -%}
    {% if title is empty %}
        {% set title = phone %}
    {% endif %}
    {% if phone is not empty %}
        <a href=\"tel:{{ phone|escape('html_attr') }}\" title=\"{{ title|escape('html_attr') }}\" class=\"phone\"><bdo dir=\"ltr\">{{ title }}</bdo></a>
    {% endif %}
{%- endmacro -%}

{#
    Render phone number with related actions block
    Parameters:
        phone - PhoneInterface object or string
        entity - related entity record
#}
{% macro renderPhoneWithActions(phone, entity) -%}
    {% import _self as UIMacro %}

    {% if phone is not empty %}
        {%- set actions %}
            {%- placeholder phone_actions with {phone: phone, entity: entity} -%}
        {% endset -%}
        {% set actions = actions|trim %}
        <span class=\"inline-actions-element{% if actions is empty %} inline-actions-element_no-actions{% endif %}\">
            <span class=\"inline-actions-element_wrapper\">{{ UIMacro.renderPhone(phone) }}</span>
            {% if actions is not empty -%}
                <span class=\"inline-actions-element_actions phone-actions\">{{ actions|raw }}</span>
            {%- endif %}
        </span>
    {% endif %}
{%- endmacro %}

{% macro getApplicableForUnderscore(str) %}
    {{ str|replace({
        \"<script\": '<% print(\"<sc\" + \"ript\"); %>',
        \"</script\": '<% print(\"</sc\" + \"ript\"); %>',
        \"<%\": '<% print(\"<\" + \"%\"); %>',
        \"%>\": '<% print(\"%\" + \">\"); %>',
    })|raw }}
{% endmacro %}

{%- macro renderList(elements) -%}
    <ul class=\"extra-list\">
        {%- for element in elements %}
            <li class=\"extra-list-element\">{{ element }}</li>
        {% endfor -%}
    </ul>
{% endmacro %}

{%- macro renderTable(titles, rows, style) -%}
     <table class=\"{{ style }}\">
     <thead>
     <tr>
    {%- for title in titles %}
        <th>{{ title }}</th>
    {% endfor -%}
     </tr>
     </thead>
    {%- for row in rows %}
        <tr>
            {%- for element in row %}
                <td>{{ element }}</td>
            {% endfor -%}
        </tr>
    {% endfor -%}
    </table>
{% endmacro %}

{%- macro entityViewLink(entity, label, route, permission) -%}
    {% import _self as UIMacro %}

    {% if entity %}
        {% if route and is_granted(permission|default('VIEW'), entity) %}
            {{ UIMacro.renderUrl(path(route, {'id': entity.id}), label) }}
        {% else %}
            {{ label|escape }}
        {% endif %}
    {% else %}
        {{ 'oro.ui.empty'|trans }}
    {% endif %}
{%- endmacro -%}

{%- macro entityViewLinks(entities, labelProperty, route, permission) -%}
    {% import _self as UIMacro %}

    {% set links = [] %}
    {% for entity in entities %}
        {% set links = links|merge([UIMacro.entityViewLink(entity, attribute(entity, labelProperty), route, permission)]) %}
    {% endfor %}
    {{ UIMacro.renderList(links) }}
{%- endmacro -%}

{#
    Renders text that should be rendered instead of not accessible entity field
    Parameters:
        labelText - Text that should be rendered
#}
{%- macro renderDisabledLabel(labelText) -%}
    <i>{{ labelText }}</i>
{%- endmacro -%}

{#
    Renders entity label by it's field. In case if VIEW permission is notgranted, returns
    the 'view entity_name' string in case if entityLabelIfNotGranted was set and empty string otherwise
    Parameters:
        entity - Entity whete field value should be takes
        fieldName - Field name wich value should be rendered
        entityLabelIfNotGranted - Entity label that should be rendered in case if user have no access to see field value
#}
{%- macro renderEntityViewLabel(entity, fieldName, entityLabelIfNotGranted = null) -%}
    {% if entity is not null and is_granted('VIEW', entity, fieldName) %}
        {{ attribute(entity, fieldName) }}
    {% else %}
        {% if entityLabelIfNotGranted is not null %}
            {{ 'view %entityName%'|trans({'%entityName%' : entityLabelIfNotGranted|trans}) }}
        {% endif %}
    {% endif %}
{%- endmacro -%}

{%- macro renderJsTree(data, actions) -%}
    {% embed \"@OroUI/jstree.html.twig\" with {
        data: data,
        actions: actions
    } %}
    {% endembed %}
{%- endmacro -%}

{% macro app_logo(organization_name) %}
    {% set organization_name = organization_name|default('') %}
    <a href=\"{{ path('oro_default') }}\" class=\"app-logo\" title=\"{{- organization_name|trim -}}\">{{- organization_name|trim -}}</a>
{% endmacro %}

{% macro insertIcon(classNames) %}
    {% set classNames = classNames|default('') %}

    {% if classNames %}
        <span class=\"{{ classNames }}\" aria-hidden=\"true\"></span>
    {% endif %}
{% endmacro %}
{#
    Render sortable list for configuration options
    Parameters:
        widget - form widget data
        attr - block attributes
        options - additional options
            - collection_class - Main class for sortable list,
            - add_btn_label - Text label for add item button,
            - column_label - Main column label,
            - column_options_label - Options column label
            - data_page_component_module - Class for data-page-component-module attribute
            - show_form_when_empty - Show select box when a form is empty
#}
{% macro sortable_list_view(widget, attr = {}, options = {}, widgetContainerAttributes) %}
    {% import _self as UIMacro %}

    {% if widget.vars.prototype is defined %}
        {% set prototype_html = UIMacro.sortable_list_view_collection_prototype(widget, options, widgetContainerAttributes) %}
    {% endif %}

    {% set attr = attr|merge({'class': (attr.class is defined ? attr.class ~ ' ' : '') ~ 'oro-item-collection grid-container' }) %}

    {% set id = widget.vars.id ~ '_collection' %}
    <div class=\"{{ options.collection_class|default('') }} drag-n-drop-sorting-view\" {% if options.data_page_component_module is defined %} data-page-component-module=\"{{ options.data_page_component_module|escape }}\"{% endif %}>
        <div class=\"drag-n-drop-sorting-view__wrapper row-oro\" {{ UIMacro.renderPageComponentAttributes({
            module: 'oroui/js/app/components/view-component',
            options: {
                view: 'oroui/js/drag-n-drop-sorting',
                autoRender: true
            }
        }) }}>
            {% set prototype_name = widget.vars.prototype_name %}
           <div {{ UIMacro.attributes(attr) }}>
                <table class=\"grid table-hover table table-bordered\">
                    <thead>
                    <tr>
                        <th class=\"drag-n-drop-sorting-view__column\"><span>{{ options.column_label|default('') }}</span></th>
                        <th class=\"drag-n-drop-sorting-view__column_options\"><span>{{ options.column_options_label|default('') }}</span></th>
                        {% if form.mergeAllowed is defined %}
                            <th></th>
                        {% endif %}
                    </tr>
                    </thead>
                    <tbody class=\"sortable-wrapper\" data-last-index=\"{{ widget.children|length}}\" data-prototype-name=\"{{ prototype_name }}\"{% if prototype_html is defined %} data-prototype=\"{{ prototype_html|escape }}\"{% endif %}>
                    {% if widget.children|length %}
                        {% for child in widget.children %}
                            {{ UIMacro.sortable_list_view_collection_prototype(child, options, widgetContainerAttributes) }}
                        {% endfor %}
                    {% elseif options.show_form_when_empty is defined and prototype_html is defined %}
                        {{ prototype_html|replace({(prototype_name): '0'})|raw }}
                    {% endif %}
                    </tbody>
                </table>
            </div>
            <a class=\"btn add-list-item\" data-container=\".oro-item-collection tbody\" href=\"#\">
                {{ options.add_btn_label|default('') }}
            </a>
        </div>
    </div>
{% endmacro %}

{% macro sortable_list_view_collection_prototype(widget, options, widgetContainerAttributes) %}
    {% if 'collection' in widget.vars.block_prefixes %}
        {% set form = widget.vars.prototype %}
        {% set name = widget.vars.full_name ~ '[' ~ widget.vars.prototype.vars.name ~ ']' %}
    {% else %}
        {% set form = widget %}
        {% set name = widget.vars.full_name %}
    {% endif %}
    {% apply spaceless %}
    <tr data-content=\"{{ name }}\" data-validation-optional-group {{ widgetContainerAttributes }}
            class=\"{{ options.collection_class|default('') }}\">
        {{ form_widget(form) }}
    </tr>
    {% endapply %}
{% endmacro %}

{% macro render_birthday(birthday) %}
    {% if birthday is not empty %}
        {{ birthday|oro_format_date }}
        {% set age = birthday|age_string %}
        {{ age is not empty ? '(' ~ age ~ ')': null }}
    {% else %}
        {{ 'N/A'|trans }}
    {% endif %}
{% endmacro %}

{% macro badge(label, badgeClass = 'info', iconClass = 'fa-circle') %}
    <span class=\"badge badge-pill badge-{{ badgeClass }} status-{{ badgeClass }}\">
        <i class=\"icon-status-{{ badgeClass }} {{ iconClass }}\" aria-hidden=\"true\"></i>{{ label }}
    </span>
{% endmacro %}
", "@OroUI/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/macros.html.twig");
    }
}


/* @OroUI/macros.html.twig */
class __TwigTemplate_88200e746f23e461cff370f2c517a8f1___1338725397 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1524
        return "@OroUI/jstree.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUI/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/macros.html.twig"));

        $this->parent = $this->loadTemplate("@OroUI/jstree.html.twig", "@OroUI/macros.html.twig", 1524);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroUI/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  6638 => 1524,  4942 => 1632,  4935 => 1631,  4914 => 1630,  4895 => 1626,  4889 => 1624,  4887 => 1623,  4882 => 1622,  4879 => 1621,  4860 => 1620,  4845 => 1612,  4839 => 1615,  4835 => 1614,  4828 => 1613,  4825 => 1612,  4822 => 1611,  4819 => 1610,  4816 => 1609,  4813 => 1608,  4810 => 1607,  4807 => 1606,  4804 => 1605,  4783 => 1604,  4763 => 1598,  4757 => 1594,  4751 => 1592,  4748 => 1591,  4739 => 1589,  4734 => 1588,  4732 => 1587,  4720 => 1586,  4716 => 1584,  4712 => 1582,  4710 => 1581,  4706 => 1580,  4702 => 1579,  4694 => 1575,  4692 => 1574,  4689 => 1573,  4687 => 1567,  4676 => 1566,  4674 => 1565,  4671 => 1564,  4669 => 1563,  4666 => 1562,  4663 => 1561,  4660 => 1560,  4658 => 1559,  4655 => 1558,  4652 => 1557,  4630 => 1556,  4611 => 1540,  4609 => 1539,  4606 => 1538,  4603 => 1537,  4584 => 1536,  4562 => 1533,  4559 => 1532,  4540 => 1531,  4525 => 1526,  4524 => 1525,  4523 => 1524,  4503 => 1523,  4487 => 1520,  4481 => 1518,  4478 => 1517,  4472 => 1515,  4470 => 1514,  4449 => 1513,  4432 => 1502,  4413 => 1501,  4397 => 1493,  4391 => 1492,  4388 => 1491,  4383 => 1490,  4381 => 1489,  4378 => 1488,  4376 => 1487,  4354 => 1486,  4335 => 1482,  4332 => 1481,  4326 => 1479,  4320 => 1477,  4317 => 1476,  4315 => 1475,  4312 => 1474,  4310 => 1473,  4288 => 1472,  4272 => 1469,  4265 => 1467,  4256 => 1465,  4252 => 1464,  4250 => 1463,  4246 => 1462,  4243 => 1460,  4234 => 1458,  4230 => 1457,  4224 => 1454,  4203 => 1453,  4187 => 1450,  4178 => 1448,  4174 => 1447,  4172 => 1446,  4153 => 1445,  4137 => 1442,  4134 => 1437,  4115 => 1436,  4098 => 1432,  4093 => 1430,  4091 => 1429,  4087 => 1428,  4080 => 1427,  4078 => 1426,  4075 => 1424,  4073 => 1423,  4071 => 1422,  4068 => 1421,  4066 => 1420,  4046 => 1419,  4023 => 1409,  4020 => 1408,  4017 => 1407,  4014 => 1406,  4012 => 1405,  3992 => 1404,  3977 => 1401,  3972 => 1399,  3970 => 1398,  3966 => 1396,  3964 => 1395,  3963 => 1394,  3962 => 1393,  3961 => 1392,  3960 => 1391,  3959 => 1390,  3951 => 1388,  3949 => 1387,  3946 => 1385,  3944 => 1384,  3942 => 1383,  3939 => 1382,  3937 => 1381,  3917 => 1380,  3902 => 1359,  3899 => 1377,  3893 => 1375,  3882 => 1373,  3877 => 1372,  3873 => 1371,  3864 => 1370,  3861 => 1369,  3858 => 1368,  3855 => 1367,  3852 => 1366,  3849 => 1365,  3846 => 1364,  3843 => 1363,  3840 => 1362,  3837 => 1361,  3834 => 1360,  3832 => 1359,  3809 => 1358,  3794 => 1321,  3789 => 1353,  3786 => 1352,  3783 => 1351,  3780 => 1350,  3774 => 1348,  3768 => 1346,  3765 => 1345,  3761 => 1343,  3759 => 1340,  3758 => 1339,  3756 => 1338,  3753 => 1337,  3750 => 1336,  3747 => 1335,  3744 => 1334,  3741 => 1333,  3738 => 1332,  3735 => 1331,  3732 => 1330,  3729 => 1329,  3726 => 1328,  3723 => 1327,  3720 => 1326,  3717 => 1325,  3715 => 1324,  3712 => 1323,  3710 => 1322,  3708 => 1321,  3705 => 1320,  3703 => 1319,  3683 => 1318,  3668 => 1298,  3665 => 1309,  3659 => 1308,  3656 => 1307,  3648 => 1305,  3640 => 1303,  3637 => 1302,  3634 => 1301,  3629 => 1300,  3626 => 1299,  3623 => 1298,  3603 => 1297,  3585 => 1286,  3581 => 1284,  3575 => 1282,  3572 => 1281,  3566 => 1279,  3564 => 1278,  3561 => 1277,  3558 => 1276,  3543 => 1274,  3541 => 1273,  3540 => 1272,  3539 => 1271,  3538 => 1270,  3537 => 1269,  3536 => 1268,  3535 => 1267,  3533 => 1266,  3516 => 1265,  3506 => 1263,  3499 => 1259,  3493 => 1256,  3489 => 1254,  3487 => 1253,  3484 => 1252,  3479 => 1249,  3463 => 1247,  3459 => 1246,  3451 => 1245,  3434 => 1244,  3428 => 1242,  3426 => 1241,  3423 => 1240,  3421 => 1239,  3418 => 1238,  3415 => 1237,  3412 => 1236,  3409 => 1235,  3406 => 1234,  3404 => 1233,  3401 => 1232,  3399 => 1231,  3396 => 1230,  3393 => 1229,  3371 => 1228,  3353 => 1199,  3349 => 1197,  3345 => 1195,  3342 => 1194,  3333 => 1192,  3328 => 1191,  3324 => 1189,  3320 => 1187,  3318 => 1186,  3306 => 1185,  3301 => 1183,  3294 => 1182,  3291 => 1181,  3289 => 1180,  3286 => 1179,  3283 => 1178,  3258 => 1177,  3242 => 1157,  3233 => 1155,  3228 => 1154,  3222 => 1153,  3217 => 1152,  3215 => 1144,  3212 => 1143,  3189 => 1142,  3171 => 1128,  3153 => 1127,  3134 => 1119,  3129 => 1118,  3118 => 1116,  3113 => 1115,  3110 => 1114,  3104 => 1113,  3093 => 1112,  3090 => 1111,  3087 => 1110,  3084 => 1107,  3065 => 1106,  3048 => 1093,  3045 => 1092,  3043 => 1091,  3040 => 1090,  3037 => 1089,  3034 => 1088,  3031 => 1087,  3028 => 1086,  3025 => 1085,  3022 => 1084,  3020 => 1083,  3017 => 1082,  3015 => 1081,  3013 => 1080,  3010 => 1079,  3008 => 1074,  3005 => 1073,  3002 => 1072,  2983 => 1071,  2966 => 1051,  2963 => 1050,  2961 => 1049,  2958 => 1048,  2956 => 1045,  2953 => 1044,  2950 => 1043,  2931 => 1042,  2914 => 1035,  2911 => 1034,  2908 => 1033,  2906 => 1030,  2904 => 1029,  2902 => 1028,  2899 => 1027,  2896 => 1026,  2894 => 1025,  2891 => 1024,  2888 => 1023,  2869 => 1022,  2852 => 1013,  2849 => 1012,  2847 => 1011,  2844 => 1010,  2841 => 1009,  2839 => 1006,  2837 => 1005,  2835 => 1004,  2832 => 1003,  2829 => 1002,  2827 => 1001,  2824 => 1000,  2822 => 996,  2819 => 995,  2816 => 994,  2797 => 993,  2780 => 984,  2777 => 983,  2774 => 982,  2755 => 981,  2738 => 962,  2735 => 961,  2733 => 958,  2732 => 957,  2731 => 952,  2728 => 951,  2725 => 950,  2706 => 949,  2688 => 927,  2684 => 925,  2681 => 924,  2662 => 923,  2644 => 900,  2641 => 899,  2638 => 897,  2635 => 896,  2616 => 895,  2588 => 875,  2585 => 874,  2582 => 873,  2579 => 872,  2574 => 871,  2554 => 870,  2536 => 867,  2533 => 866,  2531 => 864,  2529 => 863,  2527 => 862,  2524 => 861,  2521 => 860,  2502 => 859,  2484 => 853,  2481 => 852,  2478 => 851,  2475 => 850,  2473 => 848,  2472 => 846,  2469 => 845,  2466 => 844,  2447 => 843,  2428 => 835,  2420 => 833,  2412 => 831,  2410 => 830,  2405 => 829,  2402 => 828,  2397 => 827,  2378 => 826,  2363 => 812,  2359 => 819,  2357 => 818,  2355 => 817,  2353 => 816,  2347 => 815,  2345 => 814,  2342 => 813,  2339 => 812,  2337 => 810,  2335 => 809,  2332 => 808,  2313 => 807,  2298 => 777,  2294 => 784,  2289 => 782,  2287 => 781,  2283 => 780,  2281 => 779,  2279 => 778,  2276 => 777,  2273 => 776,  2254 => 775,  2238 => 761,  2236 => 760,  2233 => 758,  2231 => 757,  2226 => 755,  2223 => 752,  2222 => 751,  2220 => 750,  2217 => 749,  2214 => 748,  2210 => 746,  2207 => 745,  2201 => 743,  2198 => 742,  2192 => 740,  2189 => 739,  2183 => 737,  2180 => 736,  2174 => 734,  2171 => 733,  2165 => 731,  2162 => 730,  2156 => 728,  2153 => 727,  2147 => 725,  2144 => 724,  2138 => 722,  2135 => 721,  2129 => 719,  2126 => 718,  2120 => 716,  2117 => 715,  2111 => 713,  2108 => 712,  2102 => 710,  2099 => 709,  2093 => 707,  2090 => 706,  2087 => 705,  2068 => 704,  2053 => 670,  2049 => 680,  2047 => 679,  2045 => 678,  2042 => 677,  2037 => 675,  2035 => 674,  2030 => 673,  2028 => 672,  2026 => 671,  2023 => 670,  2021 => 668,  2019 => 667,  2016 => 666,  1997 => 665,  1979 => 643,  1976 => 642,  1970 => 641,  1967 => 640,  1964 => 639,  1959 => 638,  1956 => 637,  1953 => 636,  1950 => 635,  1947 => 634,  1944 => 633,  1941 => 632,  1938 => 631,  1935 => 630,  1933 => 629,  1929 => 627,  1927 => 624,  1926 => 623,  1925 => 622,  1924 => 621,  1923 => 619,  1922 => 618,  1921 => 617,  1919 => 615,  1916 => 614,  1913 => 613,  1911 => 612,  1908 => 611,  1905 => 610,  1903 => 607,  1901 => 606,  1898 => 605,  1895 => 604,  1892 => 603,  1889 => 602,  1887 => 601,  1884 => 600,  1881 => 599,  1862 => 598,  1844 => 594,  1840 => 592,  1838 => 591,  1835 => 590,  1832 => 589,  1829 => 588,  1827 => 587,  1824 => 586,  1821 => 585,  1818 => 584,  1816 => 583,  1813 => 582,  1811 => 581,  1808 => 580,  1805 => 579,  1786 => 578,  1770 => 560,  1768 => 559,  1764 => 557,  1760 => 556,  1755 => 555,  1752 => 554,  1750 => 551,  1748 => 550,  1745 => 549,  1742 => 548,  1739 => 547,  1736 => 546,  1734 => 543,  1732 => 542,  1729 => 541,  1726 => 540,  1723 => 539,  1704 => 538,  1687 => 524,  1684 => 523,  1681 => 522,  1678 => 520,  1676 => 518,  1675 => 517,  1674 => 516,  1673 => 515,  1671 => 514,  1669 => 511,  1667 => 510,  1664 => 509,  1662 => 506,  1660 => 505,  1657 => 504,  1654 => 503,  1651 => 502,  1648 => 501,  1645 => 500,  1642 => 499,  1639 => 498,  1636 => 497,  1633 => 496,  1630 => 495,  1628 => 494,  1625 => 493,  1622 => 492,  1603 => 491,  1585 => 477,  1582 => 476,  1579 => 475,  1577 => 474,  1574 => 473,  1571 => 472,  1551 => 471,  1533 => 462,  1531 => 461,  1529 => 454,  1526 => 453,  1507 => 452,  1488 => 445,  1485 => 444,  1483 => 435,  1477 => 441,  1474 => 440,  1472 => 439,  1471 => 437,  1468 => 436,  1465 => 435,  1463 => 432,  1462 => 431,  1461 => 430,  1459 => 429,  1456 => 428,  1454 => 427,  1451 => 426,  1448 => 425,  1429 => 424,  1411 => 412,  1408 => 411,  1389 => 410,  1372 => 395,  1366 => 393,  1363 => 392,  1360 => 391,  1351 => 389,  1346 => 388,  1344 => 387,  1338 => 386,  1332 => 384,  1326 => 382,  1324 => 381,  1317 => 377,  1314 => 376,  1312 => 375,  1309 => 374,  1306 => 373,  1287 => 372,  1269 => 358,  1265 => 356,  1262 => 355,  1243 => 354,  1228 => 325,  1222 => 338,  1213 => 337,  1207 => 336,  1200 => 335,  1197 => 334,  1186 => 332,  1181 => 331,  1178 => 330,  1172 => 328,  1170 => 327,  1165 => 326,  1162 => 325,  1159 => 324,  1156 => 323,  1152 => 321,  1146 => 319,  1144 => 318,  1139 => 317,  1136 => 316,  1133 => 315,  1130 => 314,  1128 => 313,  1109 => 312,  1091 => 296,  1088 => 295,  1085 => 294,  1083 => 293,  1080 => 292,  1077 => 291,  1056 => 290,  1039 => 280,  1036 => 279,  1033 => 278,  1030 => 277,  1027 => 276,  1024 => 275,  1022 => 274,  1019 => 273,  1016 => 272,  996 => 271,  977 => 260,  973 => 259,  968 => 257,  962 => 255,  960 => 249,  959 => 248,  957 => 247,  954 => 246,  931 => 245,  913 => 233,  911 => 232,  910 => 231,  909 => 229,  908 => 227,  905 => 226,  903 => 225,  898 => 224,  896 => 218,  895 => 217,  893 => 216,  890 => 215,  866 => 214,  847 => 202,  844 => 201,  842 => 200,  839 => 199,  836 => 198,  814 => 197,  797 => 186,  794 => 185,  791 => 184,  769 => 183,  750 => 171,  747 => 170,  745 => 169,  742 => 168,  739 => 167,  716 => 166,  699 => 154,  696 => 153,  693 => 152,  670 => 151,  651 => 137,  646 => 135,  638 => 134,  636 => 133,  634 => 131,  613 => 130,  594 => 119,  591 => 118,  585 => 117,  578 => 116,  565 => 115,  558 => 114,  555 => 113,  553 => 112,  551 => 106,  530 => 105,  512 => 95,  509 => 94,  506 => 93,  497 => 90,  494 => 89,  489 => 88,  487 => 87,  484 => 86,  476 => 84,  470 => 82,  468 => 81,  465 => 80,  463 => 79,  460 => 78,  457 => 77,  436 => 76,  417 => 64,  411 => 63,  407 => 61,  405 => 58,  404 => 57,  401 => 56,  399 => 55,  396 => 54,  394 => 51,  392 => 50,  389 => 49,  386 => 48,  383 => 47,  380 => 46,  377 => 45,  374 => 43,  371 => 42,  368 => 41,  365 => 40,  363 => 39,  361 => 38,  358 => 37,  355 => 36,  352 => 35,  349 => 34,  347 => 33,  344 => 32,  320 => 31,  303 => 27,  298 => 25,  296 => 24,  291 => 22,  286 => 21,  280 => 19,  277 => 18,  269 => 16,  264 => 15,  259 => 14,  257 => 13,  251 => 10,  248 => 9,  245 => 8,  242 => 7,  239 => 6,  236 => 5,  233 => 4,  230 => 3,  227 => 2,  208 => 1,  194 => 1629,  191 => 1619,  188 => 1603,  185 => 1535,  182 => 1435,  179 => 1311,  176 => 1290,  173 => 1203,  170 => 1162,  167 => 1132,  164 => 1123,  160 => 1095,  157 => 1053,  154 => 1037,  151 => 1015,  148 => 986,  145 => 964,  142 => 930,  139 => 904,  136 => 878,  133 => 869,  130 => 837,  127 => 822,  124 => 788,  121 => 764,  118 => 683,  115 => 645,  112 => 597,  109 => 562,  106 => 526,  103 => 479,  100 => 464,  97 => 448,  94 => 414,  91 => 398,  88 => 361,  85 => 342,  82 => 298,  79 => 282,  76 => 264,  73 => 237,  70 => 205,  67 => 188,  64 => 174,  61 => 156,  58 => 141,  55 => 123,  52 => 97,  49 => 68,  46 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro collection_prototype(widget) %}
    {% if 'prototype' in widget.vars|keys %}
        {% set form = widget.vars.prototype %}
        {% set name = widget.vars.prototype.vars.name %}
    {% else %}
        {% set form = widget %}
        {% set name = widget.vars.full_name %}
    {% endif %}

    <div data-content=\"{{ name }}\">
        <div class=\"row-oro oro-multiselect-holder\">
            <div class=\"float-holder \">
                {% if form.children|length  %}
                    {% for child in form %}
                        {{ form_widget(child) }}
                        {{ form_errors(child) }}
                    {% endfor %}
                {% else %}
                    {{ form_widget(form) }}
                {% endif %}
                {{ form_errors(form) }}
                {{ form_rest(form) }}
            </div>
            {% if widget.parent.vars.allow_delete is not defined or widget.parent.vars.allow_delete -%}
                <button class=\"removeRow btn btn-icon btn-square-light\" type=\"button\" data-related=\"{{ name }}\"><span class=\"fa-close\"></span></button>
            {%- endif %}
        </div>
    </div>
{% endmacro %}

{% macro tooltip(tooltip_raw, tooltip_parameters, tooltip_placement, details_enabled, details_link, details_anchor) %}
    {% set tooltip_parameters = tooltip_parameters|default({}) %}
    {# deprecated tooltips domain since 1.9:1:11 for tooltips use instead 'messages' translation domain #}
    {% set tooltip = tooltip_raw|trans(tooltip_parameters, \"messages\") %}
    {% if (tooltip == tooltip_raw) %}
        {% set tooltip = tooltip_raw|trans(tooltip_parameters, \"tooltips\") %}
    {% endif %}
    {%- if tooltip is not empty -%}
        {% set details_anchor = details_anchor|default(null) %}
        {% set details_link = details_link|default(null) %}
        {% set details_enabled = details_enabled|default(false) %}
        {% set tooltip_placement = isMobileVersion() ? 'top' : tooltip_placement|default(null) %}

        {# Help link logic #}
        {% if details_enabled or details_anchor or details_link %}
            {% set helpLink = details_link|default(get_help_link()) %}
            {% if details_anchor %}
                {% set helpLink = helpLink ~ '#' ~ details_anchor %}
            {% endif %}
            {% set tooltip = tooltip
                ~ '<div class=\"clearfix\"><div class=\"pull-right\"><a href=\"' ~ helpLink ~ '\">'
                ~ 'oro.form.tooltip.read_more'|trans ~ '</a></div></div>'
            %}
        {% endif %}
        {# End help link logic #}

        {% set tooltip = '<div class=\"oro-popover-content\">'
            ~ tooltip
            ~ '</div>'
        %}

        <i class=\"fa-info-circle tooltip-icon\"
           {% if tooltip_placement %}data-placement=\"{{ tooltip_placement }}\"{% endif %}
           data-content=\"{{ tooltip }}\"
           data-toggle=\"popover\"></i>
    {%- endif -%}
{% endmacro %}

{#
    Render attribute row
    Parameters:
        title - attribute title
        value - attribute value
        additionalData - array with additional data
#}
{% macro attibuteRow(title, value, additionalData) %}
    {% import _self as UIMacro %}

    {% set attributeValue %}
        <div class=\"clearfix-oro\">
            {% if value.value is not defined  %}
                <div class=\"control-label\">{{ value }}</div>
            {% else %}
                <div class=\"control-label\">{{ value.value }} <strong>{{ value.hint }}</strong></div>
            {% endif %}
        </div>
        {% if additionalData|length %}
            {% for data in additionalData.data %}
                <div class=\"clearfix-oro\">
                    <div class=\"control-label\">{{ attribute(data, additionalData.field) }}</div>
                </div>
            {% endfor %}
        {% endif %}
    {% endset %}
    {{ UIMacro.renderAttribute(title, attributeValue) }}
{% endmacro %}

{#
    Render attribute row with custom data block
    Parameters:
        title - row title
        data - row data
        options - addtional options for attribute
#}
{% macro renderAttribute(title, data, options) %}
    {% set options = {
        rootClass: null,
        termClass: null,
        descriptionClass: null,
        tooltipHTML: null,
        dir: null
    }|merge(options|default({})) %}

    <div class=\"attribute-item{% if options.rootClass %} {{ options.rootClass }}{% endif %}\">
        <label class=\"attribute-item__term{% if options.termClass %} {{ options.termClass }}{% endif %}\">{% if options.tooltipHTML %}{{ options.tooltipHTML|raw }} {% endif %}{{ title }}</label>
        <div class=\"attribute-item__description{% if options.descriptionClass %} {{ options.descriptionClass }}{% endif %}\"
            {% if options.dir %}dir=\"{{ options.dir }}\" {% endif %}
        >
            {{ data|raw }}
        </div>
    </div>
{% endmacro %}

{#
    Render attribute row with custom data block
    Parameters:
        title - row title
        data - row data
#}
{% macro renderControlGroup(title, data, options) %}
    {% set options = {
        rootClass: 'attribute-row'
    }|merge(options|default({})) %}
    <div class=\"control-group{% if options.rootClass %} {{ options.rootClass }}{% endif %}\">
        <label class=\"control-label\">{{ title }}</label>
        <div class=\"controls\">
            {{ data|raw }}
        </div>
    </div>
{% endmacro %}

{#
    Render property block
    Parameters:
        title - property title
        data  - property data
        entity - the entitty instance on wich Field ACL should be checked
        fieldName - the name of field on wich Field ACL should be checked
        options - addtional options for property
#}
{% macro renderProperty(title, data, entity = null, fieldName = null, options = {}) %}
    {% import _self as UIMacro %}

    {{ UIMacro.renderHtmlProperty(title, data|escape, entity, fieldName, options) }}
{% endmacro %}

{#
    Render html property block
    Parameters:
        title - property title
        data  - property data
        entity - the entitty instance on wich Field ACL should be checked
        fieldName - the name of field on wich Field ACL should be checked
        options - addtional options for property
#}
{% macro renderHtmlProperty(title, data, entity = null, fieldName = null, options = {}) %}
    {% import _self as UIMacro %}

    {% if entity is defined and fieldName is defined and not is_granted('VIEW', entity, fieldName) %}
    {% else %}
        {{ UIMacro.renderAttribute(title, '<div class=\"control-label\">' ~ data|default('oro.ui.empty'|trans) ~ '</div>', options) }}
    {% endif %}
{% endmacro %}

{#
    Render property block
    Parameters:
        title - property title
        data  - property data
        entity - the entitty instance on wich Field ACL should be checked
        fieldName - the name of field on wich Field ACL should be checked
#}
{% macro renderPropertyControlGroup(title, data, entity = null, fieldName = null) %}
    {% import _self as UIMacro %}

    {{ UIMacro.renderHtmlPropertyControlGroup(title, data|escape, entity, fieldName) }}
{% endmacro %}

{#
    Render html property block
    Parameters:
        title - property title
        data  - property data
        entity - the entitty instance on wich Field ACL should be checked
        fieldName - the name of field on wich Field ACL should be checked
#}
{% macro renderHtmlPropertyControlGroup(title, data, entity = null, fieldName = null) %}
    {% import _self as UIMacro %}

    {% if entity is defined and fieldName is defined and not is_granted('VIEW', entity, fieldName) %}
    {% else %}
        {{ UIMacro.renderControlGroup(title, '<div class=\"control-label\">' ~ data|default('oro.ui.empty'|trans) ~ '</div>') }}
    {% endif %}
{% endmacro %}

{#
    Render collapsible html property block
    Parameters:
        title - property title
        data  - property data
        entity - the entitty instance on wich Field ACL should be checked
        fieldName - the name of field on wich Field ACL should be checked
#}
{% macro renderCollapsibleHtmlProperty(title, data, entity, fieldName, moreText = 'Show more', lessText = 'Show less') %}
    {% if is_granted('VIEW', entity, fieldName) %}
        {% set collapseView = {
            storageKey: 'collapseBlock[' ~ oro_class_name(entity) ~ ']',
            uid: '[' ~ title ~ '][' ~ entity.id ~ ']',
            animationSpeed: 0,
            closeClass: 'overflows',
            checkOverflow: true,
            open: false
        } %}
        <div class=\"collapse-block\" data-page-component-collapse=\"{{ collapseView|json_encode }}\">
            {% import _self as UIMacro %}

            {{ UIMacro.renderAttribute(title,
                '<div class=\"control-label\" data-collapse-container>' ~
                    data|default('oro.ui.empty'|trans) ~
                '</div>' ~
                '<a href=\"#\" class=\"control-label toggle-more\" data-collapse-trigger>' ~ moreText|trans ~ '</a>' ~
                '<a href=\"#\" class=\"control-label toggle-less\" data-collapse-trigger>' ~ lessText|trans ~ '</a>'
            ) }}
        </div>
    {% endif %}
{% endmacro %}

{#
    Render collapsible html block
    Parameters:
        data  - rendered data
        entity - the entitty instance on wich Field ACL should be checked
        fieldName - the name of field on wich Field ACL should be checked
#}
{% macro renderCollapsibleHtml(data, entity, fieldName, moreText = 'Show more', lessText = 'Show less') %}
    {% if is_granted('VIEW', entity, fieldName) and data is not empty %}
        {% set collapseView = {
            storageKey: 'collapseBlock[' ~ oro_class_name(entity) ~ ']',
            uid: '[' ~ fieldName ~ '][' ~ entity.id ~ ']',
            animationSpeed: 0,
            closeClass: 'overflows',
            checkOverflow: true,
            open: false
        } %}
        <div class=\"collapse-block\" data-page-component-collapse=\"{{ collapseView|json_encode }}\">
            <div class=\"control-label\" data-collapse-container>
                {{ data|raw }}
            </div>
            <a href=\"#\" class=\"control-label toggle-more\" data-collapse-trigger>{{ moreText|trans }}</a>
            <a href=\"#\" class=\"control-label toggle-less\" data-collapse-trigger>{{ lessText|trans }}</a>
        </div>
    {% endif %}
{% endmacro %}

{#
    Render html property block. HTML rendering may be switched off with system config.
    Parameters:
        title - property title
        data  - property data
#}
{% macro renderSwitchableHtmlProperty(title, data) %}
    {% import _self as UIMacro %}

    {% if oro_config_value('oro_form.wysiwyg_enabled') %}
        {% set data = data|oro_html_sanitize %}
    {%  else %}
        {% set data = data|striptags|nl2br %}
    {% endif %}

    {{ UIMacro.renderAttribute(title, '<div class=\"control-label html-property\">' ~ data|default('oro.ui.empty'|trans) ~ '</div>') }}
{% endmacro %}

{#
    Render color property block
    Parameters:
        title - property title
        data  - property data
        empty - a value which should be used if data is empty
#}
{% macro renderColorProperty(title, data, empty) %}
    {% import _self as UIMacro %}

    {% if data is not none %}
       {% set data = '<i class=\"color hide-text\" title=\"' ~ data ~ '\" style=\"background-color: ' ~ data ~ ';\">' ~ data ~ '</i>' %}
    {% endif %}
    {{ UIMacro.renderAttribute(title, '<div class=\"control-label\">' ~ data|default(empty)|default('oro.ui.empty'|trans) ~ '</div>') }}
{% endmacro %}

{#
    Create the link
    Parameters - array:
        [
            'path'  - button url
            'class' - default class
            'aCss'  - additional button class
            'title' - button title
            'iCss'  - css class for 'i' tag (icon)
            'label' - button label
            'role'  - link role HTML attribute
        ]
#}
{% macro link(parameters) %}
    {# need to remove spaces just before label #}
    {% set iconHtml = '' %}
    {% if parameters.iCss is defined and parameters.iCss %}
        {% set iconHtml %}
        <span class=\"{{ parameters.iCss }}\" aria-hidden=\"true\">
            {% if not parameters.noIconText|default(false)%}
                <span class=\"sr-only\">{{ parameters.label }}</span>
            {% endif %}
        </span>
        {% endset %}
    {% else %}
    {% endif %}
    {% apply spaceless %}
    <a href=\"{{ parameters.path }}\"
        {% if (parameters.id is defined) %}
            id=\"{{ parameters.id }}\"
        {% endif %}
        {% if parameters.data is defined %}
            {% for dataItemName,dataItemValue in parameters.data %}
                data-{{ dataItemName }}=\"{{ dataItemValue|e('html_attr')|raw }}\"
            {% endfor %}
        {% endif %}
        class=\"{{ parameters.class is defined? parameters.class : '' }} {{ parameters.aCss is defined? parameters.aCss : '' }}\"
        {% if parameters.role is defined %}role=\"{{ parameters.role }}\"{% endif %}
        {% if parameters.title is defined and parameters.title is not empty %}title=\"{{ parameters.title }}\"{% endif %}>{{ iconHtml|trim|raw }}
        {{- parameters.label|trim }}
    </a>
    {% endapply %}
{% endmacro %}

{#
    Create the button
    Parameters - array:
        [
            'path'  - button url
            'aCss'  - additional button class
            'title' - button title
            'iCss'  - css class for 'i' tag (icon)
            'label' - button label
        ]
#}
{% macro button(parameters) %}
    {% import _self as UIMacro %}

    <div class=\"pull-left btn-group icons-holder\">
        {{ UIMacro.link(parameters|merge({'class': 'btn back icons-holder-text', 'role': 'button'})) }}
    </div>
{% endmacro %}

{#
    Create dropdown button
    Parameters - array:
        [
            'label' - button label
            'elements' - dropdown elements
            'html' - html from placeholder
            'aCss'  - additional drop down class
        ]
#}
{% macro dropdownButton(parameters) %}
    {% import _self as UIMacro %}

    {% set togglerId = 'dropdown-'|uniqid %}
    <div class=\"btn-group\">
        <a href=\"#\" role=\"button\" id=\"{{ togglerId }}\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\"
           aria-haspopup=\"true\" aria-expanded=\"false\" data-placement=\"bottom-end\"
           data-inherit-parent-width=\"loosely\"
        >
            {% if parameters.iCss is defined %}
                <span class=\"{{ parameters.iCss }}\" aria-hidden=\"true\"></span>
            {% endif %}
            {{ parameters.label }}
        </a>
        <ul class=\"dropdown-menu {{ parameters.aCss is defined? parameters.aCss : '' }}\" role=\"menu\" aria-labelledby=\"{{ togglerId }}\">
            {% if parameters.elements is defined and parameters.elements is not empty %}
                {% for item in parameters.elements %}
                    {{ UIMacro.dropdownItem(item) }}
                {% endfor %}
            {% endif %}
            {% if parameters.html is defined and parameters.html is not empty %}
                {{ parameters.html|raw }}
            {% endif %}
        </ul>
    </div>
{% endmacro %}

{#
    Create the dropdown button item
    Parameters - array:
        [
            'path'  - button url
            'aCss'  - additional button class
            'title' - button title
            'iCss'  - css class for 'i' tag (icon)
            'label' - button label
        ]
#}
{% macro dropdownItem(parameters) %}
    {% import _self as UIMacro %}
    <li>{{ UIMacro.link(parameters) }}</li>
{% endmacro %}

{#
    Create the dropdown button wich preserves last used button
    Parameters - array:
        [
            'html'     - original buttons markup
            'groupKey' - key, to remember last used button
            'options'  - options for pinnedDropdownButtonProcessor widget
        ]
#}
{% macro pinnedDropdownButton(parameters) %}
    {% import _self as UIMacro %}

    {% if isDesktopVersion() or parameters.mobileEnabled|default(false) %}
        {% set options = parameters.options|default({}) %}
        {% set options = options|merge({
            widgetModule: options.widgetModule|default('oroui/js/content-processor/pinned-dropdown-button'),
            widgetName: options.widgetName|default('pinnedDropdownButtonProcessor'),
            groupKey: parameters.groupKey is defined ? parameters.groupKey : '',
            useMainButtonsClone: true
        }) %}
        {% apply spaceless %}
            <div class=\"pull-right pinned-dropdown\"
                 {{ UIMacro.renderAttributes(parameters.dataAttributes|default({})|merge({
                     'page-component-module': 'oroui/js/app/components/jquery-widget-component',
                     'page-component-options': options
                 })) }}>
                {{ parameters.html|raw }}
            </div>
        {% endapply %}
    {% else %}
        {{ parameters.html|raw }}
    {% endif %}
{% endmacro %}

{#
    Predefined pinnedDropdownButton's settings for save button
#}
{% macro dropdownSaveButton(parameters) %}
    {% import _self as UIMacro %}
    {% set parameters = {
        'groupKey': 'saveButtons',
        'options': {
            'moreButtonAttrs': {
                'class': 'btn-success'
            }
        }
    }|merge(parameters|default({})) %}
    {{ UIMacro.pinnedDropdownButton(parameters) }}
{% endmacro %}

{#
    Create 'Cancel' button
    Parameters
        'path' - button url
        'label' - button label | 'Cancel' by default
#}
{% macro cancelButton(path, label) %}
    {% import _self as UIMacro %}

    {% if label is empty %}
        {% set label = 'Cancel'|trans %}
    {% endif %}
    {{ UIMacro.button({'path' : path, 'title' : label, 'label' : label, data: {action: 'cancel'} }) }}
{% endmacro %}

{#
    Create 'Edit' button
    Parameters - array:
        [
            'path'  - button url
            'aCss'  - additional button class
            'title' - button title | 'Edit' by default
            'label' - button label | 'Edit' by default
            'entity_label' - if specified will be added for title and label
        ]
#}
{% macro editButton(parameters) %}
    {% import _self as UIMacro %}

    {% set iCss = ['fa-pencil-square-o'] %}
    {% set aCss = ['edit-button', 'main-group'] %}
    {% if parameters.iCss is defined %}
        {% set iCss = parameters.iCss|split(' ')|merge(iCss) %}
    {% endif %}
    {% if parameters.aCss is defined %}
        {% set aCss = parameters.aCss|split(' ')|merge(aCss) %}
    {% endif %}
    {% if parameters.title is defined %}
        {% set title = parameters.title %}
    {% else %}
        {% set title = parameters.entity_label is defined
            ? 'oro.ui.edit_entity'|trans({'%entityName%': parameters.entity_label})
            : 'oro.ui.edit'|trans
        %}
    {% endif %}
    {% set label = parameters.label is defined
        ? parameters.label
        : 'oro.ui.edit'|trans
    %}
    {% set parameters = parameters|merge({
        'iCss': iCss|join(' '),
        'aCss': aCss|join(' '),
        'title': title,
        'label': label
    }) %}

    {# Add URL parameters to button path #}
    {% set parameters = parameters|merge({ 'path' : oro_url_add_query(parameters['path']) }) %}

    {{ UIMacro.button(parameters) }}
{% endmacro %}

{#
    Create 'add' button
    Parameters - array:
        [
            'path'  - button url
            'aCss'  - additional button class
            'title' - button title | 'Create' by default
            'label' - button label | 'Create' by default
            'entity_label' - if specified will be added for title and label
        ]
#}
{% macro addButton(parameters) %}
    {% if parameters.label is defined %}
        {% set label = parameters.label %}
    {% else %}
        {% set label = parameters.entity_label is defined
            ? 'oro.ui.create_entity'|trans({'%entityName%': parameters.entity_label})
            : 'oro.ui.create'|trans
        %}
    {% endif %}
    {% if parameters.title is defined %}
        {% set title = parameters.title %}
    {% else %}
        {% set title = parameters.entity_label is defined
            ? 'oro.ui.create_entity'|trans({'%entityName%': parameters.entity_label})
            : 'oro.ui.create'|trans
        %}
    {% endif %}
    <a href=\"{{ parameters.path }}\"
        class=\"btn main-group btn-primary pull-right {{ parameters.aCss is defined? parameters.aCss : '' }}\"
        title=\"{{ title }}\"
    >
        {{- label -}}
    </a>
{% endmacro %}

{#
    Delete button with javascript handler
    Parameters - array:
        [
            'aCss' - additional css class for 'a' tag
            'dataId' - data-id parameter
            'dataMessage' - message before delete record | 'Are you sure you want to delete this %entity_label%?' by default
            'dataRedirect' - url to redirect after delete | '%entity_label% deleted' by default
            'dataUrl' - data-url parameter
            'title' - button title | 'Delete' by default
            'label' - button label | 'Delete' by default
            'entity_label' - if specified will be added for title, label and messages| 'item' by default
            'disabled' - if true this control is rendered as disabled
        ]
#}
{% macro deleteButton(parameters) %}
    {% import _self as UIMacro %}

    {% set aCss = 'btn icons-holder-text' %}

    {% if parameters.disabled is defined and parameters.disabled %}
        {% set aCss = aCss ~ ' disabled' %}
    {% endif %}

    {% if parameters.aCss is defined %}
        {% set aCss = aCss ~ ' ' ~ parameters.aCss %}
    {% endif %}

    {% set parameters = parameters|merge({'aCss': aCss}) %}

    <div class=\"pull-left btn-group icons-holder\">
        {{ UIMacro.deleteLink(parameters) }}
    </div>
{% endmacro %}

{% macro deleteLink(parameters) %}
    {% import _self as UIMacro %}

    {% set entityLabel = parameters.entity_label is defined ? parameters.entity_label : 'oro.ui.item'|trans %}
    {% set label = parameters.label is defined ? parameters.label : 'oro.ui.delete'|trans %}
    {% if parameters.title is defined %}
        {% set title = parameters.title %}
    {% else %}
        {% set title = parameters.entity_label is defined
            ? 'oro.ui.delete_entity'|trans({'%entityName%': parameters.entity_label})
            : 'oro.ui.delete'|trans
        %}
    {% endif %}

    {% set message = parameters.dataMessage is defined ? parameters.dataMessage : 'oro.ui.delete_confirm'|trans({ '%entity_label%' : entityLabel }) %}
    {% set successMessage = parameters.successMessage is defined ? parameters.successMessage : 'oro.ui.delete_message'|trans({ '%entity_label%' : entityLabel }) %}
    {% set url = parameters.dataUrl is defined ? parameters.dataUrl : '' %}
    {% set linkParams = {
        'data': {
            'message': message,
            'success-message': successMessage,
            'url': url
        },
        'iCss': parameters.iCss is defined ? parameters.iCss: 'fa-trash-o',
        'aCss': parameters.aCss,
        'title': title,
        'label': label,
        'path': '#'
    } %}


    {% if (parameters.dataId is defined) %}
        {% set data = linkParams.data|merge({'id': parameters.dataId}) %}
        {% set linkParams = linkParams|merge({ 'data': data }) %}
    {% endif %}
    {% if parameters.dataRedirect is defined %}
        {% set data = linkParams.data|merge({'redirect': parameters.dataRedirect}) %}
        {% set linkParams = linkParams|merge({ 'data': data }) %}
    {% endif %}
    {% if parameters.data is defined %}
        {% for dataItemName,dataItemValue in parameters.data %}
            {% set data = linkParams.data|merge({(dataItemName): dataItemValue}) %}
            {% set linkParams = linkParams|merge({ 'data': data }) %}
        {% endfor %}
    {% endif %}
    {{ UIMacro.link(linkParams) }}
{% endmacro %}

{#
    A link with a Javascript handler

    Parameters - array:
        [
            'class' - default class
            'aCss' - additional css class for 'a' tag
            'iCss' - additional css class for 'i' tag
            'dataId' - data-id parameter
            'dataUrl' - data-url parameter
            'dataRedirect' - url to redirect to after the operation is finished
            'successMessage' - message to display after the operation is finished
            'title' - button title
            'label' - button label
            'labelInIcon' - defines whether the label is included in the icon (true by default)
            'visible' - defines whether the button is visible (true by default)
            'dataAttributes' - additional data attributes
        ]
#}
{% macro clientLink(parameters) %}
    {% import _self as UIMacro %}
    {% set parameters = parameters|merge({
        class: parameters.class|default('') ~ (parameters.aCss is defined ? ' ' ~ parameters.aCss : '')
    })%}
    {% apply spaceless %}
        <a href=\"#\"
            {%- if (parameters.dataUrlRaw is defined) -%}
                data-url=\"{{ parameters.dataUrlRaw|raw }}\"
            {% elseif (parameters.dataUrl is defined) %}
                data-url=\"{{ parameters.dataUrl }}\"
            {%- endif -%}
            {{- UIMacro.clientControlAttrs(parameters) -}}>
            {{- UIMacro.clientControlIcon(parameters) -}}
            {{- parameters.label is defined ? parameters.label : '' -}}
        </a>
    {% endapply %}
{% endmacro %}

{#
    Attributes for a control with a Javascript handler

    Parameters - array:
        [
            'class' - default class
            'id' - HTML attribute id
            'dataId' - HTML attribute data-id
            'successMessage' - message to display after the operation is finished
            'dataRedirect' - url to redirect to after the operation is finished
            'role' - HTML attribute role
            'ariaSelected' - HTML attribute aria-selected
            'ariaControls' - HTML attribute aria-controls
            'ariaLabel' - HTML attribute aria-label
            'visible' - defines whether the label is included in the icon (true by default)
            'widget' - options to define a widget on the control
            'pageComponent' - options to define a page-component on the control
            'dataAttributes' - additional HTML data attributes
        ]
#}
{% macro clientControlAttrs(parameters) %}
    {% import _self as UIMacro %}
    {% if (parameters.class is defined) %}
        class=\"{{ parameters.class }}\"
    {% endif %}
    {% if (parameters.id is defined) %}
        id=\"{{ parameters.id }}\"
    {% endif %}
    {% if (parameters.title is defined) %}
        title=\"{{ parameters.title }}\"
    {% endif %}
    {% if (parameters.dataId is defined) %}
        data-id=\"{{ parameters.dataId }}\"
    {% endif %}
    {% if (parameters.dataIntention is defined) %}
        data-intention=\"{{ parameters.dataIntention }}\"
    {% endif %}
    {% if (parameters.successMessage is defined) %}
        data-success-message=\"{{ parameters.successMessage }}\"
    {% endif %}
    {% if parameters.dataRedirect is defined %}
        data-redirect=\"{{ parameters.dataRedirect }}\"
    {% endif %}
    {% if parameters.role is defined %}
        role=\"{{ parameters.role }}\"
    {% endif %}
    {% if parameters.dir is defined %}
        dir=\"{{ parameters.dir }}\"
    {% endif %}
    {% if parameters.ariaSelected is defined %}
        aria-selected=\"{{ parameters.ariaSelected }}\"
    {% endif %}
    {% if parameters.ariaControls is defined %}
        aria-controls=\"{{ parameters.ariaControls }}\"
    {% endif %}
    {% if (parameters.ariaLabel is defined) %}
        aria-label=\"{{ parameters.ariaLabel }}\"
    {% endif %}
    {% if (parameters.ariaHaspopup is defined) %}
        aria-haspopup=\"{{ parameters.ariaHaspopup ? 'true' : 'false' }}\"
    {% endif %}
    {% if (parameters.visible is defined and not parameters.visible) %}
        style=\"display: none\"
    {% endif %}
    {% if parameters.widget is defined and parameters.widget|length %}
        {% set options = parameters.widget %}
        {%- if (options.createOnEvent is not defined) -%}
            {% set options = options|merge({
                'createOnEvent' : options.event|default('click')
            }) %}
        {%- endif -%}
        {{ UIMacro.renderWidgetAttributes(options) }}
    {% endif %}
    {%- if parameters.pageComponent is defined -%}
        {{ UIMacro.renderPageComponentAttributes(parameters.pageComponent) }}
    {%- endif -%}
    {%- if parameters.dataAttributes is defined and parameters.dataAttributes|length -%}
        {{ UIMacro.renderAttributes(parameters.dataAttributes) }}
    {%- endif -%}
{% endmacro %}

{#
    An icon for a link/button control with a Javascript handler

    Parameters - array:
        [
            'iCss' - additional css class for 'span' tag
            'label' - control label
            'labelInIcon' - defines whether the label is included in the icon (true by default)
        ]
#}
{% macro clientControlIcon(parameters) %}
    {% import _self as UIMacro %}
    {% apply spaceless %}
    {%- set labelInIcon = parameters.labelInIcon is defined ? parameters.labelInIcon : true -%}
    {%- if (parameters.iCss is defined) -%}
        <span class=\"{{ parameters.iCss }}\" aria-hidden=\"true\">
            {%- if (parameters.label is defined and labelInIcon) -%}
                <span class=\"sr-only\">{{- parameters.label -}}</span>
            {%- endif -%}
        </span>
    {%- endif -%}
    {% endapply %}
{% endmacro %}

{#
    A button with a Javascript handler

    Parameters - array:
        [
            'class' - default class
            'btnCss' - additional css class for 'button' tag
            'iCss' - additional css class for 'span' tag
            'ariaLabel' - aria-label text for button
            'dataId' - data-id parameter
            'dataRedirect' - url to redirect to after the operation is finished
            'successMessage' - message to display after the operation is finished
            'label' - button label
            'labelInIcon' - defines whether the label is included in the icon (true by default)
            'visible' - defines whether the button is visible (true by default)
            'dataAttributes' - additional HTML data attributes
        ]
#}
{% macro clientBtn(parameters) %}
    {% import _self as UIMacro %}
    {% set parameters = parameters|merge({
        class: parameters.class|default('') ~ ' ' ~ parameters.btnCss|default('btn')
    })%}
    {% apply spaceless %}
        <button {{- UIMacro.clientControlAttrs(parameters) -}}
            {% if (parameters.title is defined) %}
                title=\"{{ parameters.title }}\"
            {% endif %}>
            {{- UIMacro.clientControlIcon(parameters) -}}
            {{- parameters.label is defined ? parameters.label : '' -}}
        </button>
    {% endapply %}
{% endmacro %}

{#
    Renders page component attributes passed in array
#}
{% macro renderPageComponentAttributes(pageComponent) %}
    {% for key,value in pageComponent %}
        {% if key == 'layout' %}
            data-layout=\"{{ pageComponent.layout }}\"
        {% elseif value is iterable %}
            data-page-component-{{ key }}=\"{{ value|json_encode }}\"
        {% else %}
            data-page-component-{{ key }}=\"{{ value }}\"
        {% endif %}
    {% endfor %}
{% endmacro %}

{#
    Renders attributes for widget

    Parameters: options array for widget
#}
{% macro renderWidgetAttributes(options) %}
    {% import _self as UIMacro %}

    {% set pageComponent = {
        module:  \"oroui/js/app/components/widget-component\",
        options: options
    }  %}
    {% if options.options.pageComponentName is defined %}
        {% set pageComponent = pageComponent|merge({name: options.options.pageComponentName}) %}
    {% endif %}
    {{ UIMacro.renderPageComponentAttributes(pageComponent) }}
{% endmacro %}
{#
    @deprecated
    Please use renderWidgetAttributes() with createOnEvent option specified instead
#}
{% macro renderWidgetDataAttributes(options) %}
    {% import _self as UIMacro %}

    {% if (options.createOnEvent is not defined) %}
        {% set options = options|merge({
            'createOnEvent' : options.event|default('click')
        }) %}
    {% endif %}
    {{ UIMacro.renderWidgetAttributes(options) }}
{% endmacro %}

{% macro renderAttributes(options, prefix) %}
    {% for name, value in options %}
        {% if (value is iterable) %}
            {% set value = value|json_encode(constant('JSON_FORCE_OBJECT')) %}
        {% endif %}
        data-{% if prefix is not empty %}{{ prefix }}-{% endif %}{{ name }}=\"{{ value }}\"
    {% endfor %}
{% endmacro %}

{#
    A button with javascript handler
    Parameters - array:
        [
            'class' - default class
            'aCss' - additional css class for 'a' tag
            'iCss' - additional css class for 'i' tag
            'dataId' - data-id parameter
            'dataUrl' - data-url parameter
            'dataRedirect' - url to redirect after an operation finished
            'successMessage' - a message which will be shown after an operation finished
            'title' - button title
            'label' - button label
            'visible' - determined whether the button is visible or not. Defaults to true
        ]
#}
{% macro clientButton(parameters) %}
    {% import _self as UIMacro %}

    {#{% espaceless %}#}
        <div class=\"pull-left btn-group icons-holder\">
            {{ UIMacro.clientLink(parameters|merge({class: 'btn icons-holder-text', role: 'button'})) }}
        </div>
    {#{% endapply %}#}
{% endmacro %}

{#
    A button that sends request to server
    Parameters - array:
        [
            'class' - default class
            'aCss' - additional css class for 'a' tag
            'iCss' - additional css class for 'i' tag
            'dataId' - data-id parameter
            'dataMethod' - request http method
            'dataUrl' - data-url parameter
            'dataRedirect' - url to redirect after an operation finished
            'successMessage' - a message which will be shown after an operation finished
            'errorMessage' - a message which will be shown if operation failed
            'title' - button title
            'label' - button label
            'visible' - determined whether the button is visible or not. Defaults to true
        ]
#}
{% macro ajaxButton(parameters) %}
    {% import _self as UIMacro %}

    <div class=\"pull-left btn-group icons-holder\">
        {{ UIMacro.ajaxLink(parameters|merge({'class': 'btn icons-holder-text', role: 'button'})) }}
    </div>
{% endmacro %}

{#
    A link that sends request to server
    Parameters - array:
        [
            'class' - default class
            'aCss' - additional css class for 'a' tag
            'iCss' - additional css class for 'i' tag
            'dataId' - data-id parameter
            'dataMethod' - request http method
            'dataUrl' - data-url parameter
            'dataRedirect' - url to redirect after an operation finished
            'successMessage' - a message which will be shown after an operation finished
            'errorMessage' - a message which will be shown if operation failed
            'title' - button title
            'label' - button label
            'visible' - determined whether the link is visible or not. Defaults to true
        ]
#}
{% macro ajaxLink(parameters) %}
    {% import _self as UIMacro %}

    {% set additionalParameters = {
        'pageComponent': {
            'module': 'oroui/js/app/components/ajax-button'
        },
        'dataAttributes': {
            'method': parameters.dataMethod is defined ? parameters.dataMethod : 'GET',
            'error-message': parameters.errorMessage is defined ? parameters.errorMessage : 'oro.ui.unexpected_error'
        }
    } %}

    {{ UIMacro.clientLink(parameters|merge(additionalParameters)) }}
{% endmacro %}

{#
    A button with javascript handler
    Parameters - array:
        [
            'class' - default class
            'aCss' - additional css class for 'a' tag
            'iCss' - additional css class for 'i' tag
            'dataId' - data-id parameter
            'dataUrl' - data-url parameter
            'dataRedirect' - url to redirect after an operation finished
            'successMessage' - a message which will be shown after an operation finished
            'title' - button title
            'label' - button label
            'visible' - determined whether the button is visible or not. Defaults to true
        ]
#}
{% macro dropdownClientItem(parameters) %}
    {% import _self as UIMacro %}

    <li>{{ UIMacro.clientLink(parameters) }}</li>
{% endmacro %}

{#
    Outputs a button with \"Save and Close\" label. After save application will show a page configured by parameter with name \"action\".
    For parameters description see documentation of saveActionButton macros.

    For backward compatibility macros supports input parameter as a label of button.
#}
{% macro saveAndCloseButton(parametersOrLabel) %}
    {% import _self as UIMacro %}

    {% set defaultParameters = {
        'class': 'btn-success',
        'label': 'Save and Close'|trans
    } %}

    {% if parametersOrLabel is iterable %}
        {% set parameters = parametersOrLabel %}
    {% else %}
        {# @deprecated since 1.10, support backward compatibility #}
        {% set parameters = {
            'label': parametersOrLabel|default('Save and Close'|trans),
            'action': 'save_and_close'
        } %}
    {% endif %}

    {% set parameters = defaultParameters|merge(parameters) %}

    {{ UIMacro.saveActionButton(parameters) }}
{% endmacro %}

{#
    Outputs a button with \"Save and Stay\" label. After save application will show a page configured by parameter with name \"action\".
    For parameters description see documentation of saveActionButton macros.

    For backward compatibility macros supports input parameter as a label of button.
#}
{% macro saveAndStayButton(parametersOrLabel) %}
    {% import _self as UIMacro %}

    {% if parametersOrLabel is iterable %}
        {% set parameters = parametersOrLabel %}
    {% else %}
        {# @deprecated since 1.10, support backward compatibility #}
        {% set parameters = {
            'label': parametersOrLabel|default('Save'|trans),
            'action': 'save_and_stay'
        } %}
    {% endif %}

    {{ UIMacro.saveActionButton(parameters) }}
{% endmacro %}

{#
    Outputs a button with \"Save and New\" label. After save application will show a page configured by parameter with name \"action\".
    For parameters description see documentation of saveActionButton macros.
#}
{% macro saveAndNewButton(parameters) %}
    {% import _self as UIMacro %}

    {% set defaultParameters = {
        'label': 'Save and New'|trans
    } %}

    {% set parameters = defaultParameters|merge(parameters) %}

    {{ UIMacro.saveActionButton(parameters) }}
{% endmacro %}

{#
    Outputs generic button with \"Save\" label and redirect behavior. Redirect is configured with parameter \"route\"
    and \"route_params\". Route params could contain paths instead of values if value will be available only after save.

    Parameters - array
        [
            'type' - button type, should be \"button\" or \"submit\"
            'class' - CSS class
            'label' - label of button
            'route' - Optional name of route to make a redirect.
            'params' - Optional list of route parameters. In case if value of parameter will be available only
                after save you can pass property path. For example: ['id': '\$id']. '\$' at the means property path.
                So when controller will handle save it will redirect to route using actual id value of entity.
            'action' - Contains data used by controller to make redirect. This value is prepared automatically
                based on route and route_params so you don't need to use this attribute directly.
        ]
#}
{% macro saveActionButton(parameters) %}
    {% import _self as UIMacro %}

    {% set defaultParameters = {
        'type' : 'submit',
        'class': 'btn-success main-group',
        'label': 'Save'|trans,
    } %}

    {% if parameters.action is defined %}
        {# @deprecated since 1.10, support backward compatibility #}
    {% elseif parameters.route is defined %}
        {# Prepare action parameter based on route #}
        {% set action = {'route': parameters.route} %}
        {% if parameters.params is defined %}
            {% set action = action|merge({'params': parameters.params}) %}
        {% endif %}
        {% set parameters = parameters|merge({'action': action|json_encode}) %}
    {% endif %}

    {% set parameters = defaultParameters|merge(parameters) %}

    {{ UIMacro.buttonType(parameters) }}
{% endmacro %}


{#
    Button macros with custom button type
    Parameters - array:
        [
            'type' - button type
            'class' - additional button css classes
            'label' - label of button
        ]
#}
{% macro buttonType(parameters) %}
    {% set defaultParameters = {
        'type' : 'button'
    } %}
    {% set parameters = defaultParameters|merge(parameters) %}
    <div class=\"btn-group\">
        <button type=\"{{ parameters.type }}\" class=\"btn {% if (parameters.class is defined) %}{{ parameters.class }}{% endif %}{% if (parameters.action is defined) %} action-button{% endif %}\"
                {% if (parameters.action is defined) %}data-action=\"{{ parameters.action }}\"{% endif %}
                {% if parameters.data is defined %}
                    {% for dataItemName,dataItemValue in parameters.data %}
                        data-{{ dataItemName }}=\"{{ dataItemValue|e('html_attr')|raw }}\"
                    {% endfor %}
                {% endif %}>
            {{ parameters.label }}
        </button>
    </div>
{% endmacro %}

{#
    Separator between buttons
#}
{% macro buttonSeparator() %}
    <div class=\"pull-left\" aria-hidden=\"true\">
        <div class=\"separator-btn\"></div>
    </div>
{% endmacro %}

{#
    Create scroll sub block for scroll block
    Parameters:
        title - title of sub block
        data - array with data fields (i.e. form_row() or attibuteRow() data)
        isForm - flag what scroll block mut contain the form
        useSpan - flag to indicate is subblock must have css class specified in spanClass parameter or not
        spanClass - css class name of subblock, if this parameter is not specified the css class is span6
#}
{% macro scrollSubblock(title, data, isForm, useSpan, spanClass) %}
    {% set spanClass = spanClass|default('responsive-cell') %}
    {#% if useSpan is not defined or useSpan == true %}
        {% set span = spanClass %}
    {% else %}
        {% set span = '' %}
    {% endif %}
    {% if span %}
        <div class=\"{{ span }}\">
    {% endif %#}
    <div class=\"{{ spanClass }}\">
    {% if title|length %}<h5 class=\"user-fieldset\"><span>{{ title }}</span></h5>{% endif %}
    {% for dataBlock in data %}
        {{ dataBlock|raw }}
    {% endfor %}
    </div>
    {#% if span %}
        </div>
    {% endif %#}
{% endmacro %}

{#
    Create scroll block for scroll data area
    Parameters:
        blockId - id of block
        title - block title
        'subblocks' - array with scroll sub blocks:
            [
                'title' - title of sub block
                'data' - array with data fields (i.e. form_row() or attibuteRow() data)
            ]
        isForm - flag what scroll block mut contain the form
        contentAttributes - additional attributes for block content
        useSubBlockDivider - indicates if 'row-fluid-divider' css class should be added to a row when there are more than one subblocks
#}
{% macro scrollBlock(blockId, title, subblocks, isForm, contentAttributes, useSubBlockDivider, headerLinkContent = '') %}
    {% import _self as UIMacro %}

    {% set cols = subblocks|length %}
    <div class=\"responsive-section\">
        <h4 class=\"scrollspy-title\">{{ title }}{% if headerLinkContent is defined %}{{ headerLinkContent }}{% endif %}</h4>
        <div id=\"{{ blockId }}\" class=\"scrollspy-nav-target\"></div>
        <div class=\"section-content\">
            <div class=\"row-fluid{% if (contentAttributes is defined and contentAttributes.class is defined and contentAttributes.class|length) %} {{ contentAttributes.class }}{% endif %}{% if cols > 1 and (useSubBlockDivider is not defined or useSubBlockDivider == true) %} row-fluid-divider{% endif %}\" {{ UIMacro.attributes(contentAttributes, ['class']) }}>
                {% if isForm is defined and isForm == true %}
                    <fieldset class=\"form-horizontal\">
                {% else %}
                    <div class=\"form-horizontal\">
                {% endif %}
                    {% for subblock in subblocks %}
                        {{ UIMacro.scrollSubblock(subblock.title is defined and subblock.title|length ? subblock.title : null, subblock.data, isForm, subblock.useSpan is defined ? subblock.useSpan : true, subblock.spanClass is defined ? subblock.spanClass : '') }}
                    {% endfor %}
                {% if isForm is defined and isForm == true %}
                    </fieldset>
                {% else %}
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
{% endmacro %}

{#
    Create scroll blocks (like in view or update pages)
    Parameters:
        dataTarget - id of scroll block
        data - array with scroll data blocks
        form
    data parameter structure:
        [
            'dataBlocks' - array of blocks. each block consist of:
                [
                    'title' - title of scroll block
                    'priority' - a number that can be used to change the order of blocks
                    'class' - additional css class for scroll block menu item
                    'useSubBlockDivider' - [optional] indicates if 'row-fluid-divider' css class should be added to a row when there are more than one subblocks
                    'subblocks' - array with scroll sub blocks:
                        [
                            'title' - title of sub block
                            'data' - array with data fields (i.e. form_row() or attibuteRow() data)
                        ]
                ]
            'formErrors' - errors from the form
            'hiddenData' - additional data (hidden fields from the form)
        ]
#}
{% macro scrollData(dataTarget, data, entity, form = null) %}
    {% import _self as UIMacro %}

    {% set data = oro_ui_scroll_data_before(dataTarget, data, entity, form) %}

    {% if form is defined and form %}
        {% set isForm = true %}
    {% else %}
        {% set isForm = false %}
    {% endif %}

    {% set dataBlocks = data.dataBlocks|oro_sort_by %}

    {% if not isMobileVersion() %}
        <div id=\"{{ dataTarget }}\" class=\"navbar navbar-static scrollspy-nav\">
            <nav class=\"nav\">
                {% for navElement in dataBlocks %}
                    <a class=\"nav-link{% if loop.first %} active {% endif %}{{ navElement.class|default('') }}\"
                       href=\"#scroll-{{ loop.index }}\"
                    >{{ navElement.title }}</a>
                {% endfor %}
            </nav>
        </div>
    {% endif %}
    <div class=\"scrollspy-main-container clearfix\">
        {% if data.formErrors is defined and data.formErrors | length%}
            <div class=\"customer-info-actions container-fluid well-small alert-wrap\" role=\"alert\">
                <div class=\"alert alert-error alert-dismissible\">
                    <button class=\"close\" type=\"button\" data-dismiss=\"alert\" data-target=\".alert-wrap\" aria-label=\"{{ 'Close'|trans }}\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    {{ data.formErrors|raw|nl2br }}
                </div>
            </div>
        {% endif %}
        <div data-spy=\"scroll\" data-target=\"#{{ dataTarget }}\" data-offset=\"1\" class=\"scrollspy scrollable-container{% if isForm %} form-container{% endif %}\">
            <div class=\"container-fluid\">
            {% for scrollBlock in dataBlocks %}
                {{ UIMacro.scrollBlock(
                    \"scroll-\" ~ loop.index,
                    scrollBlock.title,
                    scrollBlock.subblocks,
                    isForm,
                    scrollBlock.content_attr is defined ? scrollBlock.content_attr : null,
                    scrollBlock.useSubBlockDivider is defined ? scrollBlock.useSubBlockDivider : true,
                    scrollBlock.headerLinkContent is defined ? scrollBlock.headerLinkContent : null
                ) }}
            {% endfor %}
            {% if data.hiddenData is defined or isForm %}
                <div class=\"hide\" data-skip-input-widgets data-layout=\"separate\">
                    {% if data.hiddenData is defined %}
                        {{ data.hiddenData|raw }}
                    {% endif %}
                    {% if isForm %}
                        {{ form_rest(form) }}
                    {% endif %}
                </div>
            {% endif %}
            </div>
        </div>
    </div>
{% endmacro %}

{#
    Render attributes of HTML element.
    Parameters:
        attr - attributes
        excludes - names of attributes which should not be rendered even if they exist in attr parameter
#}
{% macro attributes(attr, excludes) %}
    {% apply spaceless %}
        {% set attr = attr|default({}) %}
        {% for attrname, attrvalue in attr %}
            {% if not excludes is defined or not excludes[attrname] is defined %}
                {% if attrname in ['placeholder', 'title'] and translation_domain is defined %}
                    {{ attrname }}=\"{{ attrvalue|trans({}, translation_domain) }}\"
                {% else %}
                    {{ attrname }}=\"{{ attrvalue is iterable ? attrvalue|json_encode : attrvalue }}\"
                {% endif %}
            {% endif %}
        {% endfor %}
    {% endapply %}
{% endmacro %}

{#
    Render link to entity owner
    Parameters:
        entity - entity record
        renderLabel - need render default label
#}
{%- macro entityOwnerLink(entity, renderLabel = true) -%}
    {% import _self as UIMacro %}

    {% apply spaceless %}
        {%- if entity %}
            {% set ownerType = oro_get_owner_type(entity) %}
            {%- if ownerType %}
                {% if  is_granted('VIEW', entity, oro_get_owner_field_name(entity)) %}
                    {% set owner = oro_get_entity_owner(entity) %}
                    {% if owner %}
                        {% if (ownerType == 'USER') %}
                            {% set ownerPath = path('oro_user_view', {'id': owner.id}) %}
                            {% set ownerName = owner|oro_format_name %}
                        {% elseif (ownerType == 'BUSINESS_UNIT') %}
                            {% set ownerPath = path('oro_business_unit_view', {'id': owner.id}) %}
                            {% set ownerName = owner.name %}
                        {% endif %}
                        {% if ownerName is defined %}
                            {% if renderLabel %}
                                {% set entityClassName = oro_class_name(entity) %}
                                {{ oro_field_config_value(
                                        entityClassName,
                                        oro_entity_config_value(entityClassName, 'owner_field_name', 'ownership'),
                                        'label'
                                    )|trans
                                }}:
                            {% endif %}
                            {% if ownerPath is defined and is_granted('VIEW', owner) %}
                                {{ UIMacro.renderUrl(ownerPath, ownerName) }}
                            {% else %}
                                {{ ownerName }}
                            {% endif %}
                        {% endif %}
                    {% endif %}
                {% endif %}
            {% endif -%}
        {% endif -%}
    {% endapply %}
{%- endmacro -%}

{%- macro renderUrl(url, text, class, title, attributes) -%}
    {% apply spaceless %}
        {% if text is empty %}
            {% set text = url %}
        {% endif %}
        {% if title is empty %}
            {% set title = text %}
        {% endif %}
        {% if class is empty %}
            {% set class = '' %}
        {% endif %}
        {% if url is not empty %}
            <a href=\"{{ url|escape('html_attr') }}\" title=\"{{ title|escape('html_attr') }}\" class=\"{{ class }}\"
            {% if (not oro_is_url_local(url)) %} target=\"_blank\"{% endif %}
            {% for name,value in attributes|default({}) %}
                {{ name }}=\"{{ value }}\"
            {% endfor %}
            >{{ text }}</a>
        {% endif %}
    {% endapply %}
{%- endmacro -%}

{%- macro renderUrlWithActions(parameters, entity) -%}
    {% import _self as UIMacro %}

    {% set url = parameters.url|default %}
    {%- set actions %}
        {%- placeholder url_actions with {data: url, entity: entity} -%}
    {% endset -%}
    {% set actions = actions|trim %}
    <span class=\"inline-actions-element truncate{% if actions is empty %} inline-actions-element_no-actions{% endif %}\">
        <span class=\"inline-actions-element_wrapper\">
            {{ UIMacro.renderUrl(
                url,
                parameters.text|default,
                parameters.class|default,
                parameters.title|default,
                parameters.attributes|default
            ) }}
        </span>
        {% if actions is not empty -%}
            <span class=\"inline-actions-element_actions url-actions\">{{ actions|raw }}</span>
        {%- endif %}
    </span>
{%- endmacro %}

{%- macro renderPhone(phone, title) -%}
    {% if title is empty %}
        {% set title = phone %}
    {% endif %}
    {% if phone is not empty %}
        <a href=\"tel:{{ phone|escape('html_attr') }}\" title=\"{{ title|escape('html_attr') }}\" class=\"phone\"><bdo dir=\"ltr\">{{ title }}</bdo></a>
    {% endif %}
{%- endmacro -%}

{#
    Render phone number with related actions block
    Parameters:
        phone - PhoneInterface object or string
        entity - related entity record
#}
{% macro renderPhoneWithActions(phone, entity) -%}
    {% import _self as UIMacro %}

    {% if phone is not empty %}
        {%- set actions %}
            {%- placeholder phone_actions with {phone: phone, entity: entity} -%}
        {% endset -%}
        {% set actions = actions|trim %}
        <span class=\"inline-actions-element{% if actions is empty %} inline-actions-element_no-actions{% endif %}\">
            <span class=\"inline-actions-element_wrapper\">{{ UIMacro.renderPhone(phone) }}</span>
            {% if actions is not empty -%}
                <span class=\"inline-actions-element_actions phone-actions\">{{ actions|raw }}</span>
            {%- endif %}
        </span>
    {% endif %}
{%- endmacro %}

{% macro getApplicableForUnderscore(str) %}
    {{ str|replace({
        \"<script\": '<% print(\"<sc\" + \"ript\"); %>',
        \"</script\": '<% print(\"</sc\" + \"ript\"); %>',
        \"<%\": '<% print(\"<\" + \"%\"); %>',
        \"%>\": '<% print(\"%\" + \">\"); %>',
    })|raw }}
{% endmacro %}

{%- macro renderList(elements) -%}
    <ul class=\"extra-list\">
        {%- for element in elements %}
            <li class=\"extra-list-element\">{{ element }}</li>
        {% endfor -%}
    </ul>
{% endmacro %}

{%- macro renderTable(titles, rows, style) -%}
     <table class=\"{{ style }}\">
     <thead>
     <tr>
    {%- for title in titles %}
        <th>{{ title }}</th>
    {% endfor -%}
     </tr>
     </thead>
    {%- for row in rows %}
        <tr>
            {%- for element in row %}
                <td>{{ element }}</td>
            {% endfor -%}
        </tr>
    {% endfor -%}
    </table>
{% endmacro %}

{%- macro entityViewLink(entity, label, route, permission) -%}
    {% import _self as UIMacro %}

    {% if entity %}
        {% if route and is_granted(permission|default('VIEW'), entity) %}
            {{ UIMacro.renderUrl(path(route, {'id': entity.id}), label) }}
        {% else %}
            {{ label|escape }}
        {% endif %}
    {% else %}
        {{ 'oro.ui.empty'|trans }}
    {% endif %}
{%- endmacro -%}

{%- macro entityViewLinks(entities, labelProperty, route, permission) -%}
    {% import _self as UIMacro %}

    {% set links = [] %}
    {% for entity in entities %}
        {% set links = links|merge([UIMacro.entityViewLink(entity, attribute(entity, labelProperty), route, permission)]) %}
    {% endfor %}
    {{ UIMacro.renderList(links) }}
{%- endmacro -%}

{#
    Renders text that should be rendered instead of not accessible entity field
    Parameters:
        labelText - Text that should be rendered
#}
{%- macro renderDisabledLabel(labelText) -%}
    <i>{{ labelText }}</i>
{%- endmacro -%}

{#
    Renders entity label by it's field. In case if VIEW permission is notgranted, returns
    the 'view entity_name' string in case if entityLabelIfNotGranted was set and empty string otherwise
    Parameters:
        entity - Entity whete field value should be takes
        fieldName - Field name wich value should be rendered
        entityLabelIfNotGranted - Entity label that should be rendered in case if user have no access to see field value
#}
{%- macro renderEntityViewLabel(entity, fieldName, entityLabelIfNotGranted = null) -%}
    {% if entity is not null and is_granted('VIEW', entity, fieldName) %}
        {{ attribute(entity, fieldName) }}
    {% else %}
        {% if entityLabelIfNotGranted is not null %}
            {{ 'view %entityName%'|trans({'%entityName%' : entityLabelIfNotGranted|trans}) }}
        {% endif %}
    {% endif %}
{%- endmacro -%}

{%- macro renderJsTree(data, actions) -%}
    {% embed \"@OroUI/jstree.html.twig\" with {
        data: data,
        actions: actions
    } %}
    {% endembed %}
{%- endmacro -%}

{% macro app_logo(organization_name) %}
    {% set organization_name = organization_name|default('') %}
    <a href=\"{{ path('oro_default') }}\" class=\"app-logo\" title=\"{{- organization_name|trim -}}\">{{- organization_name|trim -}}</a>
{% endmacro %}

{% macro insertIcon(classNames) %}
    {% set classNames = classNames|default('') %}

    {% if classNames %}
        <span class=\"{{ classNames }}\" aria-hidden=\"true\"></span>
    {% endif %}
{% endmacro %}
{#
    Render sortable list for configuration options
    Parameters:
        widget - form widget data
        attr - block attributes
        options - additional options
            - collection_class - Main class for sortable list,
            - add_btn_label - Text label for add item button,
            - column_label - Main column label,
            - column_options_label - Options column label
            - data_page_component_module - Class for data-page-component-module attribute
            - show_form_when_empty - Show select box when a form is empty
#}
{% macro sortable_list_view(widget, attr = {}, options = {}, widgetContainerAttributes) %}
    {% import _self as UIMacro %}

    {% if widget.vars.prototype is defined %}
        {% set prototype_html = UIMacro.sortable_list_view_collection_prototype(widget, options, widgetContainerAttributes) %}
    {% endif %}

    {% set attr = attr|merge({'class': (attr.class is defined ? attr.class ~ ' ' : '') ~ 'oro-item-collection grid-container' }) %}

    {% set id = widget.vars.id ~ '_collection' %}
    <div class=\"{{ options.collection_class|default('') }} drag-n-drop-sorting-view\" {% if options.data_page_component_module is defined %} data-page-component-module=\"{{ options.data_page_component_module|escape }}\"{% endif %}>
        <div class=\"drag-n-drop-sorting-view__wrapper row-oro\" {{ UIMacro.renderPageComponentAttributes({
            module: 'oroui/js/app/components/view-component',
            options: {
                view: 'oroui/js/drag-n-drop-sorting',
                autoRender: true
            }
        }) }}>
            {% set prototype_name = widget.vars.prototype_name %}
           <div {{ UIMacro.attributes(attr) }}>
                <table class=\"grid table-hover table table-bordered\">
                    <thead>
                    <tr>
                        <th class=\"drag-n-drop-sorting-view__column\"><span>{{ options.column_label|default('') }}</span></th>
                        <th class=\"drag-n-drop-sorting-view__column_options\"><span>{{ options.column_options_label|default('') }}</span></th>
                        {% if form.mergeAllowed is defined %}
                            <th></th>
                        {% endif %}
                    </tr>
                    </thead>
                    <tbody class=\"sortable-wrapper\" data-last-index=\"{{ widget.children|length}}\" data-prototype-name=\"{{ prototype_name }}\"{% if prototype_html is defined %} data-prototype=\"{{ prototype_html|escape }}\"{% endif %}>
                    {% if widget.children|length %}
                        {% for child in widget.children %}
                            {{ UIMacro.sortable_list_view_collection_prototype(child, options, widgetContainerAttributes) }}
                        {% endfor %}
                    {% elseif options.show_form_when_empty is defined and prototype_html is defined %}
                        {{ prototype_html|replace({(prototype_name): '0'})|raw }}
                    {% endif %}
                    </tbody>
                </table>
            </div>
            <a class=\"btn add-list-item\" data-container=\".oro-item-collection tbody\" href=\"#\">
                {{ options.add_btn_label|default('') }}
            </a>
        </div>
    </div>
{% endmacro %}

{% macro sortable_list_view_collection_prototype(widget, options, widgetContainerAttributes) %}
    {% if 'collection' in widget.vars.block_prefixes %}
        {% set form = widget.vars.prototype %}
        {% set name = widget.vars.full_name ~ '[' ~ widget.vars.prototype.vars.name ~ ']' %}
    {% else %}
        {% set form = widget %}
        {% set name = widget.vars.full_name %}
    {% endif %}
    {% apply spaceless %}
    <tr data-content=\"{{ name }}\" data-validation-optional-group {{ widgetContainerAttributes }}
            class=\"{{ options.collection_class|default('') }}\">
        {{ form_widget(form) }}
    </tr>
    {% endapply %}
{% endmacro %}

{% macro render_birthday(birthday) %}
    {% if birthday is not empty %}
        {{ birthday|oro_format_date }}
        {% set age = birthday|age_string %}
        {{ age is not empty ? '(' ~ age ~ ')': null }}
    {% else %}
        {{ 'N/A'|trans }}
    {% endif %}
{% endmacro %}

{% macro badge(label, badgeClass = 'info', iconClass = 'fa-circle') %}
    <span class=\"badge badge-pill badge-{{ badgeClass }} status-{{ badgeClass }}\">
        <i class=\"icon-status-{{ badgeClass }} {{ iconClass }}\" aria-hidden=\"true\"></i>{{ label }}
    </span>
{% endmacro %}
", "@OroUI/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/macros.html.twig");
    }
}
