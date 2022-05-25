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

/* @OroEmail/Email/dialog/update.html.twig */
class __TwigTemplate_ea65d8e791e26dc14d18ec643266c438 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_container' => [$this, 'block_page_container'],
            'page_container_before_form' => [$this, 'block_page_container_before_form'],
            'page_container_form_actions' => [$this, 'block_page_container_form_actions'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/Email/dialog/update.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/dialog/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/dialog/update.html.twig"));

        // line 7
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), [0 => "@OroForm/Form/fields.html.twig", 1 => "@OroEmail/Form/fields.html.twig"], true);
        // line 8
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmail/Email/dialog/update.html.twig", 8)->unwrap();
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('page_container', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_page_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("page_container", $this->getTemplateName(), 10));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_container"));

        // line 11
        echo "    ";
        if ((isset($context["saved"]) || array_key_exists("saved", $context) ? $context["saved"] : (function () { throw new RuntimeError('Variable "saved" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "        ";
            $context["widgetResponse"] = ["widget" => ["message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.the_email_was_sent"), "triggerSuccess" => true, "trigger" => [0 => "datagrid:doRefresh:attachment-grid", 1 => "widget:doRefresh:email-thread"], "remove" => true]];
            // line 20
            echo "
        ";
            // line 21
            echo json_encode((isset($context["widgetResponse"]) || array_key_exists("widgetResponse", $context) ? $context["widgetResponse"] : (function () { throw new RuntimeError('Variable "widgetResponse" does not exist.', 21, $this->source); })()));
            echo "
    ";
        } else {
            // line 23
            echo "        <div class=\"widget-content email-form\">
            ";
            // line 24
            $this->displayBlock('page_container_before_form', $context, $blocks);
            // line 25
            echo "            ";
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "vars", [], "any", false, false, false, 25), "valid", [], "any", false, false, false, 25) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "vars", [], "any", false, false, false, 25), "errors", [], "any", false, false, false, 25)))) {
                // line 26
                echo "                <div class=\"alert alert-error\" role=\"alert\">
                    <div class=\"message\">
                        ";
                // line 28
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'errors');
                echo "
                    </div>
                </div>
            ";
            }
            // line 32
            echo "            <div class=\"form-container\">
                <form id=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "vars", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "vars", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
            echo "\"
                      method=\"post\" action=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->urlAddQueryParameters(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "request", [], "any", false, false, false, 34), "uri", [], "any", false, false, false, 34), ["entityId" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 34, $this->source); })()), "entityId", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" enctype=\"multipart/form-data\">
                    ";
            // line 35
            $context["emailEditorOptions"] = ["entityId" => twig_get_attribute($this->env, $this->source,             // line 36
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 36, $this->source); })()), "entityId", [], "any", false, false, false, 36), "to" => twig_get_attribute($this->env, $this->source,             // line 37
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 37, $this->source); })()), "to", [], "any", false, false, false, 37), "cc" => twig_get_attribute($this->env, $this->source,             // line 38
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 38, $this->source); })()), "cc", [], "any", false, false, false, 38), "bcc" => twig_get_attribute($this->env, $this->source,             // line 39
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 39, $this->source); })()), "bcc", [], "any", false, false, false, 39), "appendSignature" =>             // line 40
(isset($context["appendSignature"]) || array_key_exists("appendSignature", $context) ? $context["appendSignature"] : (function () { throw new RuntimeError('Variable "appendSignature" does not exist.', 40, $this->source); })()), "minimalWysiwygEditorHeight" => 150, "isSignatureEditable" => $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_user_user_update")];
            // line 44
            echo "                    <fieldset class=\"form-horizontal\"
                              data-page-component-module=\"oroemail/js/app/components/email-editor-component\"
                              data-page-component-options=\"";
            // line 46
            echo twig_escape_filter($this->env, json_encode((isset($context["emailEditorOptions"]) || array_key_exists("emailEditorOptions", $context) ? $context["emailEditorOptions"] : (function () { throw new RuntimeError('Variable "emailEditorOptions" does not exist.', 46, $this->source); })())), "html", null, true);
            echo "\"
                              data-layout=\"separate\"
                            >
                        ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "gridName", [], "any", false, false, false, 49), 'row');
            echo "
                        ";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "origin", [], "any", false, false, false, 50), 'row');
            echo "
                        ";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "to", [], "any", false, false, false, 51), 'row');
            echo "
                        ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "cc", [], "any", false, false, false, 52), 'row');
            echo "
                        ";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "bcc", [], "any", false, false, false, 53), 'row');
            echo "
                        ";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "subject", [], "any", false, false, false, 54), 'row');
            echo "

                        ";
            // line 56
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "template", [], "any", true, true, false, 56)) {
                // line 57
                echo "                            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "template", [], "any", false, false, false, 57), 'row', ["includeNonEntity" => true, "includeSystemTemplates" => false]);
                echo "
                        ";
            }
            // line 59
            echo "
                        ";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "type", [], "any", false, false, false, 60), 'row');
            echo "
                        ";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "body", [], "any", false, false, false, 61), 'row');
            echo "

                        <div class=\"control-group email-body-actions\">
                            <div class=\"controls\">
                                <span class=\"email-body-action\"><a id=\"add-signature\" href=\"#\">";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.form.add_signature"), "html", null, true);
            echo "</a></span>

                                <span>";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.form.attach_file"), "html", null, true);
            echo ": </span>
                                <div class=\"dropup\" style=\"display: inline-block\">
                                    <a class=\"attach-file dropdown-toggle\" href=\"#\" aria-expanded=\"true\">";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.form.from_record"), "html", null, true);
            echo "</a>
                                    <div class=\"dropdown-menu attachment-list-popup\" role=\"menu\" aria-labelledby=\"attach-file\"></div>
                                </div>
                                <a class=\"upload-new divider\" href=\"#\">";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.form.upload"), "html", null, true);
            echo "</a>
                            </div>
                        </div>

                        ";
            // line 77
            echo "                        ";
            $context["emailAttachmentOptions"] = ["popupTriggerButton" => ".attach-file", "uploadNewButton" => ".upload-new", "popupContentEl" => ".attachment-list-popup", "entityAttachments" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 81
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 81, $this->source); })()), "attachments", [], "any", false, false, false, 81), "toArray", [], "any", false, false, false, 81), "attachmentsAvailable" => twig_get_attribute($this->env, $this->source,             // line 82
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 82, $this->source); })()), "attachmentsAvailable", [], "any", false, false, false, 82)];
            // line 84
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "attachments", [], "any", false, false, false, 84), 'row', ["options" => (isset($context["emailAttachmentOptions"]) || array_key_exists("emailAttachmentOptions", $context) ? $context["emailAttachmentOptions"] : (function () { throw new RuntimeError('Variable "emailAttachmentOptions" does not exist.', 84, $this->source); })())]);
            echo "

                        ";
            // line 86
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'rest');
            echo "
                        <div class=\"widget-actions form-actions\" style=\"display: none;\">
                            ";
            // line 88
            $this->displayBlock('page_container_form_actions', $context, $blocks);
            // line 92
            echo "                        </div>
                    </fieldset>
                </form>
                ";
            // line 95
            echo $this->extensions['Oro\Bundle\FormBundle\Twig\FormExtension']->renderFormJsValidationBlock($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()));
            echo "
            </div>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 24
    public function block_page_container_before_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("page_container_before_form", $this->getTemplateName(), 24));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_container_before_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_container_before_form"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 88
    public function block_page_container_form_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("page_container_form_actions", $this->getTemplateName(), 88));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_container_form_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_container_form_actions"));

        // line 89
        echo "                                <button class=\"btn\" type=\"reset\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</button>
                                <button class=\"btn btn-primary\" type=\"submit\">";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Send"), "html", null, true);
        echo "</button>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroEmail/Email/dialog/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 90,  292 => 89,  279 => 88,  255 => 24,  237 => 95,  232 => 92,  230 => 88,  225 => 86,  219 => 84,  217 => 82,  216 => 81,  214 => 77,  207 => 72,  201 => 69,  196 => 67,  191 => 65,  184 => 61,  180 => 60,  177 => 59,  171 => 57,  169 => 56,  164 => 54,  160 => 53,  156 => 52,  152 => 51,  148 => 50,  144 => 49,  138 => 46,  134 => 44,  132 => 40,  131 => 39,  130 => 38,  129 => 37,  128 => 36,  127 => 35,  123 => 34,  117 => 33,  114 => 32,  107 => 28,  103 => 26,  100 => 25,  98 => 24,  95 => 23,  90 => 21,  87 => 20,  84 => 12,  81 => 11,  56 => 10,  53 => 9,  51 => 8,  49 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    Available variables:
    * entity       - Oro\\Bundle\\EmailBundle\\Model\\Email
    * form         - Oro\\Bundle\\EmailBundle\\Form\\type\\EmailType
    * saved        - bool
#}
{% form_theme form with ['@OroForm/Form/fields.html.twig', '@OroEmail/Form/fields.html.twig'] %}
{% import '@OroUI/macros.html.twig' as UI %}

{% block page_container %}
    {% if saved %}
        {% set widgetResponse = {
            widget: {
                message: 'oro.email.the_email_was_sent'|trans,
                triggerSuccess: true,
                trigger: ['datagrid:doRefresh:attachment-grid', 'widget:doRefresh:email-thread'],
                remove: true
            }
        } %}

        {{ widgetResponse|json_encode|raw }}
    {% else %}
        <div class=\"widget-content email-form\">
            {% block page_container_before_form %}{% endblock %}
            {% if not form.vars.valid and form.vars.errors|length %}
                <div class=\"alert alert-error\" role=\"alert\">
                    <div class=\"message\">
                        {{ form_errors(form) }}
                    </div>
                </div>
            {% endif %}
            <div class=\"form-container\">
                <form id=\"{{ form.vars.id}}\" name=\"{{ form.vars.name }}\"
                      method=\"post\" action=\"{{ app.request.uri|url_add_query_parameters({entityId: entity.entityId}) }}\" enctype=\"multipart/form-data\">
                    {% set emailEditorOptions = {
                        entityId: entity.entityId,
                        to: entity.to,
                        cc: entity.cc,
                        bcc: entity.bcc,
                        appendSignature: appendSignature,
                        minimalWysiwygEditorHeight: 150,
                        isSignatureEditable: is_granted('oro_user_user_update')
                    } %}
                    <fieldset class=\"form-horizontal\"
                              data-page-component-module=\"oroemail/js/app/components/email-editor-component\"
                              data-page-component-options=\"{{ emailEditorOptions | json_encode }}\"
                              data-layout=\"separate\"
                            >
                        {{ form_row(form.gridName) }}
                        {{ form_row(form.origin) }}
                        {{ form_row(form.to) }}
                        {{ form_row(form.cc) }}
                        {{ form_row(form.bcc) }}
                        {{ form_row(form.subject) }}

                        {% if form.template is defined %}
                            {{ form_row(form.template, {'includeNonEntity': true, 'includeSystemTemplates': false}) }}
                        {% endif %}

                        {{ form_row(form.type) }}
                        {{ form_row(form.body) }}

                        <div class=\"control-group email-body-actions\">
                            <div class=\"controls\">
                                <span class=\"email-body-action\"><a id=\"add-signature\" href=\"#\">{{ 'oro.email.form.add_signature'|trans }}</a></span>

                                <span>{{ 'oro.email.form.attach_file'|trans }}: </span>
                                <div class=\"dropup\" style=\"display: inline-block\">
                                    <a class=\"attach-file dropdown-toggle\" href=\"#\" aria-expanded=\"true\">{{ 'oro.email.form.from_record'|trans }}</a>
                                    <div class=\"dropdown-menu attachment-list-popup\" role=\"menu\" aria-labelledby=\"attach-file\"></div>
                                </div>
                                <a class=\"upload-new divider\" href=\"#\">{{ 'oro.email.form.upload'|trans }}</a>
                            </div>
                        </div>

                        {# To transfer data from php attachment model to JS modify oro_email_attachments_row Form block widget. See: \"Form/fields.html.twig\" #}
                        {% set emailAttachmentOptions = {
                            popupTriggerButton: '.attach-file',
                            uploadNewButton: '.upload-new',
                            popupContentEl: '.attachment-list-popup',
                            entityAttachments: entity.attachments.toArray,
                            attachmentsAvailable: entity.attachmentsAvailable
                        } %}
                        {{ form_row(form.attachments, {options: emailAttachmentOptions}) }}

                        {{ form_rest(form) }}
                        <div class=\"widget-actions form-actions\" style=\"display: none;\">
                            {% block page_container_form_actions %}
                                <button class=\"btn\" type=\"reset\">{{ 'Cancel'|trans }}</button>
                                <button class=\"btn btn-primary\" type=\"submit\">{{ 'Send'|trans }}</button>
                            {% endblock %}
                        </div>
                    </fieldset>
                </form>
                {{ oro_form_js_validation(form) }}
            </div>
        </div>
    {% endif %}
{% endblock %}
", "@OroEmail/Email/dialog/update.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/Email/dialog/update.html.twig");
    }
}
