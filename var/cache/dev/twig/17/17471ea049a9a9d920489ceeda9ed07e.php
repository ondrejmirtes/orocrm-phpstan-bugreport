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

/* @OroDigitalAsset/Form/fields.html.twig */
class __TwigTemplate_216ce5013ff16d4a0b6eb321b58b44ae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_oro_digital_asset_sourceFile_widget' => [$this, 'block__oro_digital_asset_sourceFile_widget'],
            '_oro_digital_asset_sourceFile_file_errors' => [$this, 'block__oro_digital_asset_sourceFile_file_errors'],
            'oro_file_with_digital_asset_widget' => [$this, 'block_oro_file_with_digital_asset_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDigitalAsset/Form/fields.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDigitalAsset/Form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDigitalAsset/Form/fields.html.twig"));

        // line 1
        $this->displayBlock('_oro_digital_asset_sourceFile_widget', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('_oro_digital_asset_sourceFile_file_errors', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('oro_file_with_digital_asset_widget', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block__oro_digital_asset_sourceFile_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_oro_digital_asset_sourceFile_widget", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_oro_digital_asset_sourceFile_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_oro_digital_asset_sourceFile_widget"));

        // line 2
        echo "    ";
        $this->displayBlock("oro_file_widget", $context, $blocks);
        // line 4
        if ((( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 4, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)) && $this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getTypeIsImage(twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 4, $this->source); })()), "mimeType", [], "any", false, false, false, 4)))) {
            // line 5
            $context["pictureSources"] = $this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getFilteredPictureSources((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 5, $this->source); })()), "digital_asset_large");
            // line 6
            echo "        <div class=\"preview\">
            <a class=\"view-image no-hash\"
               tabindex=\"-1\"
               data-gallery=\"image";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
            echo "\"
               data-sources=\"";
            // line 10
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["pictureSources"]) || array_key_exists("pictureSources", $context) ? $context["pictureSources"] : (function () { throw new RuntimeError('Variable "pictureSources" does not exist.', 10, $this->source); })()), "sources", [], "any", false, false, false, 10)), "html", null, true);
            echo "\"
               href=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pictureSources"]) || array_key_exists("pictureSources", $context) ? $context["pictureSources"] : (function () { throw new RuntimeError('Variable "pictureSources" does not exist.', 11, $this->source); })()), "src", [], "any", false, false, false, 11), "html", null, true);
            echo "\"
            >
                ";
            // line 13
            $this->loadTemplate("@OroAttachment/Twig/picture.html.twig", "@OroDigitalAsset/Form/fields.html.twig", 13)->display(twig_array_merge($context, ["file" =>             // line 14
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 14, $this->source); })()), "filter" => "digital_asset_medium", "img_attrs" => ["class" => "thumbnail", "alt" => twig_get_attribute($this->env, $this->source,             // line 18
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 18, $this->source); })()), "originalFilename", [], "any", false, false, false, 18)]]));
            // line 21
            echo "            </a>
        </div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 26
    public function block__oro_digital_asset_sourceFile_file_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("_oro_digital_asset_sourceFile_file_errors", $this->getTemplateName(), 26));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_oro_digital_asset_sourceFile_file_errors"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_oro_digital_asset_sourceFile_file_errors"));

        // line 27
        ob_start();
        // line 28
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 28, $this->source); })())) > 0)) {
            // line 29
            echo "            ";
            $context["combinedError"] = "";
            // line 30
            echo "            ";
            $context["newErrors"] = [];
            // line 31
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 32
                echo "                ";
                if (!twig_in_filter(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 32), (isset($context["newErrors"]) || array_key_exists("newErrors", $context) ? $context["newErrors"] : (function () { throw new RuntimeError('Variable "newErrors" does not exist.', 32, $this->source); })()))) {
                    // line 33
                    echo "                    ";
                    $context["newErrors"] = twig_array_merge((isset($context["newErrors"]) || array_key_exists("newErrors", $context) ? $context["newErrors"] : (function () { throw new RuntimeError('Variable "newErrors" does not exist.', 33, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 33)]);
                    // line 34
                    echo "                ";
                }
                // line 35
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            ";
            $context["combinedError"] = twig_join_filter((isset($context["newErrors"]) || array_key_exists("newErrors", $context) ? $context["newErrors"] : (function () { throw new RuntimeError('Variable "newErrors" does not exist.', 36, $this->source); })()), "; ");
            // line 37
            echo "            <span class=\"validation-failed\"><span><span>";
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlSanitize((isset($context["combinedError"]) || array_key_exists("combinedError", $context) ? $context["combinedError"] : (function () { throw new RuntimeError('Variable "combinedError" does not exist.', 37, $this->source); })()));
            echo "</span></span></span>
        ";
        }
        $___internal_parse_56_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        echo twig_spaceless($___internal_parse_56_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 42
    public function block_oro_file_with_digital_asset_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_file_with_digital_asset_widget", $this->getTemplateName(), 42));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_file_with_digital_asset_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_file_with_digital_asset_widget"));

        // line 43
        ob_start();
        // line 44
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroDigitalAsset/Form/fields.html.twig", 44)->unwrap();
        // line 45
        echo "
        <div class=\"digital-asset-item fields-row\"
            ";
        // line 47
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["module" => "oroui/js/app/components/view-component", "options" => ["view" => "orodigitalasset/js/app/views/digital-asset-choose-form-view", "isImageType" => twig_get_attribute($this->env, $this->source,         // line 51
(isset($context["dam_widget"]) || array_key_exists("dam_widget", $context) ? $context["dam_widget"] : (function () { throw new RuntimeError('Variable "dam_widget" does not exist.', 51, $this->source); })()), "is_image_type", [], "any", false, false, false, 51), "isSet" => (( !twig_test_empty(        // line 52
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 52, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "digitalAsset", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "data", [], "any", false, false, false, 52))), "widgetOptions" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source,         // line 54
(isset($context["dam_widget"]) || array_key_exists("dam_widget", $context) ? $context["dam_widget"] : (function () { throw new RuntimeError('Variable "dam_widget" does not exist.', 54, $this->source); })()), "is_image_type", [], "any", false, false, false, 54)) ? ("oro.digitalasset.dam.dialog.select_image") : ("oro.digitalasset.dam.dialog.select_file"))), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((twig_get_attribute($this->env, $this->source,         // line 57
($context["dam_widget"] ?? null), "route", [], "any", true, true, false, 57)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["dam_widget"] ?? null), "route", [], "any", false, false, false, 57), "oro_digital_asset_widget_choose")) : ("oro_digital_asset_widget_choose")), twig_get_attribute($this->env, $this->source, (isset($context["dam_widget"]) || array_key_exists("dam_widget", $context) ? $context["dam_widget"] : (function () { throw new RuntimeError('Variable "dam_widget" does not exist.', 57, $this->source); })()), "parameters", [], "any", false, false, false, 57)), "dialogOptions" => ["modal" => true, "dialogClass" => "digital-asset-dialog"]], "selectors" => ["digitalAssetInput" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 64
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "digitalAsset", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64)), "emptyFileInput" => ((twig_get_attribute($this->env, $this->source,         // line 65
($context["form"] ?? null), "emptyFile", [], "any", true, true, false, 65)) ? (("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "emptyFile", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65))) : (null))]]]], 47, $context, $this->getSourceContext());
        // line 68
        echo "
        >
            <div class=\"digital-asset-value\" data-role=\"digital-asset-value\">";
        // line 71
        if (twig_get_attribute($this->env, $this->source, (isset($context["dam_widget"]) || array_key_exists("dam_widget", $context) ? $context["dam_widget"] : (function () { throw new RuntimeError('Variable "dam_widget" does not exist.', 71, $this->source); })()), "is_valid_digital_asset", [], "any", false, false, false, 71)) {
            // line 72
            if (twig_get_attribute($this->env, $this->source, (isset($context["dam_widget"]) || array_key_exists("dam_widget", $context) ? $context["dam_widget"] : (function () { throw new RuntimeError('Variable "dam_widget" does not exist.', 72, $this->source); })()), "preview_metadata", [], "any", false, false, false, 72)) {
                // line 73
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dam_widget"]) || array_key_exists("dam_widget", $context) ? $context["dam_widget"] : (function () { throw new RuntimeError('Variable "dam_widget" does not exist.', 73, $this->source); })()), "preview_metadata", [], "any", false, false, false, 73), "download", [], "any", false, false, false, 73), "html", null, true);
                echo "\" class=\"no-hash digital-asset-filename\"
                        title=\"";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dam_widget"]) || array_key_exists("dam_widget", $context) ? $context["dam_widget"] : (function () { throw new RuntimeError('Variable "dam_widget" does not exist.', 74, $this->source); })()), "preview_metadata", [], "any", false, false, false, 74), "title", [], "any", false, false, false, 74), "html", null, true);
                echo "\" data-role=\"digital-asset-filename\">
                            <span class=\"digital-asset-filename__preview\">
                                ";
                // line 76
                if ((twig_get_attribute($this->env, $this->source, (isset($context["dam_widget"]) || array_key_exists("dam_widget", $context) ? $context["dam_widget"] : (function () { throw new RuntimeError('Variable "dam_widget" does not exist.', 76, $this->source); })()), "is_image_type", [], "any", false, false, false, 76) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dam_widget"]) || array_key_exists("dam_widget", $context) ? $context["dam_widget"] : (function () { throw new RuntimeError('Variable "dam_widget" does not exist.', 76, $this->source); })()), "preview_metadata", [], "any", false, false, false, 76), "preview", [], "any", false, false, false, 76))) {
                    // line 77
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dam_widget"] ?? null), "preview_metadata", [], "any", false, true, false, 77), "preview_webp", [], "any", true, true, false, 77)) {
                        // line 78
                        echo "                                        ";
                        $context["sources"] = [0 => ["srcset" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 79
(isset($context["dam_widget"]) || array_key_exists("dam_widget", $context) ? $context["dam_widget"] : (function () { throw new RuntimeError('Variable "dam_widget" does not exist.', 79, $this->source); })()), "preview_metadata", [], "any", false, false, false, 79), "preview_webp", [], "any", false, false, false, 79), "type" => "image/webp"]];
                        // line 82
                        echo "                                    ";
                    }
                    // line 83
                    echo "                                    ";
                    $this->loadTemplate("@OroAttachment/Twig/picture.html.twig", "@OroDigitalAsset/Form/fields.html.twig", 83)->display(twig_array_merge($context, ["sources" => ((                    // line 84
array_key_exists("sources", $context)) ? (_twig_default_filter((isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new RuntimeError('Variable "sources" does not exist.', 84, $this->source); })()), [])) : ([])), "img_attrs" => ["src" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 86
(isset($context["dam_widget"]) || array_key_exists("dam_widget", $context) ? $context["dam_widget"] : (function () { throw new RuntimeError('Variable "dam_widget" does not exist.', 86, $this->source); })()), "preview_metadata", [], "any", false, false, false, 86), "preview", [], "any", false, false, false, 86), "alt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 87
(isset($context["dam_widget"]) || array_key_exists("dam_widget", $context) ? $context["dam_widget"] : (function () { throw new RuntimeError('Variable "dam_widget" does not exist.', 87, $this->source); })()), "preview_metadata", [], "any", false, false, false, 87), "title", [], "any", false, false, false, 87)]]));
                    // line 90
                    echo "                                ";
                } else {
                    // line 91
                    echo "                                    <span class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dam_widget"]) || array_key_exists("dam_widget", $context) ? $context["dam_widget"] : (function () { throw new RuntimeError('Variable "dam_widget" does not exist.', 91, $this->source); })()), "preview_metadata", [], "any", false, false, false, 91), "icon", [], "any", false, false, false, 91), "html", null, true);
                    echo "\" aria-hidden=\"true\"></span>
                                ";
                }
                // line 93
                echo "                            </span>
                            <span class=\"digital-asset-filename__text\">";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dam_widget"]) || array_key_exists("dam_widget", $context) ? $context["dam_widget"] : (function () { throw new RuntimeError('Variable "dam_widget" does not exist.', 94, $this->source); })()), "preview_metadata", [], "any", false, false, false, 94), "filename", [], "any", false, false, false, 94), "html", null, true);
                echo "</span>
                        </a>
                    ";
            }
        } else {
            // line 98
            echo "<a href=\"#\" class=\"no-hash digital-asset-filename\" data-role=\"digital-asset-filename\">
                        <span class=\"digital-asset-filename__preview\">
                            <span class=\"fa-file-o\" aria-hidden=\"true\"></span>
                        </span>
                        <span class=\"digital-asset-filename__text\">";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.digitalasset.dam.form.invalid_digital_asset"), "html", null, true);
            echo "</span>
                    </a>";
        }
        // line 105
        echo "</div>

            <div class=\"digital-asset-controls hide\" data-role=\"digital-asset-controls\">
                <a href=\"#\" role=\"button\" data-role=\"digital-asset-update\" class=\"btn btn-icon btn-square-lighter\"
                   title=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.digitalasset.dam.form.choose_another.label"), "html", null, true);
        echo "\"
                   aria-label=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.digitalasset.dam.form.choose_another.label"), "html", null, true);
        echo "\">
                    <span class=\"fa-edit\" aria-hidden=\"true\"></span>
                </a>

                ";
        // line 114
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "emptyFile", [], "any", true, true, false, 114)) {
            // line 115
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "emptyFile", [], "any", false, false, false, 115), 'row');
            echo "

                    <a href=\"#\" role=\"button\" data-role=\"digital-asset-remove\" class=\"btn btn-icon btn-square-lighter\"
                       title=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.digitalasset.dam.form.remove.label"), "html", null, true);
            echo "\"
                       aria-label=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.digitalasset.dam.form.remove.label"), "html", null, true);
            echo "\">
                        <span class=\"fa-close\" aria-hidden=\"true\"></span>
                    </a>
                ";
        }
        // line 123
        echo "            </div>

            <a href=\"#\" class=\"btn digital-asset-choose hide\" role=\"button\" data-role=\"digital-asset-choose\">
                ";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, (isset($context["dam_widget"]) || array_key_exists("dam_widget", $context) ? $context["dam_widget"] : (function () { throw new RuntimeError('Variable "dam_widget" does not exist.', 126, $this->source); })()), "is_image_type", [], "any", false, false, false, 126)) ? ("oro.digitalasset.dam.form.choose_image.label") : ("oro.digitalasset.dam.form.choose_file.label"))), "html", null, true);
        // line 128
        echo "
            </a>

            ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "digitalAsset", [], "any", false, false, false, 131), 'row');
        echo "
        </div>

        ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "file", [], "any", false, false, false, 134), 'errors');
        echo "
        ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "digitalAsset", [], "any", false, false, false, 135), 'errors');
        $___internal_parse_57_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        echo twig_spaceless($___internal_parse_57_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroDigitalAsset/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  352 => 43,  349 => 135,  345 => 134,  339 => 131,  334 => 128,  332 => 126,  327 => 123,  320 => 119,  316 => 118,  309 => 115,  307 => 114,  300 => 110,  296 => 109,  290 => 105,  285 => 102,  279 => 98,  272 => 94,  269 => 93,  263 => 91,  260 => 90,  258 => 87,  257 => 86,  256 => 84,  254 => 83,  251 => 82,  249 => 79,  247 => 78,  244 => 77,  242 => 76,  237 => 74,  232 => 73,  230 => 72,  228 => 71,  224 => 68,  222 => 65,  221 => 64,  220 => 57,  219 => 54,  218 => 52,  217 => 51,  216 => 47,  212 => 45,  210 => 44,  208 => 43,  195 => 42,  182 => 27,  175 => 37,  172 => 36,  166 => 35,  163 => 34,  160 => 33,  157 => 32,  152 => 31,  149 => 30,  146 => 29,  144 => 28,  142 => 27,  129 => 26,  114 => 21,  112 => 18,  111 => 14,  110 => 13,  105 => 11,  101 => 10,  97 => 9,  92 => 6,  90 => 5,  88 => 4,  85 => 2,  72 => 1,  59 => 42,  56 => 41,  54 => 26,  51 => 25,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block _oro_digital_asset_sourceFile_widget %}
    {{ block('oro_file_widget') }}

    {%- if value is not empty and value.id and oro_type_is_image(value.mimeType) -%}
        {% set pictureSources = oro_filtered_picture_sources(value, 'digital_asset_large') %}
        <div class=\"preview\">
            <a class=\"view-image no-hash\"
               tabindex=\"-1\"
               data-gallery=\"image{{ value.id }}\"
               data-sources=\"{{ pictureSources.sources|json_encode }}\"
               href=\"{{ pictureSources.src }}\"
            >
                {% include '@OroAttachment/Twig/picture.html.twig' with {
                    file: value,
                    filter: 'digital_asset_medium',
                    img_attrs: {
                        class: 'thumbnail',
                        alt: value.originalFilename,
                    }
                } %}
            </a>
        </div>
    {%- endif -%}
{% endblock %}

{% block _oro_digital_asset_sourceFile_file_errors %}
    {%- apply spaceless -%}
        {% if errors|length > 0 %}
            {% set combinedError = '' %}
            {% set newErrors = [] %}
            {% for error in errors %}
                {% if error.message not in newErrors %}
                    {% set newErrors = newErrors|merge([error.message]) %}
                {% endif %}
            {% endfor %}
            {% set combinedError = newErrors|join('; ') %}
            <span class=\"validation-failed\"><span><span>{{ combinedError|oro_html_sanitize }}</span></span></span>
        {% endif %}
    {%- endapply -%}
{% endblock %}

{% block oro_file_with_digital_asset_widget %}
    {%- apply spaceless -%}
        {% import '@OroUI/macros.html.twig' as UI %}

        <div class=\"digital-asset-item fields-row\"
            {{ UI.renderPageComponentAttributes({
                module: 'oroui/js/app/components/view-component',
                options: {
                    view: 'orodigitalasset/js/app/views/digital-asset-choose-form-view',
                    isImageType: dam_widget.is_image_type,
                    isSet: (value is not empty and value.id) or form.digitalAsset.vars.data is not empty,
                    widgetOptions: {
                        title: (dam_widget.is_image_type
                            ? 'oro.digitalasset.dam.dialog.select_image'
                            : 'oro.digitalasset.dam.dialog.select_file')|trans,
                        url: path(dam_widget.route|default('oro_digital_asset_widget_choose'), dam_widget.parameters),
                        dialogOptions: {
                            modal: true,
                            dialogClass: 'digital-asset-dialog'
                        }
                    },
                    selectors: {
                        digitalAssetInput: '#' ~ form.digitalAsset.vars.id,
                        emptyFileInput: (form.emptyFile is defined ? '#' ~ form.emptyFile.vars.id : null),
                    }
                }
            }) }}
        >
            <div class=\"digital-asset-value\" data-role=\"digital-asset-value\">
                {%- if dam_widget.is_valid_digital_asset -%}
                    {% if dam_widget.preview_metadata %}
                        <a href=\"{{ dam_widget.preview_metadata.download }}\" class=\"no-hash digital-asset-filename\"
                        title=\"{{ dam_widget.preview_metadata.title }}\" data-role=\"digital-asset-filename\">
                            <span class=\"digital-asset-filename__preview\">
                                {% if dam_widget.is_image_type and dam_widget.preview_metadata.preview %}
                                    {% if dam_widget.preview_metadata.preview_webp is defined %}
                                        {% set sources = [{
                                            srcset: dam_widget.preview_metadata.preview_webp,
                                            type: 'image/webp',
                                        }] %}
                                    {% endif %}
                                    {% include '@OroAttachment/Twig/picture.html.twig' with {
                                        sources: sources|default([]),
                                        img_attrs: {
                                            src: dam_widget.preview_metadata.preview,
                                            alt: dam_widget.preview_metadata.title,
                                        }
                                    } %}
                                {% else %}
                                    <span class=\"{{ dam_widget.preview_metadata.icon }}\" aria-hidden=\"true\"></span>
                                {% endif %}
                            </span>
                            <span class=\"digital-asset-filename__text\">{{- dam_widget.preview_metadata.filename -}}</span>
                        </a>
                    {% endif %}
                {%- else -%}
                    <a href=\"#\" class=\"no-hash digital-asset-filename\" data-role=\"digital-asset-filename\">
                        <span class=\"digital-asset-filename__preview\">
                            <span class=\"fa-file-o\" aria-hidden=\"true\"></span>
                        </span>
                        <span class=\"digital-asset-filename__text\">{{- 'oro.digitalasset.dam.form.invalid_digital_asset'|trans -}}</span>
                    </a>
                {%- endif -%}
            </div>

            <div class=\"digital-asset-controls hide\" data-role=\"digital-asset-controls\">
                <a href=\"#\" role=\"button\" data-role=\"digital-asset-update\" class=\"btn btn-icon btn-square-lighter\"
                   title=\"{{ 'oro.digitalasset.dam.form.choose_another.label'|trans }}\"
                   aria-label=\"{{ 'oro.digitalasset.dam.form.choose_another.label'|trans }}\">
                    <span class=\"fa-edit\" aria-hidden=\"true\"></span>
                </a>

                {% if form.emptyFile is defined %}
                    {{ form_row(form.emptyFile) }}

                    <a href=\"#\" role=\"button\" data-role=\"digital-asset-remove\" class=\"btn btn-icon btn-square-lighter\"
                       title=\"{{ 'oro.digitalasset.dam.form.remove.label'|trans }}\"
                       aria-label=\"{{ 'oro.digitalasset.dam.form.remove.label'|trans }}\">
                        <span class=\"fa-close\" aria-hidden=\"true\"></span>
                    </a>
                {% endif %}
            </div>

            <a href=\"#\" class=\"btn digital-asset-choose hide\" role=\"button\" data-role=\"digital-asset-choose\">
                {{ (dam_widget.is_image_type
                    ? 'oro.digitalasset.dam.form.choose_image.label'
                    : 'oro.digitalasset.dam.form.choose_file.label')|trans }}
            </a>

            {{ form_row(form.digitalAsset) }}
        </div>

        {{ form_errors(form.file) }}
        {{ form_errors(form.digitalAsset) }}
    {%- endapply -%}
{% endblock %}
", "@OroDigitalAsset/Form/fields.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DigitalAssetBundle/Resources/views/Form/fields.html.twig");
    }
}
