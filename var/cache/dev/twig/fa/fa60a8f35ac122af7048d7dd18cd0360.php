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

/* @OroDotmailer/Dotmailer/integrationConnection.html.twig */
class __TwigTemplate_ae9f76e2b28623cdc6042938ef111490 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyClass' => [$this, 'block_bodyClass'],
            'navButtons' => [$this, 'block_navButtons'],
            'pageHeader' => [$this, 'block_pageHeader'],
            'content_data' => [$this, 'block_content_data'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroUI/actions/update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDotmailer/Dotmailer/integrationConnection.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDotmailer/Dotmailer/integrationConnection.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDotmailer/Dotmailer/integrationConnection.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "@OroForm/Form/fields.html.twig"], true);

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%title%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.integration.connection.label")]]);
        // line 6
        $context["formAction"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_dotmailer_integration_connection");
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroDotmailer/Dotmailer/integrationConnection.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_bodyClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("bodyClass", $this->getTemplateName(), 8));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyClass"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyClass"));

        echo "dotmailer-page";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 9
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 9));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

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
        $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.integration.connection.label");
        // line 13
        echo "    ";
        $this->loadTemplate("@OroUI/page_title_block.html.twig", "@OroDotmailer/Dotmailer/integrationConnection.html.twig", 13)->display(twig_array_merge($context, ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 13, $this->source); })())]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 16
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 16));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 17
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroDotmailer/Dotmailer/integrationConnection.html.twig", 17)->unwrap();
        // line 18
        echo "
    ";
        // line 19
        ob_start();
        // line 20
        echo "        ";
        if ((((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "transport", [], "any", false, false, false, 20), "clientId", [], "any", false, false, false, 20)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "transport", [], "any", false, false, false, 20), "clientKey", [], "any", false, false, false, 20))) {
            // line 21
            echo "            ";
            if ((isset($context["loginUserUrl"]) || array_key_exists("loginUserUrl", $context) ? $context["loginUserUrl"] : (function () { throw new RuntimeError('Variable "loginUserUrl" does not exist.', 21, $this->source); })())) {
                // line 22
                echo "                <div class=\"control-group\">
                    <div class=\"controls\">
                        ";
                // line 24
                echo twig_call_macro($macros["UI"], "macro_button", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_dotmailer_oauth_disconnect", ["id" => twig_get_attribute($this->env, $this->source,                 // line 25
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "aCss" => "btn btn-primary", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.integration.disconnect.label"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.integration.disconnect.label")]], 24, $context, $this->getSourceContext());
                // line 29
                echo "
                    </div>
                </div>
            ";
            } else {
                // line 33
                echo "                <div class=\"control-group\">
                    <div class=\"controls\">
                        ";
                // line 35
                echo twig_call_macro($macros["UI"], "macro_button", [["path" =>                 // line 36
(isset($context["connectUrl"]) || array_key_exists("connectUrl", $context) ? $context["connectUrl"] : (function () { throw new RuntimeError('Variable "connectUrl" does not exist.', 36, $this->source); })()), "aCss" => "btn btn-primary", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.integration.connect.label"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.integration.connect.label")]], 35, $context, $this->getSourceContext());
                // line 40
                echo "
                    </div>
                </div>
            ";
            }
            // line 44
            echo "        ";
        }
        // line 45
        echo "    ";
        $context["button"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 46
        echo "
    ";
        // line 47
        $context["id"] = "oro_dotmailer_integration_connection";
        // line 48
        echo "    ";
        $context["dataBlocks"] = [];
        // line 49
        echo "    ";
        if ((isset($context["loginUserUrl"]) || array_key_exists("loginUserUrl", $context) ? $context["loginUserUrl"] : (function () { throw new RuntimeError('Variable "loginUserUrl" does not exist.', 49, $this->source); })())) {
            // line 50
            echo "        ";
            ob_start();
            // line 51
            echo "            <input type=\"hidden\" data-focusable=\"true\" /> ";
            // line 52
            echo "            <iframe src=\"";
            echo twig_escape_filter($this->env, (isset($context["loginUserUrl"]) || array_key_exists("loginUserUrl", $context) ? $context["loginUserUrl"] : (function () { throw new RuntimeError('Variable "loginUserUrl" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "\" width=\"100%\" height=\"1650\" frameborder=\"0\"></iframe>
        ";
            $context["dotmailerSection"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 54
            echo "
        ";
            // line 55
            $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 55, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.channel_type.label"), "subblocks" => [0 => ["title" => "", "data" => [0 =>             // line 60
(isset($context["dotmailerSection"]) || array_key_exists("dotmailerSection", $context) ? $context["dotmailerSection"] : (function () { throw new RuntimeError('Variable "dotmailerSection" does not exist.', 60, $this->source); })())]]]]]);
            // line 64
            echo "    ";
        }
        // line 65
        echo "
    ";
        // line 66
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 66, $this->source); })()), [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.integration.choose_connection.label"), "subblocks" => [0 => ["title" => "", "data" => [0 =>         // line 71
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "channel", [], "any", false, false, false, 71), 'row'), 1 =>         // line 72
(isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 72, $this->source); })())]]]]]);
        // line 76
        echo "
    ";
        // line 77
        $context["data"] = ["formErrors" => ((        // line 78
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'errors')) : (null)), "dataBlocks" =>         // line 79
(isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 79, $this->source); })())];
        // line 81
        echo "
    ";
        // line 82
        $context["fieldsToSendOnChannelChange"] = [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "channel", [], "any", false, false, false, 82), "vars", [], "any", false, false, false, 82), "full_name", [], "any", false, false, false, 82)];
        // line 83
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", true, true, false, 83)) {
            // line 84
            echo "        ";
            $context["fieldsToSendOnChannelChange"] = twig_array_merge((isset($context["fieldsToSendOnChannelChange"]) || array_key_exists("fieldsToSendOnChannelChange", $context) ? $context["fieldsToSendOnChannelChange"] : (function () { throw new RuntimeError('Variable "fieldsToSendOnChannelChange" does not exist.', 84, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "_token", [], "any", false, false, false, 84), "vars", [], "any", false, false, false, 84), "full_name", [], "any", false, false, false, 84)]);
            // line 85
            echo "    ";
        }
        // line 86
        echo "    <script type=\"text/javascript\">
        loadModules(['orodotmailer/js/integration-connection'], function (IntegrationConnection) {
            \"use strict\";

            \$(function () {
                var options = {
                    formSelector: '#";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "vars", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92), "html", null, true);
        echo "',
                    channelSelector: '#";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "channel", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93), "html", null, true);
        echo "',
                    fieldsSets: {
                        channel: ";
        // line 95
        echo json_encode((isset($context["fieldsToSendOnChannelChange"]) || array_key_exists("fieldsToSendOnChannelChange", $context) ? $context["fieldsToSendOnChannelChange"] : (function () { throw new RuntimeError('Variable "fieldsToSendOnChannelChange" does not exist.', 95, $this->source); })()));
        echo "
                    }
                };

                new IntegrationConnection(options);
            });
        });
    </script>

    ";
        // line 104
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroDotmailer/Dotmailer/integrationConnection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 104,  288 => 95,  283 => 93,  279 => 92,  271 => 86,  268 => 85,  265 => 84,  262 => 83,  260 => 82,  257 => 81,  255 => 79,  254 => 78,  253 => 77,  250 => 76,  248 => 72,  247 => 71,  246 => 66,  243 => 65,  240 => 64,  238 => 60,  237 => 55,  234 => 54,  228 => 52,  226 => 51,  223 => 50,  220 => 49,  217 => 48,  215 => 47,  212 => 46,  209 => 45,  206 => 44,  200 => 40,  198 => 36,  197 => 35,  193 => 33,  187 => 29,  185 => 25,  184 => 24,  180 => 22,  177 => 21,  174 => 20,  172 => 19,  169 => 18,  166 => 17,  153 => 16,  139 => 13,  136 => 12,  123 => 11,  99 => 9,  74 => 8,  60 => 1,  58 => 6,  54 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}
{% form_theme form with ['@OroForm/Form/fields.html.twig'] %}

{% oro_title_set({params : {'%title%': 'oro.dotmailer.integration.connection.label'|trans} }) %}

{% set formAction = path('oro_dotmailer_integration_connection') %}

{% block bodyClass %}dotmailer-page{% endblock %}
{% block navButtons %}{% endblock navButtons %}

{% block pageHeader %}
    {% set title = 'oro.dotmailer.integration.connection.label'|trans %}
    {% include '@OroUI/page_title_block.html.twig' with { title: title } %}
{% endblock pageHeader %}

{% block content_data %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% set button %}
        {% if entity and entity.transport.clientId and entity.transport.clientKey %}
            {% if loginUserUrl %}
                <div class=\"control-group\">
                    <div class=\"controls\">
                        {{ UI.button({
                            'path':  path('oro_dotmailer_oauth_disconnect', {'id': entity.id}),
                            'aCss':  'btn btn-primary',
                            'label': 'oro.dotmailer.integration.disconnect.label'|trans,
                            'title': 'oro.dotmailer.integration.disconnect.label'|trans,
                        }) }}
                    </div>
                </div>
            {% else %}
                <div class=\"control-group\">
                    <div class=\"controls\">
                        {{ UI.button({
                            'path':  connectUrl,
                            'aCss':  'btn btn-primary',
                            'label': 'oro.dotmailer.integration.connect.label'|trans,
                            'title': 'oro.dotmailer.integration.connect.label'|trans,
                        }) }}
                    </div>
                </div>
            {% endif %}
        {% endif %}
    {% endset %}

    {% set id = 'oro_dotmailer_integration_connection' %}
    {% set dataBlocks = {} %}
    {% if loginUserUrl %}
        {% set dotmailerSection %}
            <input type=\"hidden\" data-focusable=\"true\" /> {# fake input to make sure focus is not set on the bottom form dropdown#}
            <iframe src=\"{{ loginUserUrl }}\" width=\"100%\" height=\"1650\" frameborder=\"0\"></iframe>
        {% endset %}

        {% set dataBlocks = dataBlocks|merge([{
            'title': 'oro.dotmailer.channel_type.label'|trans,
            'subblocks': [{
                'title': '',
                'data': [
                    dotmailerSection
                ]
            }]
        }] ) %}
    {% endif %}

    {% set dataBlocks = dataBlocks|merge([{
            'title': 'oro.dotmailer.integration.choose_connection.label'|trans,
            'subblocks': [{
                'title': '',
                'data': [
                    form_row(form.channel),
                    button
                ]
            }]
    }] ) %}

    {% set data = {
        'formErrors': form_errors(form) ? form_errors(form) : null,
        'dataBlocks': dataBlocks
    } %}

    {% set fieldsToSendOnChannelChange = [form.channel.vars.full_name] %}
    {% if form._token is defined %}
        {% set fieldsToSendOnChannelChange = fieldsToSendOnChannelChange|merge([form._token.vars.full_name]) %}
    {% endif %}
    <script type=\"text/javascript\">
        loadModules(['orodotmailer/js/integration-connection'], function (IntegrationConnection) {
            \"use strict\";

            \$(function () {
                var options = {
                    formSelector: '#{{ form.vars.id }}',
                    channelSelector: '#{{ form.channel.vars.id }}',
                    fieldsSets: {
                        channel: {{ fieldsToSendOnChannelChange|json_encode|raw }}
                    }
                };

                new IntegrationConnection(options);
            });
        });
    </script>

    {{ parent() }}
{% endblock content_data %}
", "@OroDotmailer/Dotmailer/integrationConnection.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-dotmailer/Resources/views/Dotmailer/integrationConnection.html.twig");
    }
}
