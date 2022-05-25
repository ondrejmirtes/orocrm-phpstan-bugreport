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

/* @OroAttachment/Form/fields.html.twig */
class __TwigTemplate_2b9f968af61fd80ea4efc3b61ce82e7d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'oro_file_widget' => [$this, 'block_oro_file_widget'],
            'oro_image_widget' => [$this, 'block_oro_image_widget'],
            'oro_attachment_multi_file_widget' => [$this, 'block_oro_attachment_multi_file_widget'],
            'oro_attachment_multi_file_row' => [$this, 'block_oro_attachment_multi_file_row'],
            'oro_attachment_multi_image_widget' => [$this, 'block_oro_attachment_multi_image_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroAttachment/Form/fields.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAttachment/Form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAttachment/Form/fields.html.twig"));

        // line 1
        $this->displayBlock('oro_file_widget', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('oro_image_widget', $context, $blocks);
        // line 104
        echo "
";
        // line 134
        echo "
";
        // line 135
        $this->displayBlock('oro_attachment_multi_file_widget', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('oro_attachment_multi_file_row', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('oro_attachment_multi_image_widget', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_oro_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_file_widget", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_file_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_file_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        <div class=\"control-group control-group--column file-widget\">
            <div class=\"controls\">
                ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "file", [], "any", false, false, false, 5), 'widget');
        echo "
                ";
        // line 6
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "file", [], "any", false, false, false, 6), 'errors')) {
            // line 7
            echo "                    ";
            $context["file_has_errors"] = true;
            // line 8
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "file", [], "any", false, false, false, 8), 'errors');
            echo "
                ";
        }
        // line 10
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "emptyFile", [], "any", false, false, false, 10), 'widget');
        echo "
            </div>
        </div>
        ";
        // line 13
        if ((( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 13, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)) &&  !twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 13, $this->source); })()), "emptyFile", [], "any", false, false, false, 13))) {
            // line 14
            echo "            ";
            $context["filename"] = ((twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "originalFilename", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "originalFilename", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 14, $this->source); })()), "filename", [], "any", false, false, false, 14))) : (twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 14, $this->source); })()), "filename", [], "any", false, false, false, 14)));
            // line 15
            echo "            <div class=\"control-group file-widget-preview\">
                <div class=\"controls\">
                    ";
            // line 17
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroAttachment/Form/fields.html.twig", 17)->unwrap();
            // line 18
            echo "
                    <div class=\"attachment-item\" ";
            // line 19
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroattachment/js/app/views/attachment-view", "options" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 21
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "vars", [], "any", false, false, false, 21), "attachmentViewOptions", [], "any", false, false, false, 21)]], 19, $context, $this->getSourceContext());
            // line 22
            echo ">
                        ";
            // line 23
            if ( !array_key_exists("file_has_errors", $context)) {
                // line 24
                echo "                            <i class=\"attachment-item__icon fa ";
                echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getAttachmentIcon((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 24, $this->source); })())), "html", null, true);
                echo "\" aria-hidden=\"true\"></i>
                            <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getFileUrl((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 25, $this->source); })()), "download", true), "html", null, true);
                echo "\" class=\"no-hash attachment-item__filename\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 25, $this->source); })()), "html", null, true);
                echo "\">
                                ";
                // line 26
                echo twig_escape_filter($this->env, (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 26, $this->source); })()), "html", null, true);
                echo "
                            </a>
                            <span class=\"attachment-item__file-size\">(";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getFileSize(twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 28, $this->source); })()), "fileSize", [], "any", false, false, false, 28)), "html", null, true);
                echo ")</span>

                            ";
                // line 30
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "vars", [], "any", false, false, false, 30), "allowDelete", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "                                <button data-role=\"remove\"
                                        class=\"btn btn-action btn-link delete\"
                                        type=\"button\"
                                        data-related=\"";
                    // line 34
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "emptyFile", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
                    echo "\"
                                        ";
                    // line 35
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "emptyFile", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "disabled", [], "any", false, false, false, 35)) {
                        echo "disabled=\"disabled\"";
                    }
                    // line 36
                    echo "                                >
                                    <span class=\"fa-close\" aria-hidden=\"true\"></span>
                                </button>
                            ";
                }
                // line 40
                echo "                        ";
            }
            // line 41
            echo "                    </div>
                </div>
            </div>
        ";
        }
        // line 45
        echo "    ";
        $___internal_parse_40_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo twig_spaceless($___internal_parse_40_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 48
    public function block_oro_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_image_widget", $this->getTemplateName(), 48));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_image_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_image_widget"));

        // line 49
        echo "    ";
        ob_start();
        // line 50
        echo "        <div class=\"control-group control-group--column image-widget\">
            ";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "vars", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51) == "attachment")) {
            // line 52
            echo "                <div class=\"controls\">
                    <div class=\"attachment-file\">
                        ";
            // line 54
            $context["jsonParams"] = (((("{\"initializeOptions\":{\"fileDefaultHtml\":\"" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attach file:")) . "\" ,\"fileButtonHtml\":\"") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upload")) . "\"}}");
            // line 55
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "file", [], "any", false, false, false, 55), 'widget', ["attr" => ["data-input-widget-options" => (isset($context["jsonParams"]) || array_key_exists("jsonParams", $context) ? $context["jsonParams"] : (function () { throw new RuntimeError('Variable "jsonParams" does not exist.', 55, $this->source); })())]]);
            echo "
                    </div>
                </div>
            ";
        } else {
            // line 59
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "file", [], "any", false, false, false, 59), 'widget');
            echo "
                ";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "emptyFile", [], "any", false, false, false, 60), 'widget');
            echo "
            ";
        }
        // line 62
        echo "            ";
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "file", [], "any", false, false, false, 62), 'errors')) {
            // line 63
            echo "                ";
            $context["file_has_errors"] = true;
            // line 64
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "file", [], "any", false, false, false, 64), 'errors');
            echo "
            ";
        }
        // line 66
        echo "        </div>
        ";
        // line 67
        if (((( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 67, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67)) &&  !twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 67, $this->source); })()), "emptyFile", [], "any", false, false, false, 67)) &&  !array_key_exists("file_has_errors", $context))) {
            // line 68
            echo "            ";
            $context["filename"] = ((twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "originalFilename", [], "any", true, true, false, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "originalFilename", [], "any", false, false, false, 68), twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 68, $this->source); })()), "filename", [], "any", false, false, false, 68))) : (twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 68, $this->source); })()), "filename", [], "any", false, false, false, 68)));
            // line 69
            echo "            <div class=\"control-group image-widget-preview\">
                <div class=\"controls\">
                    ";
            // line 71
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroAttachment/Form/fields.html.twig", 71)->unwrap();
            // line 72
            echo "
                    <div class=\"attachment-item\" ";
            // line 73
            echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "oroattachment/js/app/views/attachment-view", "options" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 75
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "vars", [], "any", false, false, false, 75), "attachmentViewOptions", [], "any", false, false, false, 75)]], 73, $context, $this->getSourceContext());
            // line 76
            echo ">
                        ";
            // line 77
            if ( !array_key_exists("file_has_errors", $context)) {
                // line 78
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getFileUrl((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 78, $this->source); })()), "download", true), "html", null, true);
                echo "\" class=\"no-hash attachment-item__filename\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 78, $this->source); })()), "html", null, true);
                echo "\">
                                ";
                // line 79
                $this->loadTemplate("@OroAttachment/Twig/picture.html.twig", "@OroAttachment/Form/fields.html.twig", 79)->display(twig_array_merge($context, ["sources" => $this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getResizedPictureSources(                // line 80
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 80, $this->source); })())), "img_attrs" => ["alt" =>                 // line 81
(isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 81, $this->source); })())]]));
                // line 83
                echo "                                ";
                echo twig_escape_filter($this->env, (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 83, $this->source); })()), "html", null, true);
                echo "
                            </a>
                            <span class=\"attachment-item__file-size\">(";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getFileSize(twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 85, $this->source); })()), "fileSize", [], "any", false, false, false, 85)), "html", null, true);
                echo ")</span>

                            ";
                // line 87
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "vars", [], "any", false, false, false, 87), "allowDelete", [], "any", false, false, false, 87)) {
                    // line 88
                    echo "                                <button data-role=\"remove\"
                                        class=\"btn btn-action btn-link delete\"
                                        type=\"button\"
                                        data-related=\"";
                    // line 91
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "emptyFile", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "name", [], "any", false, false, false, 91), "html", null, true);
                    echo "\"
                                        ";
                    // line 92
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "emptyFile", [], "any", false, false, false, 92), "vars", [], "any", false, false, false, 92), "disabled", [], "any", false, false, false, 92)) {
                        echo "disabled=\"disabled\"";
                    }
                    // line 93
                    echo "                                >
                                    <span class=\"fa-close\" aria-hidden=\"true\"></span>
                                </button>
                            ";
                }
                // line 97
                echo "                        ";
            }
            // line 98
            echo "                    </div>
                </div>
            </div>
        ";
        }
        // line 102
        echo "    ";
        $___internal_parse_41_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo twig_spaceless($___internal_parse_41_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 135
    public function block_oro_attachment_multi_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_attachment_multi_file_widget", $this->getTemplateName(), 135));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_attachment_multi_file_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_attachment_multi_file_widget"));

        // line 136
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroAttachment/Form/fields.html.twig", 136)->unwrap();
        // line 137
        echo "    ";
        $macros["fields"] = $this;
        // line 138
        echo "    ";
        ob_start();
        // line 139
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 140
            echo "            ";
            $context["prototype_html"] = twig_call_macro($macros["fields"], "macro_oro_attachment_multi_file_item_prototype", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })())], 140, $context, $this->getSourceContext());
            // line 141
            echo "        ";
        }
        // line 142
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 142, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 142)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 142, $this->source); })()), "class", [], "any", false, false, false, 142) . " ")) : ("")) . " file-collection")]);
        // line 143
        echo "        ";
        $context["prototype_name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "vars", [], "any", false, false, false, 143), "prototype_name", [], "any", false, false, false, 143);
        // line 144
        echo "
        <div class=\"row-oro attachment-fileitems\" ";
        // line 145
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroattachment/js/app/components/multi-file-control-component", "options" => ["maxNumber" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 148
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "vars", [], "any", false, false, false, 148), "maxNumber", [], "any", false, false, false, 148)]]], 145, $context, $this->getSourceContext());
        // line 150
        echo ">
            <div ";
        // line 151
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
                <table class=\"grid table-hover table table-bordered table-condensed\">
                    <thead>
                        <tr>
                            <th class=\"sort-order\"><span>";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.attachment.fileitem.sort_order.label"), "html", null, true);
        echo "</span></th>
                            <th class=\"file\"><span>";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("fileLabel", $context)) ? (_twig_default_filter((isset($context["fileLabel"]) || array_key_exists("fileLabel", $context) ? $context["fileLabel"] : (function () { throw new RuntimeError('Variable "fileLabel" does not exist.', 156, $this->source); })()), "oro.attachment.fileitem.file.label")) : ("oro.attachment.fileitem.file.label"))), "html", null, true);
        echo "</span></th>
                            ";
        // line 157
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "vars", [], "any", false, false, false, 157), "allow_delete", [], "any", false, false, false, 157)) {
            // line 158
            echo "                                <th class=\"remove\"></th>
                            ";
        }
        // line 160
        echo "                        </tr>
                    </thead>
                    <tbody data-last-index=\"";
        // line 162
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "children", [], "any", false, false, false, 162)), "html", null, true);
        echo "\"
                           data-row-count-add=\"";
        // line 163
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "vars", [], "any", false, false, false, 163), "row_count_add", [], "any", false, false, false, 163), "html", null, true);
        echo "\"
                           data-prototype-name=\"";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["prototype_name"]) || array_key_exists("prototype_name", $context) ? $context["prototype_name"] : (function () { throw new RuntimeError('Variable "prototype_name" does not exist.', 164, $this->source); })()), "html", null, true);
        echo "\"
                           ";
        // line 165
        if (array_key_exists("prototype_html", $context)) {
            echo " data-prototype=\"";
            echo twig_escape_filter($this->env, (isset($context["prototype_html"]) || array_key_exists("prototype_html", $context) ? $context["prototype_html"] : (function () { throw new RuntimeError('Variable "prototype_html" does not exist.', 165, $this->source); })()));
            echo "\"";
        }
        // line 166
        echo "                    >
                        ";
        // line 167
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "children", [], "any", false, false, false, 167))) {
            // line 168
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "children", [], "any", false, false, false, 168));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 169
                echo "                                ";
                echo twig_call_macro($macros["fields"], "macro_oro_attachment_multi_file_item_prototype", [$context["child"]], 169, $context, $this->getSourceContext());
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "                        ";
        } elseif (((isset($context["show_form_when_empty"]) || array_key_exists("show_form_when_empty", $context) ? $context["show_form_when_empty"] : (function () { throw new RuntimeError('Variable "show_form_when_empty" does not exist.', 171, $this->source); })()) && array_key_exists("prototype_html", $context))) {
            // line 172
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "vars", [], "any", false, false, false, 172), "row_count_initial", [], "any", false, false, false, 172) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 173
                echo "                                ";
                echo twig_replace_filter((isset($context["prototype_html"]) || array_key_exists("prototype_html", $context) ? $context["prototype_html"] : (function () { throw new RuntimeError('Variable "prototype_html" does not exist.', 173, $this->source); })()), [(isset($context["prototype_name"]) || array_key_exists("prototype_name", $context) ? $context["prototype_name"] : (function () { throw new RuntimeError('Variable "prototype_name" does not exist.', 173, $this->source); })()) => $context["i"]]);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "                        ";
        }
        // line 176
        echo "                    </tbody>
                </table>
                ";
        // line 178
        if ((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new RuntimeError('Variable "allow_add" does not exist.', 178, $this->source); })())) {
            // line 179
            echo "                    <a class=\"btn add-list-item\" data-container=\".file-collection tbody\" href=\"javascript: void(0);\">
                        ";
            // line 180
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("addLabel", $context)) ? (_twig_default_filter((isset($context["addLabel"]) || array_key_exists("addLabel", $context) ? $context["addLabel"] : (function () { throw new RuntimeError('Variable "addLabel" does not exist.', 180, $this->source); })()), "oro.attachment.fileitem.file.add.label")) : ("oro.attachment.fileitem.file.add.label"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 183
        echo "            </div>
        </div>
    ";
        $___internal_parse_42_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 138
        echo twig_spaceless($___internal_parse_42_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 188
    public function block_oro_attachment_multi_file_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_attachment_multi_file_row", $this->getTemplateName(), 188));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_attachment_multi_file_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_attachment_multi_file_row"));

        // line 189
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), 'widget');
        echo "
    ";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), 'errors');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 193
    public function block_oro_attachment_multi_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_attachment_multi_image_widget", $this->getTemplateName(), 193));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_attachment_multi_image_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_attachment_multi_image_widget"));

        // line 194
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), 'widget', ["addLabel" => "oro.attachment.fileitem.image.add.label", "fileLabel" => "oro.attachment.fileitem.image.label"]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 105
    public function macro_oro_attachment_multi_file_item_prototype($__widget__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "widget" => $__widget__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "oro_attachment_multi_file_item_prototype"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "oro_attachment_multi_file_item_prototype"));

            // line 106
            echo "    ";
            if (twig_in_filter("collection", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 106, $this->source); })()), "vars", [], "any", false, false, false, 106), "block_prefixes", [], "any", false, false, false, 106))) {
                // line 107
                echo "        ";
                $context["form"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 107, $this->source); })()), "vars", [], "any", false, false, false, 107), "prototype", [], "any", false, false, false, 107);
                // line 108
                echo "        ";
                $context["name"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 108, $this->source); })()), "vars", [], "any", false, false, false, 108), "full_name", [], "any", false, false, false, 108) . "[") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 108, $this->source); })()), "vars", [], "any", false, false, false, 108), "prototype", [], "any", false, false, false, 108), "vars", [], "any", false, false, false, 108), "name", [], "any", false, false, false, 108)) . "]");
                // line 109
                echo "        ";
                $context["disabled"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 109, $this->source); })()), "vars", [], "any", false, false, false, 109), "disabled", [], "any", false, false, false, 109);
                // line 110
                echo "        ";
                $context["allow_delete"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 110, $this->source); })()), "vars", [], "any", false, false, false, 110), "allow_delete", [], "any", false, false, false, 110);
                // line 111
                echo "    ";
            } else {
                // line 112
                echo "        ";
                $context["form"] = (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 112, $this->source); })());
                // line 113
                echo "        ";
                $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 113, $this->source); })()), "vars", [], "any", false, false, false, 113), "full_name", [], "any", false, false, false, 113);
                // line 114
                echo "        ";
                $context["disabled"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 114, $this->source); })()), "parent", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114), "disabled", [], "any", false, false, false, 114);
                // line 115
                echo "        ";
                $context["allow_delete"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 115, $this->source); })()), "parent", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "allow_delete", [], "any", false, false, false, 115);
                // line 116
                echo "    ";
            }
            // line 117
            echo "
    <tr data-content=\"";
            // line 118
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 118, $this->source); })()), "html", null, true);
            echo "\" data-validation-optional-group ";
            echo twig_escape_filter($this->env, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 118, $this->source); })()), "html", null, true);
            echo ">
        <td class=\"sort-order\">
            ";
            // line 120
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "sortOrder", [], "any", false, false, false, 120), 'widget');
            echo "
        </td>
        <td class=\"file\">
            ";
            // line 123
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "file", [], "any", false, false, false, 123), 'widget');
            echo "
        </td>
        ";
            // line 125
            if ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new RuntimeError('Variable "allow_delete" does not exist.', 125, $this->source); })())) {
                // line 126
                echo "            <td>
                <button type=\"button\" class=\"removeRow btn btn-icon btn-square-lighter\" aria-label=\"";
                // line 127
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove row"), "html", null, true);
                echo "\">
                    <span class=\"fa-trash-o\" aria-hidden=\"true\"></span>
                </button>
            </td>
        ";
            }
            // line 132
            echo "    </tr>
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
        return "@OroAttachment/Form/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  678 => 132,  670 => 127,  667 => 126,  665 => 125,  660 => 123,  654 => 120,  647 => 118,  644 => 117,  641 => 116,  638 => 115,  635 => 114,  632 => 113,  629 => 112,  626 => 111,  623 => 110,  620 => 109,  617 => 108,  614 => 107,  611 => 106,  591 => 105,  575 => 194,  562 => 193,  547 => 190,  542 => 189,  529 => 188,  516 => 138,  511 => 183,  505 => 180,  502 => 179,  500 => 178,  496 => 176,  493 => 175,  484 => 173,  479 => 172,  476 => 171,  467 => 169,  462 => 168,  460 => 167,  457 => 166,  451 => 165,  447 => 164,  443 => 163,  439 => 162,  435 => 160,  431 => 158,  429 => 157,  425 => 156,  421 => 155,  414 => 151,  411 => 150,  409 => 148,  408 => 145,  405 => 144,  402 => 143,  399 => 142,  396 => 141,  393 => 140,  390 => 139,  387 => 138,  384 => 137,  381 => 136,  368 => 135,  355 => 49,  352 => 102,  346 => 98,  343 => 97,  337 => 93,  333 => 92,  329 => 91,  324 => 88,  322 => 87,  317 => 85,  311 => 83,  309 => 81,  308 => 80,  307 => 79,  300 => 78,  298 => 77,  295 => 76,  293 => 75,  292 => 73,  289 => 72,  287 => 71,  283 => 69,  280 => 68,  278 => 67,  275 => 66,  269 => 64,  266 => 63,  263 => 62,  258 => 60,  253 => 59,  245 => 55,  243 => 54,  239 => 52,  237 => 51,  234 => 50,  231 => 49,  218 => 48,  205 => 2,  202 => 45,  196 => 41,  193 => 40,  187 => 36,  183 => 35,  179 => 34,  174 => 31,  172 => 30,  167 => 28,  162 => 26,  156 => 25,  151 => 24,  149 => 23,  146 => 22,  144 => 21,  143 => 19,  140 => 18,  138 => 17,  134 => 15,  131 => 14,  129 => 13,  122 => 10,  116 => 8,  113 => 7,  111 => 6,  107 => 5,  103 => 3,  100 => 2,  87 => 1,  74 => 193,  71 => 192,  69 => 188,  66 => 187,  64 => 135,  61 => 134,  58 => 104,  56 => 48,  53 => 47,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block oro_file_widget %}
    {% apply spaceless %}
        <div class=\"control-group control-group--column file-widget\">
            <div class=\"controls\">
                {{ form_widget(form.file) }}
                {% if form_errors(form.file) %}
                    {% set file_has_errors = true %}
                    {{ form_errors(form.file) }}
                {% endif %}
                {{ form_widget(form.emptyFile) }}
            </div>
        </div>
        {% if value is not empty and value.id and not value.emptyFile %}
            {% set filename = value.originalFilename|default(value.filename) %}
            <div class=\"control-group file-widget-preview\">
                <div class=\"controls\">
                    {% import '@OroUI/macros.html.twig' as UI %}

                    <div class=\"attachment-item\" {{ UI.renderPageComponentAttributes({
                        view: 'oroattachment/js/app/views/attachment-view',
                        options: form.vars.attachmentViewOptions
                    }) }}>
                        {% if file_has_errors is not defined %}
                            <i class=\"attachment-item__icon fa {{ oro_attachment_icon(value) }}\" aria-hidden=\"true\"></i>
                            <a href=\"{{ file_url(value, 'download', true) }}\" class=\"no-hash attachment-item__filename\" title=\"{{ filename }}\">
                                {{ filename }}
                            </a>
                            <span class=\"attachment-item__file-size\">({{ file_size(value.fileSize) }})</span>

                            {% if form.vars.allowDelete %}
                                <button data-role=\"remove\"
                                        class=\"btn btn-action btn-link delete\"
                                        type=\"button\"
                                        data-related=\"{{ form.emptyFile.vars.name }}\"
                                        {% if form.emptyFile.vars.disabled %}disabled=\"disabled\"{% endif %}
                                >
                                    <span class=\"fa-close\" aria-hidden=\"true\"></span>
                                </button>
                            {% endif %}
                        {% endif %}
                    </div>
                </div>
            </div>
        {% endif %}
    {% endapply %}
{% endblock %}

{% block oro_image_widget %}
    {% apply spaceless %}
        <div class=\"control-group control-group--column image-widget\">
            {% if form.vars.name == 'attachment' %}
                <div class=\"controls\">
                    <div class=\"attachment-file\">
                        {% set jsonParams = '{\"initializeOptions\":{\"fileDefaultHtml\":\"' ~ \"Attach file:\"|trans  ~ '\" ,\"fileButtonHtml\":\"' ~ \"Upload\"|trans  ~ '\"}}' %}
                        {{ form_widget(form.file, {'attr': {'data-input-widget-options': jsonParams } }) }}
                    </div>
                </div>
            {% else %}
                {{ form_widget(form.file) }}
                {{ form_widget(form.emptyFile) }}
            {% endif %}
            {% if form_errors(form.file) %}
                {% set file_has_errors = true %}
                {{ form_errors(form.file) }}
            {% endif %}
        </div>
        {% if value is not empty and value.id and not value.emptyFile and file_has_errors is not defined %}
            {% set filename = value.originalFilename|default(value.filename) %}
            <div class=\"control-group image-widget-preview\">
                <div class=\"controls\">
                    {% import '@OroUI/macros.html.twig' as UI %}

                    <div class=\"attachment-item\" {{ UI.renderPageComponentAttributes({
                        view: 'oroattachment/js/app/views/attachment-view',
                        options: form.vars.attachmentViewOptions
                    }) }}>
                        {% if file_has_errors is not defined %}
                            <a href=\"{{ file_url(value, 'download', true) }}\" class=\"no-hash attachment-item__filename\" title=\"{{ filename }}\">
                                {% include '@OroAttachment/Twig/picture.html.twig' with {
                                    sources: oro_resized_picture_sources(value),
                                    img_attrs: { alt: filename }
                                } %}
                                {{ filename }}
                            </a>
                            <span class=\"attachment-item__file-size\">({{ file_size(value.fileSize) }})</span>

                            {% if form.vars.allowDelete %}
                                <button data-role=\"remove\"
                                        class=\"btn btn-action btn-link delete\"
                                        type=\"button\"
                                        data-related=\"{{ form.emptyFile.vars.name }}\"
                                        {% if form.emptyFile.vars.disabled %}disabled=\"disabled\"{% endif %}
                                >
                                    <span class=\"fa-close\" aria-hidden=\"true\"></span>
                                </button>
                            {% endif %}
                        {% endif %}
                    </div>
                </div>
            </div>
        {% endif %}
    {% endapply %}
{% endblock %}

{% macro oro_attachment_multi_file_item_prototype(widget, attributes) %}
    {% if 'collection' in widget.vars.block_prefixes %}
        {% set form = widget.vars.prototype %}
        {% set name = widget.vars.full_name ~ '[' ~ widget.vars.prototype.vars.name ~ ']' %}
        {% set disabled = widget.vars.disabled %}
        {% set allow_delete = widget.vars.allow_delete %}
    {% else %}
        {% set form = widget %}
        {% set name = widget.vars.full_name %}
        {% set disabled = widget.parent.vars.disabled %}
        {% set allow_delete = widget.parent.vars.allow_delete %}
    {% endif %}

    <tr data-content=\"{{ name }}\" data-validation-optional-group {{ attributes }}>
        <td class=\"sort-order\">
            {{ form_widget(form.sortOrder) }}
        </td>
        <td class=\"file\">
            {{ form_widget(form.file) }}
        </td>
        {% if allow_delete %}
            <td>
                <button type=\"button\" class=\"removeRow btn btn-icon btn-square-lighter\" aria-label=\"{{ 'Remove row'|trans }}\">
                    <span class=\"fa-trash-o\" aria-hidden=\"true\"></span>
                </button>
            </td>
        {% endif %}
    </tr>
{% endmacro %}

{% block oro_attachment_multi_file_widget %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {% import _self as fields %}
    {% apply spaceless %}
        {% if prototype is defined %}
            {% set prototype_html = fields.oro_attachment_multi_file_item_prototype(form) %}
        {% endif %}
        {% set attr = attr|merge({'class': (attr.class is defined ? attr.class ~ ' ' : '') ~ ' file-collection' }) %}
        {% set prototype_name = form.vars.prototype_name %}

        <div class=\"row-oro attachment-fileitems\" {{ UI.renderPageComponentAttributes({
            module: 'oroattachment/js/app/components/multi-file-control-component',
            options: {
                maxNumber: form.vars.maxNumber
            }
        }) }}>
            <div {{ block('widget_container_attributes') }}>
                <table class=\"grid table-hover table table-bordered table-condensed\">
                    <thead>
                        <tr>
                            <th class=\"sort-order\"><span>{{ 'oro.attachment.fileitem.sort_order.label'|trans }}</span></th>
                            <th class=\"file\"><span>{{ fileLabel|default('oro.attachment.fileitem.file.label')|trans }}</span></th>
                            {% if form.vars.allow_delete %}
                                <th class=\"remove\"></th>
                            {% endif %}
                        </tr>
                    </thead>
                    <tbody data-last-index=\"{{ form.children|length}}\"
                           data-row-count-add=\"{{ form.vars.row_count_add }}\"
                           data-prototype-name=\"{{ prototype_name }}\"
                           {% if prototype_html is defined %} data-prototype=\"{{ prototype_html|escape }}\"{% endif %}
                    >
                        {% if form.children|length %}
                            {% for child in form.children %}
                                {{ fields.oro_attachment_multi_file_item_prototype(child) }}
                            {% endfor %}
                        {% elseif show_form_when_empty and prototype_html is defined %}
                            {% for i in 0..(form.vars.row_count_initial - 1) %}
                                {{ prototype_html|replace({(prototype_name): i})|raw }}
                            {% endfor %}
                        {% endif %}
                    </tbody>
                </table>
                {% if allow_add %}
                    <a class=\"btn add-list-item\" data-container=\".file-collection tbody\" href=\"javascript: void(0);\">
                        {{ addLabel|default('oro.attachment.fileitem.file.add.label')|trans }}
                    </a>
                {% endif %}
            </div>
        </div>
    {% endapply %}
{% endblock %}

{% block oro_attachment_multi_file_row %}
    {{ form_widget(form) }}
    {{ form_errors(form) }}
{% endblock %}

{% block oro_attachment_multi_image_widget %}
    {{ form_widget(form, {addLabel: 'oro.attachment.fileitem.image.add.label', fileLabel: 'oro.attachment.fileitem.image.label'}) }}
{% endblock %}
", "@OroAttachment/Form/fields.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/AttachmentBundle/Resources/views/Form/fields.html.twig");
    }
}
