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

/* @OroNote/Note/widget/info.html.twig */
class __TwigTemplate_c2a91b021a647c5c8d101b672b0a16e9 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNote/Note/widget/info.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNote/Note/widget/info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNote/Note/widget/info.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroNote/Note/widget/info.html.twig", 2)->unwrap();
        // line 3
        $macros["AC"] = $this->macros["AC"] = $this->loadTemplate("@OroActivity/macros.html.twig", "@OroNote/Note/widget/info.html.twig", 3)->unwrap();
        // line 4
        echo "
<div class=\"widget-content form-horizontal box-content row-fluid\">
    <div class=\"responsive-block\">
        <div class=\"activity-context-activity-list\">
            ";
        // line 8
        echo twig_call_macro($macros["AC"], "macro_activity_contexts", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()), (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 8, $this->source); })()), true, "oronote/js/app/components/note-context-component"], 8, $context, $this->getSourceContext());
        echo "
        </div>

        ";
        // line 11
        echo twig_call_macro($macros["UI"], "macro_renderSwitchableHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.note.message.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 11, $this->source); })()), "message", [], "any", false, false, false, 11)], 11, $context, $this->getSourceContext());
        echo "
    </div>
    ";
        // line 13
        if (( !twig_test_empty((isset($context["attachment"]) || array_key_exists("attachment", $context) ? $context["attachment"] : (function () { throw new RuntimeError('Variable "attachment" does not exist.', 13, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["attachment"]) || array_key_exists("attachment", $context) ? $context["attachment"] : (function () { throw new RuntimeError('Variable "attachment" does not exist.', 13, $this->source); })()), "attachmentURL", [], "any", false, false, false, 13))) {
            // line 14
            echo "    <div class=\"note-attachments\">
        <div class=\"control-group\">
            <label class=\"control-label\">
                ";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attachment"), "html", null, true);
            echo "
            </label>
            <div class=\"attachment-item attachment-item--note\">
                <div class=\"thumbnail\">
                    ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attachment"]) || array_key_exists("attachment", $context) ? $context["attachment"] : (function () { throw new RuntimeError('Variable "attachment" does not exist.', 21, $this->source); })()), "attachmentThumbnailPicture", [], "any", false, false, false, 21), "src", [], "any", false, false, false, 21)) {
                // line 22
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attachment"]) || array_key_exists("attachment", $context) ? $context["attachment"] : (function () { throw new RuntimeError('Variable "attachment" does not exist.', 22, $this->source); })()), "attachmentURL", [], "any", false, false, false, 22), "url", [], "any", false, false, false, 22), "html", null, true);
                echo "\" data-gallery=\"note-view-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22), "html", null, true);
                echo "\" class=\"no-hash\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attachment"]) || array_key_exists("attachment", $context) ? $context["attachment"] : (function () { throw new RuntimeError('Variable "attachment" does not exist.', 22, $this->source); })()), "attachmentFileName", [], "any", false, false, false, 22), "html_attr");
                echo "\" data-sources=\"";
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attachment"]) || array_key_exists("attachment", $context) ? $context["attachment"] : (function () { throw new RuntimeError('Variable "attachment" does not exist.', 22, $this->source); })()), "attachmentURL", [], "any", false, false, false, 22), "sources", [], "any", false, false, false, 22)), "html", null, true);
                echo "\">
                            ";
                // line 23
                $this->loadTemplate("@OroAttachment/Twig/picture.html.twig", "@OroNote/Note/widget/info.html.twig", 23)->display(twig_array_merge($context, ["sources" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 24
(isset($context["attachment"]) || array_key_exists("attachment", $context) ? $context["attachment"] : (function () { throw new RuntimeError('Variable "attachment" does not exist.', 24, $this->source); })()), "attachmentThumbnailPicture", [], "any", false, false, false, 24), "sources", [], "any", false, false, false, 24), "img_attrs" => ["src" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 26
(isset($context["attachment"]) || array_key_exists("attachment", $context) ? $context["attachment"] : (function () { throw new RuntimeError('Variable "attachment" does not exist.', 26, $this->source); })()), "attachmentThumbnailPicture", [], "any", false, false, false, 26), "src", [], "any", false, false, false, 26), "class" => "thumbnail"]]));
                // line 30
                echo "                        </a>
                    ";
            } else {
                // line 32
                echo "                        <span class=\"fa ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attachment"]) || array_key_exists("attachment", $context) ? $context["attachment"] : (function () { throw new RuntimeError('Variable "attachment" does not exist.', 32, $this->source); })()), "attachmentIcon", [], "any", false, false, false, 32), "html", null, true);
                echo " fa-offset-none\" aria-hidden=\"true\"></span>
                    ";
            }
            // line 34
            echo "                </div>
                <div class=\"dropdown link-to-record\">
                    ";
            // line 36
            $context["togglerId"] = uniqid("dropdown-");
            // line 37
            echo "                    <a id=\"";
            echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 37, $this->source); })()), "html", null, true);
            echo "\" class=\"no-hash attachment-item__filename dropdown-toggle dropdown-toggle--no-caret file-menu\" href=\"#\" role=\"button\" data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        <span class=\"fa ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attachment"]) || array_key_exists("attachment", $context) ? $context["attachment"] : (function () { throw new RuntimeError('Variable "attachment" does not exist.', 39, $this->source); })()), "attachmentIcon", [], "any", false, false, false, 39), "html", null, true);
            echo "\" aria-hidden=\"true\"></span> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attachment"]) || array_key_exists("attachment", $context) ? $context["attachment"] : (function () { throw new RuntimeError('Variable "attachment" does not exist.', 39, $this->source); })()), "attachmentFileName", [], "any", false, false, false, 39), "html", null, true);
            echo "
                    </a>
                    <ul class=\"dropdown-menu file-menu\" role=\"menu\" aria-labelledby=\"";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "\">
                        <li>
                            <a class=\"dropdown-item no-hash\" tabindex=\"-1\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attachment"]) || array_key_exists("attachment", $context) ? $context["attachment"] : (function () { throw new RuntimeError('Variable "attachment" does not exist.', 43, $this->source); })()), "attachmentURL", [], "any", false, false, false, 43), "url", [], "any", false, false, false, 43), "html", null, true);
            echo "\">
                                ";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.translation.action.download"), "html", null, true);
            echo " <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attachment"]) || array_key_exists("attachment", $context) ? $context["attachment"] : (function () { throw new RuntimeError('Variable "attachment" does not exist.', 44, $this->source); })()), "attachmentSize", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    ";
        }
        // line 54
        echo "</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroNote/Note/widget/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 54,  136 => 44,  132 => 43,  127 => 41,  120 => 39,  114 => 37,  112 => 36,  108 => 34,  102 => 32,  98 => 30,  96 => 26,  95 => 24,  94 => 23,  83 => 22,  81 => 21,  74 => 17,  69 => 14,  67 => 13,  62 => 11,  56 => 8,  50 => 4,  48 => 3,  46 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Activity action template #}
{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroActivity/macros.html.twig' as AC %}

<div class=\"widget-content form-horizontal box-content row-fluid\">
    <div class=\"responsive-block\">
        <div class=\"activity-context-activity-list\">
            {{ AC.activity_contexts(entity, target, true, 'oronote/js/app/components/note-context-component') }}
        </div>

        {{ UI.renderSwitchableHtmlProperty('oro.note.message.label'|trans, entity.message) }}
    </div>
    {% if attachment is not empty and attachment.attachmentURL %}
    <div class=\"note-attachments\">
        <div class=\"control-group\">
            <label class=\"control-label\">
                {{ 'Attachment'|trans }}
            </label>
            <div class=\"attachment-item attachment-item--note\">
                <div class=\"thumbnail\">
                    {% if attachment.attachmentThumbnailPicture.src  %}
                        <a href=\"{{ attachment.attachmentURL.url }}\" data-gallery=\"note-view-{{ entity.id }}\" class=\"no-hash\" title=\"{{ attachment.attachmentFileName|e('html_attr') }}\" data-sources=\"{{ attachment.attachmentURL.sources|json_encode }}\">
                            {% include '@OroAttachment/Twig/picture.html.twig' with {
                                sources: attachment.attachmentThumbnailPicture.sources,
                                img_attrs: {
                                    src: attachment.attachmentThumbnailPicture.src,
                                    class: \"thumbnail\"
                                }
                            } %}
                        </a>
                    {% else  %}
                        <span class=\"fa {{ attachment.attachmentIcon }} fa-offset-none\" aria-hidden=\"true\"></span>
                    {% endif  %}
                </div>
                <div class=\"dropdown link-to-record\">
                    {% set togglerId = 'dropdown-'|uniqid %}
                    <a id=\"{{ togglerId }}\" class=\"no-hash attachment-item__filename dropdown-toggle dropdown-toggle--no-caret file-menu\" href=\"#\" role=\"button\" data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        <span class=\"fa {{ attachment.attachmentIcon }}\" aria-hidden=\"true\"></span> {{ attachment.attachmentFileName }}
                    </a>
                    <ul class=\"dropdown-menu file-menu\" role=\"menu\" aria-labelledby=\"{{ togglerId }}\">
                        <li>
                            <a class=\"dropdown-item no-hash\" tabindex=\"-1\" href=\"{{ attachment.attachmentURL.url }}\">
                                {{ 'oro.translation.action.download'|trans }} <span>{{ attachment.attachmentSize }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    {% endif %}
</div>
", "@OroNote/Note/widget/info.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NoteBundle/Resources/views/Note/widget/info.html.twig");
    }
}
