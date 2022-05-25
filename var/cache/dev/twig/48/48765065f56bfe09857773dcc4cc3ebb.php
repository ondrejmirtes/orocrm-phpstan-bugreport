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

/* @OroEmail/Email/view.html.twig */
class __TwigTemplate_d5ea1c43f6c47d76f9e10b32103997c6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageHeader' => [$this, 'block_pageHeader'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'stats' => [$this, 'block_stats'],
            'navButtons' => [$this, 'block_navButtons'],
            'content_data' => [$this, 'block_content_data'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return "@OroUI/actions/view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/Email/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/view.html.twig"));

        // line 6
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/Email/view.html.twig", 6)->unwrap();
        // line 7
        $macros["EA"] = $this->macros["EA"] = $this->loadTemplate("@OroEmail/macros.html.twig", "@OroEmail/Email/view.html.twig", 7)->unwrap();
        // line 8
        $context["name"] = _twig_default_filter($this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8)), "N/A");

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%subject%" => $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlStripTags(twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })()), "subject", [], "any", false, false, false, 9)), "%username%" => (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 9, $this->source); })())]]);
        // line 5
        $this->parent = $this->loadTemplate("@OroUI/actions/view.html.twig", "@OroEmail/Email/view.html.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 11));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 12
        echo "    ";
        $context["breadcrumbs"] = ["entity" =>         // line 13
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_email_user_emails"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.entity_plural_label"), "entityTitle" => $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlStripTags(twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 16, $this->source); })()), "subject", [], "any", false, false, false, 16))];
        // line 18
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 21
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("breadcrumb", $this->getTemplateName(), 21));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 22
        echo "    ";
        $context["breadcrumbs"] = [0 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.menu.user_emails")]];
        // line 25
        echo "    ";
        $this->loadTemplate("@OroNavigation/Menu/breadcrumbs.html.twig", "@OroEmail/Email/view.html.twig", 25)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 28
    public function block_stats($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stats", $this->getTemplateName(), 28));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        // line 29
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.created_at"), "html", null, true);
        echo ": ";
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 29, $this->source); })()), "entity", [], "any", false, false, false, 29), "created", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 29, $this->source); })()), "entity", [], "any", false, false, false, 29), "created", [], "any", false, false, false, 29)), "html", null, true))) : (print ("N/A")));
        echo "</li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 32
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 32));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 34
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 34));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 35
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/Email/view.html.twig", 35)->unwrap();
        // line 36
        echo "
    ";
        // line 37
        $context["id"] = "email-profile";
        // line 38
        echo "    ";
        $context["attributes"] = [0 => twig_call_macro($macros["UI"], "macro_attibuteRow", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.sent_at.label"), $this->extensions['Oro\Bundle\LocaleBundle\Twig\DateTimeOrganizationExtension']->formatDateTime(twig_get_attribute($this->env, $this->source,         // line 39
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 39, $this->source); })()), "sentAt", [], "any", false, false, false, 39))], 39, $context, $this->getSourceContext()), 1 => twig_call_macro($macros["UI"], "macro_attibuteRow", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.from_name.label"), twig_call_macro($macros["EA"], "macro_email_address", [twig_get_attribute($this->env, $this->source,         // line 40
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 40, $this->source); })()), "fromEmailAddress", [], "any", false, false, false, 40), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 40, $this->source); })()), "fromName", [], "any", false, false, false, 40)], 40, $context, $this->getSourceContext())], 40, $context, $this->getSourceContext()), 2 => twig_call_macro($macros["UI"], "macro_attibuteRow", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To"), twig_call_macro($macros["EA"], "macro_recipient_email_addresses", [twig_get_attribute($this->env, $this->source,         // line 41
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 41, $this->source); })()), "recipients", [0 => "to"], "method", false, false, false, 41)], 41, $context, $this->getSourceContext())], 41, $context, $this->getSourceContext())];
        // line 43
        echo "
    ";
        // line 44
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 44, $this->source); })()), "recipients", [0 => "cc"], "method", false, false, false, 44)) > 0)) {
            // line 45
            echo "        ";
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 45, $this->source); })()), [0 => twig_call_macro($macros["UI"], "macro_attibuteRow", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cc"), twig_call_macro($macros["EA"], "macro_recipient_email_addresses", [twig_get_attribute($this->env, $this->source,             // line 46
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 46, $this->source); })()), "recipients", [0 => "cc"], "method", false, false, false, 46)], 46, $context, $this->getSourceContext())], 46, $context, $this->getSourceContext())]);
            // line 48
            echo "    ";
        }
        // line 49
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 49, $this->source); })()), "recipients", [0 => "bcc"], "method", false, false, false, 49)) > 0)) {
            // line 50
            echo "        ";
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 50, $this->source); })()), [0 => twig_call_macro($macros["UI"], "macro_attibuteRow", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Bcc"), twig_call_macro($macros["EA"], "macro_recipient_email_addresses", [twig_get_attribute($this->env, $this->source,             // line 51
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 51, $this->source); })()), "recipients", [0 => "bcc"], "method", false, false, false, 51)], 51, $context, $this->getSourceContext())], 51, $context, $this->getSourceContext())]);
            // line 53
            echo "    ";
        }
        // line 54
        echo "    ";
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 54, $this->source); })()), [0 => twig_call_macro($macros["UI"], "macro_attibuteRow", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.subject.label"), twig_get_attribute($this->env, $this->source,         // line 55
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 55, $this->source); })()), "subject", [], "any", false, false, false, 55)], 55, $context, $this->getSourceContext())]);
        // line 57
        echo "
    ";
        // line 58
        if ((isset($context["noBodyFound"]) || array_key_exists("noBodyFound", $context) ? $context["noBodyFound"] : (function () { throw new RuntimeError('Variable "noBodyFound" does not exist.', 58, $this->source); })())) {
            // line 59
            echo "        ";
            ob_start();
            echo "<strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.unable_to_load_body"), "html", null, true);
            echo "</strong>";
            $context["notFoundMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 60
            echo "        ";
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 60, $this->source); })()), [0 => twig_call_macro($macros["UI"], "macro_attibuteRow", ["", (isset($context["notFoundMessage"]) || array_key_exists("notFoundMessage", $context) ? $context["notFoundMessage"] : (function () { throw new RuntimeError('Variable "notFoundMessage" does not exist.', 60, $this->source); })())], 60, $context, $this->getSourceContext())]);
            // line 61
            echo "    ";
        } else {
            // line 62
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 62, $this->source); })()), "emailBody", [], "any", false, false, false, 62), "hasAttachments", [], "any", false, false, false, 62) && array_key_exists("attachments", $context))) {
                // line 63
                echo "            ";
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 63, $this->source); })()), [0 => twig_call_macro($macros["UI"], "macro_attibuteRow", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attachments"), twig_call_macro($macros["EA"], "macro_attachments", [                // line 66
(isset($context["attachments"]) || array_key_exists("attachments", $context) ? $context["attachments"] : (function () { throw new RuntimeError('Variable "attachments" does not exist.', 66, $this->source); })()), (isset($context["targetEntityData"]) || array_key_exists("targetEntityData", $context) ? $context["targetEntityData"] : (function () { throw new RuntimeError('Variable "targetEntityData" does not exist.', 66, $this->source); })())], 66, $context, $this->getSourceContext())], 64, $context, $this->getSourceContext())]);
                // line 68
                echo "        ";
            }
            // line 69
            echo "        ";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 69, $this->source); })()), "emailBody", [], "any", false, false, false, 69), "bodyContent", [], "any", false, false, false, 69))) {
                // line 70
                echo "            ";
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 70, $this->source); })()), [0 => twig_call_macro($macros["UI"], "macro_attibuteRow", ["", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.empty_body")], 70, $context, $this->getSourceContext())]);
                // line 71
                echo "        ";
            } else {
                // line 72
                echo "            ";
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 72, $this->source); })()), [0 => twig_call_macro($macros["EA"], "macro_body", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 72, $this->source); })()), "emailBody", [], "any", false, false, false, 72)], 72, $context, $this->getSourceContext())]);
                // line 73
                echo "        ";
            }
            // line 74
            echo "    ";
        }
        // line 75
        echo "
    ";
        // line 76
        $context["data"] = ["dataBlocks" => [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General"), "class" => "active", "subblocks" => [0 => ["title" => null, "useSpan" => false, "data" =>         // line 85
(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 85, $this->source); })())]]]]];
        // line 91
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroEmail/Email/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 91,  300 => 85,  299 => 76,  296 => 75,  293 => 74,  290 => 73,  287 => 72,  284 => 71,  281 => 70,  278 => 69,  275 => 68,  273 => 66,  271 => 63,  268 => 62,  265 => 61,  262 => 60,  255 => 59,  253 => 58,  250 => 57,  248 => 55,  246 => 54,  243 => 53,  241 => 51,  239 => 50,  236 => 49,  233 => 48,  231 => 46,  229 => 45,  227 => 44,  224 => 43,  222 => 41,  221 => 40,  220 => 39,  218 => 38,  216 => 37,  213 => 36,  210 => 35,  197 => 34,  173 => 32,  155 => 29,  142 => 28,  128 => 25,  125 => 22,  112 => 21,  96 => 18,  94 => 16,  93 => 13,  91 => 12,  78 => 11,  64 => 5,  62 => 9,  59 => 8,  57 => 7,  55 => 6,  39 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    Available variables:
    * entity       - email entity Oro\\Bundle\\EmailBundle\\Entity\\Email
#}
{% extends '@OroUI/actions/view.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroEmail/macros.html.twig' as EA %}
{% set name = app.user|oro_format_name|default('N/A') %}
{% oro_title_set({params : {\"%subject%\": entity.subject|oro_html_strip_tags, \"%username%\": name} }) %}

{% block pageHeader %}
    {% set breadcrumbs = {
        'entity':      entity,
        'indexPath':   path('oro_email_user_emails'),
        'indexLabel':  'oro.email.entity_plural_label'|trans,
        'entityTitle': entity.subject|oro_html_strip_tags,
    } %}
    {{ parent() }}
{% endblock pageHeader %}

{% block breadcrumb %}
    {% set breadcrumbs = [
        {'label': 'oro.email.menu.user_emails'|trans }
    ] %}
    {% include '@OroNavigation/Menu/breadcrumbs.html.twig' %}
{% endblock breadcrumb %}

{% block stats %}
    <li>{{ 'oro.ui.created_at'|trans }}: {{ breadcrumbs.entity.created ? breadcrumbs.entity.created|oro_format_datetime : 'N/A' }}</li>
{% endblock stats %}

{% block navButtons %}{% endblock navButtons %}

{% block content_data %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% set id = 'email-profile' %}
    {% set attributes = [
        UI.attibuteRow('oro.email.sent_at.label'|trans, entity.sentAt|oro_format_datetime),
        UI.attibuteRow('oro.email.from_name.label'|trans, EA.email_address(entity.fromEmailAddress, entity.fromName)),
        UI.attibuteRow('To'|trans, EA.recipient_email_addresses(entity.recipients('to')))
    ] %}

    {% if entity.recipients('cc')|length > 0 %}
        {% set attributes = attributes | merge([
            UI.attibuteRow('Cc'|trans, EA.recipient_email_addresses(entity.recipients('cc')))
        ]) %}
    {% endif %}
    {% if entity.recipients('bcc')|length > 0 %}
        {% set attributes = attributes | merge([
            UI.attibuteRow('Bcc'|trans, EA.recipient_email_addresses(entity.recipients('bcc')))
        ]) %}
    {% endif %}
    {% set attributes = attributes | merge([
        UI.attibuteRow('oro.email.subject.label'|trans, entity.subject)
    ]) %}

    {% if noBodyFound %}
        {% set notFoundMessage %}<strong>{{ 'oro.email.unable_to_load_body'|trans}}</strong>{% endset %}
        {% set attributes = attributes | merge([UI.attibuteRow('', notFoundMessage)]) %}
    {% else %}
        {% if entity.emailBody.hasAttachments and attachments is defined %}
            {% set attributes = attributes |
                merge([UI.attibuteRow(
                    'Attachments'|trans,
                    EA.attachments(attachments, targetEntityData)
                )]) %}
        {% endif %}
        {% if entity.emailBody.bodyContent is empty %}
            {% set attributes = attributes | merge([UI.attibuteRow('', 'oro.email.empty_body'|trans)]) %}
        {% else %}
            {% set attributes = attributes | merge([EA.body(entity.emailBody)]) %}
        {% endif %}
    {% endif %}

    {% set data = {
        'dataBlocks': [
            {
                'title': 'General'|trans,
                'class': 'active',
                'subblocks': [
                    {
                        'title': null,
                        'useSpan': false,
                        'data': attributes
                    }
                ]
            }
        ]
    } %}
    {{ parent() }}
{% endblock content_data %}
", "@OroEmail/Email/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/Email/view.html.twig");
    }
}
