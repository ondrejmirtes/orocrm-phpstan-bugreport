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

/* @OroEmbeddedForm/EmbeddedForm/view.html.twig */
class __TwigTemplate_0c4e2c9918ccf00835a2f8ee41e2dccd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navButtons' => [$this, 'block_navButtons'],
            'pageHeader' => [$this, 'block_pageHeader'],
            'content_data' => [$this, 'block_content_data'],
            'stats' => [$this, 'block_stats'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroUI/actions/view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmbeddedForm/EmbeddedForm/view.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmbeddedForm/EmbeddedForm/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmbeddedForm/EmbeddedForm/view.html.twig"));

        // line 2
        $macros["ui"] = $this->macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmbeddedForm/EmbeddedForm/view.html.twig", 2)->unwrap();

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%form.title%" => twig_get_attribute($this->env, $this->source,         // line 3
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3)]]);
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/view.html.twig", "@OroEmbeddedForm/EmbeddedForm/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 5));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 6
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmbeddedForm/EmbeddedForm/view.html.twig", 6)->unwrap();
        // line 7
        echo "
    ";
        // line 8
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_embedded_form_delete")) {
            // line 9
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_deleteButton", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_embedded_form_delete", ["id" => twig_get_attribute($this->env, $this->source,             // line 10
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_embedded_form_list"), "aCss" => "no-hash remove-button", "id" => "btn-remove-embedded-form", "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.embeddedform.entity_label")]], 9, $context, $this->getSourceContext());
            // line 15
            echo "
        ";
            // line 16
            echo twig_call_macro($macros["UI"], "macro_buttonSeparator", [], 16, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 18
        echo "
    ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_embedded_form_delete")) {
            // line 20
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_button", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_embedded_form_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit")]], 20, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 22
        echo "    ";
        echo twig_call_macro($macros["UI"], "macro_button", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_embedded_form_list"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel")]], 22, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 25
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 25));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 26
        echo "    ";
        $context["breadcrumbs"] = ["entity" =>         // line 27
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 27, $this->source); })()), "indexPath" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_embedded_form_list"), "indexLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.embeddedform.entity_plural_label"), "entityTitle" => twig_get_attribute($this->env, $this->source,         // line 30
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })()), "title", [], "any", false, false, false, 30)];
        // line 32
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 35
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 35));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 36
        echo "    ";
        $macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroEmbeddedForm/EmbeddedForm/view.html.twig", 36)->unwrap();
        // line 37
        echo "
    ";
        // line 38
        $context["id"] = "embedded-form-get-code";
        // line 39
        echo "
    ";
        // line 40
        $this->displayBlock('stats', $context, $blocks);
        // line 42
        echo "
    ";
        // line 43
        ob_start();
        // line 44
        echo "        <div class=\"widget-content\">
            <div class=\"row-fluid form-horizontal\">
                <div class=\"responsive-block\">
                    ";
        // line 47
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.embeddedform.title.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 47, $this->source); })()), "title", [], "any", false, false, false, 47)], 47, $context, $this->getSourceContext());
        echo "
                    ";
        // line 48
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.embeddedform.form_type.label"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 48, $this->source); })()), "N/A")) : ("N/A")))], 48, $context, $this->getSourceContext());
        echo "

                    ";
        // line 51
        echo "                    <div class=\"control-group\">
                        <label class=\"control-label\">";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.embeddedform.css.label"), "html", null, true);
        echo "</label>

                        <div class=\"controls\" style=\"overflow-y: scroll; height: 180px;\">
                            <bdo dir=\"ltr\">";
        // line 55
        echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 55, $this->source); })()), "css", [], "any", false, false, false, 55), "html", null, true));
        echo "</bdo>
                        </div>
                    </div>

                    ";
        // line 59
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.embeddedform.success_message.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 59, $this->source); })()), "successMessage", [], "any", false, false, false, 59), null, null, ["dir" => "ltr"]], 59, $context, $this->getSourceContext());
        echo "
                    ";
        // line 60
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.embeddedform.allowed_domains.label"), $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlSanitize(twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 60, $this->source); })()), "allowedDomains", [], "any", false, false, false, 60), "html", null, true)))], 60, $context, $this->getSourceContext());
        echo "
                </div>
            </div>
        </div>
    ";
        $context["formDetails"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        echo "    ";
        ob_start();
        // line 66
        echo "    <div class=\"widget-content\">
        <iframe
            id=\"embedded-form\"
            src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("oro_embedded_form_submit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69)]), "html", null, true);
        echo "\"
            width=\"640\"
            height=\"800\"
            frameborder=\"0\"></iframe>
    </div>
    ";
        $context["formPreview"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 75
        echo "
    ";
        // line 76
        ob_start();
        // line 77
        echo "        <textarea id=\"oro_embeddedform_iframe\" cols=\"60\" rows=\"10\" class=\"fill-tab\" style=\"height: 300px\" dir=\"ltr\">";
        // line 79
        echo "<div id=\"embedded-form-container-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79), "html", null, true);
        echo "\"></div>
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "request", [], "any", false, false, false, 80), "getSchemeAndHttpHost", [], "method", false, false, false, 80) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/oroembeddedform/js/embed.form.js")), "html", null, true);
        echo "\"></script>
<script>
    new ORO.EmbedForm({
        container: 'embedded-form-container-";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83), "html", null, true);
        echo "',
        iframe: {
            src: \"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("oro_embedded_form_submit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85)]), "html", null, true);
        echo "\",
            width: 640,
            height: 800,
            frameBorder: 0
        }
    });
</script>
";
        // line 93
        echo "</textarea>
    ";
        $context["getCodeIframe"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        echo "
    ";
        // line 96
        ob_start();
        // line 97
        echo "        <div class=\"alert alert-warning\" role=\"alert\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.embeddedform.tabs.inline.description");
        echo "</div>
        <textarea id=\"oro_embeddedform_inline\" cols=\"60\" rows=\"10\" class=\"fill-tab\" style=\"height: 300px\" dir=\"ltr\">";
        // line 100
        echo "<div id=\"embedded-form-container-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100), "html", null, true);
        echo "\"></div>
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "request", [], "any", false, false, false, 101), "getSchemeAndHttpHost", [], "method", false, false, false, 101) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/oroembeddedform/js/embed.form.js")), "html", null, true);
        echo "\"></script>
<script>
    new ORO.EmbedForm({
        container: 'embedded-form-container-";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 104, $this->source); })()), "id", [], "any", false, false, false, 104), "html", null, true);
        echo "',
        xhr: {
            url: \"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("oro_embedded_form_submit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106), "inline" => true]), "html", null, true);
        echo "\"
        }
    });
</script>
";
        // line 111
        echo "</textarea>
    ";
        $context["getCodeInline"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 113
        echo "
    ";
        // line 114
        $context["getCodeTabs"] = [0 => ["alias" => "oro_embeddedform_iframe", "widgetType" => "block", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.embeddedform.tabs.iframe.label"), "url" => "#oro_embeddedform_iframe", "content" =>         // line 120
(isset($context["getCodeIframe"]) || array_key_exists("getCodeIframe", $context) ? $context["getCodeIframe"] : (function () { throw new RuntimeError('Variable "getCodeIframe" does not exist.', 120, $this->source); })())], 1 => ["alias" => "oro_embeddedform_inline", "widgetType" => "block", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.embeddedform.tabs.inline.label"), "url" => "#oro_embeddedform_inline", "content" =>         // line 127
(isset($context["getCodeInline"]) || array_key_exists("getCodeInline", $context) ? $context["getCodeInline"] : (function () { throw new RuntimeError('Variable "getCodeInline" does not exist.', 127, $this->source); })())]];
        // line 130
        echo "
    ";
        // line 131
        ob_start();
        // line 132
        echo "        ";
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderWidget($this->env, ["widgetType" => "block", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_embedded_form_info", ["id" => twig_get_attribute($this->env, $this->source,         // line 134
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 134, $this->source); })()), "id", [], "any", false, false, false, 134)])]);
        // line 135
        echo "
    ";
        $context["informationWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 137
        echo "
    ";
        // line 138
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General"), "class" => "active", "subblocks" => [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Details"), "data" => twig_array_merge([0 =>         // line 144
(isset($context["informationWidget"]) || array_key_exists("informationWidget", $context) ? $context["informationWidget"] : (function () { throw new RuntimeError('Variable "informationWidget" does not exist.', 144, $this->source); })())], [0 => (isset($context["formDetails"]) || array_key_exists("formDetails", $context) ? $context["formDetails"] : (function () { throw new RuntimeError('Variable "formDetails" does not exist.', 144, $this->source); })())])], 1 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Form Preview"), "data" => [0 =>         // line 148
(isset($context["formPreview"]) || array_key_exists("formPreview", $context) ? $context["formPreview"] : (function () { throw new RuntimeError('Variable "formPreview" does not exist.', 148, $this->source); })())]]]], 1 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Get code"), "subblocks" => [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Code"), "data" => [0 => $this->extensions['Oro\Bundle\UIBundle\Twig\TabExtension']->tabPanel($this->env,         // line 156
(isset($context["getCodeTabs"]) || array_key_exists("getCodeTabs", $context) ? $context["getCodeTabs"] : (function () { throw new RuntimeError('Variable "getCodeTabs" does not exist.', 156, $this->source); })()))]]]]];
        // line 160
        echo "
    ";
        // line 161
        $context["data"] = ["dataBlocks" =>         // line 162
(isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 162, $this->source); })())];
        // line 164
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 40
    public function block_stats($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stats", $this->getTemplateName(), 40));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        // line 41
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroEmbeddedForm/EmbeddedForm/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 41,  381 => 40,  365 => 164,  363 => 162,  362 => 161,  359 => 160,  357 => 156,  356 => 148,  355 => 144,  354 => 138,  351 => 137,  347 => 135,  345 => 134,  343 => 132,  341 => 131,  338 => 130,  336 => 127,  335 => 120,  334 => 114,  331 => 113,  327 => 111,  320 => 106,  315 => 104,  309 => 101,  304 => 100,  299 => 97,  297 => 96,  294 => 95,  290 => 93,  280 => 85,  275 => 83,  269 => 80,  264 => 79,  262 => 77,  260 => 76,  257 => 75,  248 => 69,  243 => 66,  240 => 65,  232 => 60,  228 => 59,  221 => 55,  215 => 52,  212 => 51,  207 => 48,  203 => 47,  198 => 44,  196 => 43,  193 => 42,  191 => 40,  188 => 39,  186 => 38,  183 => 37,  180 => 36,  167 => 35,  151 => 32,  149 => 30,  148 => 27,  146 => 26,  133 => 25,  117 => 22,  111 => 20,  109 => 19,  106 => 18,  101 => 16,  98 => 15,  96 => 10,  94 => 9,  92 => 8,  89 => 7,  86 => 6,  73 => 5,  59 => 1,  57 => 3,  54 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/view.html.twig' %}
{% import '@OroUI/macros.html.twig' as ui %}
{% oro_title_set({ params : {\"%form.title%\": entity.title} }) %}

{% block navButtons %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% if is_granted('oro_embedded_form_delete') %}
        {{ UI.deleteButton({
            'dataUrl': path('oro_embedded_form_delete', {'id': entity.id}),
            'dataRedirect': path('oro_embedded_form_list'),
            'aCss': 'no-hash remove-button',
            'id': 'btn-remove-embedded-form',
            'entity_label': 'oro.embeddedform.entity_label'|trans,
        }) }}
        {{ UI.buttonSeparator() }}
    {% endif %}

    {% if is_granted('oro_embedded_form_delete') %}
        {{ UI.button({'path' : path('oro_embedded_form_update', {'id': entity.id}), 'title' : 'Edit'|trans, 'label' : 'Edit'|trans}) }}
    {% endif %}
    {{ UI.button({'path' : path('oro_embedded_form_list'), 'title' : 'Cancel'|trans, 'label' : 'Cancel'|trans}) }}
{% endblock %}

{% block pageHeader %}
    {% set breadcrumbs = {
        'entity':      entity,
        'indexPath':   path('oro_embedded_form_list'),
        'indexLabel': 'oro.embeddedform.entity_plural_label'|trans,
        'entityTitle': entity.title
    } %}
    {{ parent() }}
{% endblock pageHeader %}

{% block content_data %}
    {% import '@OroUI/macros.html.twig' as ui %}

    {% set id = 'embedded-form-get-code' %}

    {% block stats %}
    {% endblock stats %}

    {% set formDetails %}
        <div class=\"widget-content\">
            <div class=\"row-fluid form-horizontal\">
                <div class=\"responsive-block\">
                    {{ ui.renderProperty('oro.embeddedform.title.label'|trans, entity.title) }}
                    {{ ui.renderProperty('oro.embeddedform.form_type.label'|trans, label|default('N/A')|trans) }}

                    {# to display css in a div with vertical scroll #}
                    <div class=\"control-group\">
                        <label class=\"control-label\">{{ 'oro.embeddedform.css.label'|trans }}</label>

                        <div class=\"controls\" style=\"overflow-y: scroll; height: 180px;\">
                            <bdo dir=\"ltr\">{{ entity.css|nl2br }}</bdo>
                        </div>
                    </div>

                    {{ ui.renderProperty('oro.embeddedform.success_message.label'|trans, entity.successMessage, null, null, {'dir': 'ltr'}) }}
                    {{ ui.renderHtmlProperty('oro.embeddedform.allowed_domains.label'|trans, entity.allowedDomains|nl2br|oro_html_sanitize) }}
                </div>
            </div>
        </div>
    {% endset %}
    {% set formPreview %}
    <div class=\"widget-content\">
        <iframe
            id=\"embedded-form\"
            src=\"{{ url('oro_embedded_form_submit', {'id': entity.id}) }}\"
            width=\"640\"
            height=\"800\"
            frameborder=\"0\"></iframe>
    </div>
    {% endset %}

    {% set getCodeIframe %}
        <textarea id=\"oro_embeddedform_iframe\" cols=\"60\" rows=\"10\" class=\"fill-tab\" style=\"height: 300px\" dir=\"ltr\">
{%- autoescape %}
<div id=\"embedded-form-container-{{ entity.id }}\"></div>
<script src=\"{{ app.request.getSchemeAndHttpHost() ~ asset('bundles/oroembeddedform/js/embed.form.js') }}\"></script>
<script>
    new ORO.EmbedForm({
        container: 'embedded-form-container-{{ entity.id }}',
        iframe: {
            src: \"{{ url('oro_embedded_form_submit', {'id': entity.id}) }}\",
            width: 640,
            height: 800,
            frameBorder: 0
        }
    });
</script>
{% endautoescape -%}
        </textarea>
    {% endset %}

    {% set getCodeInline %}
        <div class=\"alert alert-warning\" role=\"alert\">{{ 'oro.embeddedform.tabs.inline.description'|trans|raw }}</div>
        <textarea id=\"oro_embeddedform_inline\" cols=\"60\" rows=\"10\" class=\"fill-tab\" style=\"height: 300px\" dir=\"ltr\">
{%- autoescape %}
<div id=\"embedded-form-container-{{ entity.id }}\"></div>
<script src=\"{{ app.request.getSchemeAndHttpHost() ~ asset('bundles/oroembeddedform/js/embed.form.js') }}\"></script>
<script>
    new ORO.EmbedForm({
        container: 'embedded-form-container-{{ entity.id }}',
        xhr: {
            url: \"{{ url('oro_embedded_form_submit', {'id': entity.id, 'inline': true}) }}\"
        }
    });
</script>
{% endautoescape -%}
        </textarea>
    {% endset %}

    {% set getCodeTabs = [
        {
            'alias': 'oro_embeddedform_iframe',
            'widgetType': 'block',
            'label': 'oro.embeddedform.tabs.iframe.label'|trans,
            'url': '#oro_embeddedform_iframe',
            'content': getCodeIframe
        },
        {
            'alias': 'oro_embeddedform_inline',
            'widgetType': 'block',
            'label': 'oro.embeddedform.tabs.inline.label'|trans,
            'url': '#oro_embeddedform_inline',
            'content': getCodeInline
        }
    ] %}

    {% set informationWidget %}
        {{ oro_widget_render({
            'widgetType': 'block',
            'url': path('oro_embedded_form_info', {id: entity.id})
        }) }}
    {% endset %}

    {% set dataBlocks = [{
        'title': 'General'|trans,
        'class': 'active',
        'subblocks': [
            {
                'title': 'Details'|trans,
                'data': [informationWidget]|merge([formDetails])
            },
            {
                'title': 'Form Preview'|trans,
                'data': [formPreview]
            }
        ]
    },
    {
        'title': 'Get code'|trans,
        'subblocks': [{
            'title': 'Code'|trans,
            'data': [tabPanel(getCodeTabs)]
        }]
    }]
    %}

    {% set data = {
        'dataBlocks': dataBlocks
    } %}
    {{ parent() }}
{% endblock content_data %}
", "@OroEmbeddedForm/EmbeddedForm/view.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmbeddedFormBundle/Resources/views/EmbeddedForm/view.html.twig");
    }
}
