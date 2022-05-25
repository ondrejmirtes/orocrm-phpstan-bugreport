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

/* @OroDashboard/Index/quickLaunchpad.html.twig */
class __TwigTemplate_4d3361fae63f9bc2230b50855c22caa6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'title' => [$this, 'block_title'],
            'titleNavButtons' => [$this, 'block_titleNavButtons'],
            'navButtons' => [$this, 'block_navButtons'],
            'widgets_content' => [$this, 'block_widgets_content'],
            'widgets' => [$this, 'block_widgets'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["bap"]) || array_key_exists("bap", $context) ? $context["bap"] : (function () { throw new RuntimeError('Variable "bap" does not exist.', 1, $this->source); })()), "layout", [], "any", false, false, false, 1), "@OroDashboard/Index/quickLaunchpad.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDashboard/Index/quickLaunchpad.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDashboard/Index/quickLaunchpad.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDashboard/Index/quickLaunchpad.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 3));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"layout-content dashboard-container-wrapper\">
        <div class=\"container-fluid page-title\">
            <div class=\"navigation navbar-extra navbar-extra-right\">
                <div class=\"row\">
                    ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 15
        echo "                    ";
        $this->displayBlock('titleNavButtons', $context, $blocks);
        // line 43
        echo "                </div>
            </div>
        </div>
        ";
        // line 46
        $this->displayBlock('widgets_content', $context, $blocks);
        // line 60
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("title", $this->getTemplateName(), 8));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "                        <div class=\"pull-left pull-left-extra\">
                            <div class=\"pull-left\">
                                <h1 class=\"oro-subtitle\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.title.quick_launchpad"), "html", null, true);
        echo "</h1>
                            </div>
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 15
    public function block_titleNavButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("titleNavButtons", $this->getTemplateName(), 15));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titleNavButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titleNavButtons"));

        // line 16
        echo "                        <div class=\"pull-right title-buttons-container\">
                            ";
        // line 17
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("dashboard_navButtons_before", $context)) ? (_twig_default_filter((isset($context["dashboard_navButtons_before"]) || array_key_exists("dashboard_navButtons_before", $context) ? $context["dashboard_navButtons_before"] : (function () { throw new RuntimeError('Variable "dashboard_navButtons_before" does not exist.', 17, $this->source); })()), "dashboard_navButtons_before")) : ("dashboard_navButtons_before")), array());
        // line 18
        echo "
                            ";
        // line 19
        $this->displayBlock('navButtons', $context, $blocks);
        // line 40
        echo "                            ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("dashboard_navButtons_after", $context)) ? (_twig_default_filter((isset($context["dashboard_navButtons_after"]) || array_key_exists("dashboard_navButtons_after", $context) ? $context["dashboard_navButtons_after"] : (function () { throw new RuntimeError('Variable "dashboard_navButtons_after" does not exist.', 40, $this->source); })()), "dashboard_navButtons_after")) : ("dashboard_navButtons_after")), array());
        // line 41
        echo "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 19
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 19));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 20
        echo "                                ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroDashboard/Index/quickLaunchpad.html.twig", 20)->unwrap();
        // line 21
        echo "
                                ";
        // line 22
        if ((twig_length_filter($this->env, (isset($context["dashboards"]) || array_key_exists("dashboards", $context) ? $context["dashboards"] : (function () { throw new RuntimeError('Variable "dashboards" does not exist.', 22, $this->source); })())) > 1)) {
            // line 23
            echo "                                    ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroDashboard/Index/quickLaunchpad.html.twig", 23)->unwrap();
            // line 24
            echo "
                                    <div class=\"dashboard-selector-container pull-left\">
                                        <label for=\"dashboard_selector\">";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.entity_plural_label"), "html", null, true);
            echo ":</label>
                                        <select id=\"dashboard_selector\" ";
            // line 27
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "orodashboard/js/app/views/dashboard-change-view"]], 27, $context, $this->getSourceContext());
            // line 29
            echo ">
                                            <option>";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dashboard.title.chose_dashboard"), "html", null, true);
            echo "</option>
                                            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dashboards"]) || array_key_exists("dashboards", $context) ? $context["dashboards"] : (function () { throw new RuntimeError('Variable "dashboards" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dashboardModel"]) {
                // line 32
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dashboardModel"], "id", [], "any", false, false, false, 32), "html", null, true);
                echo "\">
                                                    ";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["dashboardModel"], "getLabel", [], "method", false, false, false, 33)), "html", null, true);
                echo "
                                                </option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboardModel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                                        </select>
                                    </div>
                                ";
        }
        // line 39
        echo "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 46
    public function block_widgets_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("widgets_content", $this->getTemplateName(), 46));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widgets_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widgets_content"));

        // line 47
        echo "            <div class=\"container-fluid scrollable-container\">
                <div class=\"row launchpad-container\">
                ";
        // line 49
        $this->displayBlock('widgets', $context, $blocks);
        // line 57
        echo "                </div>
            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 49
    public function block_widgets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("widgets", $this->getTemplateName(), 49));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widgets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widgets"));

        // line 50
        echo "                    <div class=\"launchpad-first-column\">
                        ";
        // line 51
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("quick_launchpad_left_column", $context)) ? (_twig_default_filter((isset($context["quick_launchpad_left_column"]) || array_key_exists("quick_launchpad_left_column", $context) ? $context["quick_launchpad_left_column"] : (function () { throw new RuntimeError('Variable "quick_launchpad_left_column" does not exist.', 51, $this->source); })()), "quick_launchpad_left_column")) : ("quick_launchpad_left_column")), array());
        // line 52
        echo "                    </div>
                    <div class=\"launchpad-second-column\">
                        ";
        // line 54
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("quick_launchpad_right_column", $context)) ? (_twig_default_filter((isset($context["quick_launchpad_right_column"]) || array_key_exists("quick_launchpad_right_column", $context) ? $context["quick_launchpad_right_column"] : (function () { throw new RuntimeError('Variable "quick_launchpad_right_column" does not exist.', 54, $this->source); })()), "quick_launchpad_right_column")) : ("quick_launchpad_right_column")), array());
        // line 55
        echo "                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroDashboard/Index/quickLaunchpad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 55,  320 => 54,  316 => 52,  314 => 51,  311 => 50,  298 => 49,  283 => 57,  281 => 49,  277 => 47,  264 => 46,  251 => 39,  246 => 36,  237 => 33,  232 => 32,  228 => 31,  224 => 30,  221 => 29,  219 => 27,  215 => 26,  211 => 24,  208 => 23,  206 => 22,  203 => 21,  200 => 20,  187 => 19,  173 => 41,  170 => 40,  168 => 19,  165 => 18,  163 => 17,  160 => 16,  147 => 15,  130 => 11,  126 => 9,  113 => 8,  99 => 60,  97 => 46,  92 => 43,  89 => 15,  87 => 8,  81 => 4,  68 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends bap.layout %}

{% block content %}
    <div class=\"layout-content dashboard-container-wrapper\">
        <div class=\"container-fluid page-title\">
            <div class=\"navigation navbar-extra navbar-extra-right\">
                <div class=\"row\">
                    {% block title %}
                        <div class=\"pull-left pull-left-extra\">
                            <div class=\"pull-left\">
                                <h1 class=\"oro-subtitle\">{{ 'oro.dashboard.title.quick_launchpad'|trans }}</h1>
                            </div>
                        </div>
                    {% endblock title %}
                    {% block titleNavButtons %}
                        <div class=\"pull-right title-buttons-container\">
                            {% placeholder dashboard_navButtons_before %}

                            {% block navButtons %}
                                {% import '@OroUI/macros.html.twig' as UI %}

                                {% if dashboards|length > 1 %}
                                    {% import '@OroUI/macros.html.twig' as UI %}

                                    <div class=\"dashboard-selector-container pull-left\">
                                        <label for=\"dashboard_selector\">{{ 'oro.dashboard.entity_plural_label'|trans }}:</label>
                                        <select id=\"dashboard_selector\" {{ UI.renderPageComponentAttributes({
                                            view: 'orodashboard/js/app/views/dashboard-change-view'
                                        }) }}>
                                            <option>{{ 'oro.dashboard.title.chose_dashboard'|trans }}</option>
                                            {% for dashboardModel in dashboards %}
                                                <option value=\"{{ dashboardModel.id }}\">
                                                    {{ dashboardModel.getLabel()|trans }}
                                                </option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                {% endif %}
                            {% endblock navButtons %}
                            {% placeholder dashboard_navButtons_after %}
                        </div>
                    {% endblock titleNavButtons %}
                </div>
            </div>
        </div>
        {% block widgets_content %}
            <div class=\"container-fluid scrollable-container\">
                <div class=\"row launchpad-container\">
                {% block widgets %}
                    <div class=\"launchpad-first-column\">
                        {% placeholder quick_launchpad_left_column %}
                    </div>
                    <div class=\"launchpad-second-column\">
                        {% placeholder quick_launchpad_right_column %}
                    </div>
                {% endblock widgets %}
                </div>
            </div>
        {% endblock widgets_content %}
    </div>
{% endblock content %}
", "@OroDashboard/Index/quickLaunchpad.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DashboardBundle/Resources/views/Index/quickLaunchpad.html.twig");
    }
}
