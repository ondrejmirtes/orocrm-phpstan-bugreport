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

/* @OroContact/Contact/widget/info.html.twig */
class __TwigTemplate_c8f5496a624a6a12c14fa99a741dd65e extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroContact/Contact/widget/info.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroContact/Contact/widget/info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroContact/Contact/widget/info.html.twig"));

        // line 1
        $macros["ui"] = $this->macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroContact/Contact/widget/info.html.twig", 1)->unwrap();
        // line 2
        $macros["entityConfig"] = $this->macros["entityConfig"] = $this->loadTemplate("@OroEntityConfig/macros.html.twig", "@OroContact/Contact/widget/info.html.twig", 2)->unwrap();
        // line 3
        $macros["U"] = $this->macros["U"] = $this->loadTemplate("@OroUser/macros.html.twig", "@OroContact/Contact/widget/info.html.twig", 3)->unwrap();
        // line 4
        $macros["contactInfo"] = $this->macros["contactInfo"] = $this;
        // line 5
        echo "
";
        // line 45
        echo "<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal contact-info\">
        <div class=\"responsive-block\">";
        // line 48
        ob_start();
        // line 49
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 49, $this->source); })()), "skype", [], "any", false, false, false, 49)) {
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 50, $this->source); })()), "skype", [], "any", false, false, false, 50), "html", null, true);
            echo " ";
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->getSkypeButton($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 50, $this->source); })()), "skype", [], "any", false, false, false, 50));
        }
        $context["skypeData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 54
        ob_start();
        // line 55
        if ((((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 55, $this->source); })()), "twitter", [], "any", false, false, false, 55) || twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 55, $this->source); })()), "facebook", [], "any", false, false, false, 55)) || twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 55, $this->source); })()), "googlePlus", [], "any", false, false, false, 55)) || twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 55, $this->source); })()), "linkedIn", [], "any", false, false, false, 55))) {
            // line 56
            echo "<ul class=\"social-list extra-list\">
                        ";
            // line 57
            if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 57, $this->source); })()), "twitter", [], "any", false, false, false, 57)) {
                // line 58
                echo "                            <li>
                                <a class=\"no-hash\" href=\"";
                // line 59
                echo twig_call_macro($macros["contactInfo"], "macro_getSocialUrl", ["twitter", twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 59, $this->source); })()), "twitter", [], "any", false, false, false, 59)], 59, $context, $this->getSourceContext());
                echo "\" target=\"_blank\" title=\"Twitter\">
                                    <i class=\"fa-twitter\"></i>
                                </a>
                            </li>
                        ";
            }
            // line 64
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 64, $this->source); })()), "facebook", [], "any", false, false, false, 64)) {
                // line 65
                echo "                            <li>
                                <a class=\"no-hash\" href=\"";
                // line 66
                echo twig_call_macro($macros["contactInfo"], "macro_getSocialUrl", ["facebook", twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 66, $this->source); })()), "facebook", [], "any", false, false, false, 66)], 66, $context, $this->getSourceContext());
                echo "\" target=\"_blank\" title=\"Facebook\">
                                    <i class=\"fa-facebook\"></i>
                                </a>
                            </li>
                        ";
            }
            // line 71
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 71, $this->source); })()), "googlePlus", [], "any", false, false, false, 71)) {
                // line 72
                echo "                            <li>
                                <a class=\"no-hash\" href=\"";
                // line 73
                echo twig_call_macro($macros["contactInfo"], "macro_getSocialUrl", ["google_plus", twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 73, $this->source); })()), "googlePlus", [], "any", false, false, false, 73)], 73, $context, $this->getSourceContext());
                echo "\" target=\"_blank\" title=\"Google+\">
                                    <i class=\"fa-google-plus\"></i>
                                </a>
                            </li>
                        ";
            }
            // line 78
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 78, $this->source); })()), "linkedIn", [], "any", false, false, false, 78)) {
                // line 79
                echo "                            <li>
                                <a class=\"no-hash\" href=\"";
                // line 80
                echo twig_call_macro($macros["contactInfo"], "macro_getSocialUrl", ["linked_in", twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 80, $this->source); })()), "linkedIn", [], "any", false, false, false, 80)], 80, $context, $this->getSourceContext());
                echo "\" target=\"_blank\" title=\"LinkedIn\">
                                    <i class=\"fa-linkedin\"></i>
                                </a>
                            </li>
                        ";
            }
            // line 85
            echo "                    </ul>";
        }
        $context["socialData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 89
        echo twig_call_macro($macros["ui"], "macro_renderSwitchableHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contact.description.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 89, $this->source); })()), "description", [], "any", false, false, false, 89)], 89, $context, $this->getSourceContext());
        echo "
            ";
        // line 90
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contact.phones.label"), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 90, $this->source); })()), "phones", [], "any", false, false, false, 90), "count", [], "any", false, false, false, 90)) ? (twig_call_macro($macros["contactInfo"], "macro_renderCollectionWithPrimaryElement", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 90, $this->source); })()), "phones", [], "any", false, false, false, 90), false, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 90, $this->source); })())], 90, $context, $this->getSourceContext())) : (null))], 90, $context, $this->getSourceContext());
        echo "
            ";
        // line 91
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contact.emails.label"), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 91, $this->source); })()), "emails", [], "any", false, false, false, 91), "count", [], "any", false, false, false, 91)) ? (twig_call_macro($macros["contactInfo"], "macro_renderCollectionWithPrimaryElement", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 91, $this->source); })()), "emails", [], "any", false, false, false, 91), true, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 91, $this->source); })())], 91, $context, $this->getSourceContext())) : (null))], 91, $context, $this->getSourceContext());
        echo "
            ";
        // line 92
        $context["faxPhone"] = ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 92, $this->source); })()), "fax", [], "any", false, false, false, 92)) ? (twig_call_macro($macros["ui"], "macro_renderPhone", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 92, $this->source); })()), "fax", [], "any", false, false, false, 92)], 92, $context, $this->getSourceContext())) : (null));
        // line 93
        echo "            ";
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contact.fax.label"), (isset($context["faxPhone"]) || array_key_exists("faxPhone", $context) ? $context["faxPhone"] : (function () { throw new RuntimeError('Variable "faxPhone" does not exist.', 93, $this->source); })()), null, null, ["dir" => (((isset($context["faxPhone"]) || array_key_exists("faxPhone", $context) ? $context["faxPhone"] : (function () { throw new RuntimeError('Variable "faxPhone" does not exist.', 93, $this->source); })())) ? ("ltr") : (null))]], 93, $context, $this->getSourceContext());
        echo "
            ";
        // line 94
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contact.skype.label"), (isset($context["skypeData"]) || array_key_exists("skypeData", $context) ? $context["skypeData"] : (function () { throw new RuntimeError('Variable "skypeData" does not exist.', 94, $this->source); })())], 94, $context, $this->getSourceContext());
        echo "
            ";
        // line 95
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contact.method.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 95, $this->source); })()), "method", [], "any", false, false, false, 95)], 95, $context, $this->getSourceContext());
        echo "
            ";
        // line 96
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contact.social.label"), (isset($context["socialData"]) || array_key_exists("socialData", $context) ? $context["socialData"] : (function () { throw new RuntimeError('Variable "socialData" does not exist.', 96, $this->source); })())], 96, $context, $this->getSourceContext());
        echo "

            ";
        // line 98
        echo twig_call_macro($macros["entityConfig"], "macro_renderDynamicFields", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 98, $this->source); })())], 98, $context, $this->getSourceContext());
        echo "
        </div>

        <div class=\"responsive-block\">";
        // line 102
        ob_start();
        // line 103
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 103, $this->source); })()), "accounts", [], "any", false, false, false, 103), "count", [], "any", false, false, false, 103)) {
            // line 104
            $context["accountViewGranted"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_account_view");
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 105, $this->source); })()), "accounts", [], "any", false, false, false, 105));
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
            foreach ($context['_seq'] as $context["_key"] => $context["account"]) {
                // line 106
                if ((isset($context["accountViewGranted"]) || array_key_exists("accountViewGranted", $context) ? $context["accountViewGranted"] : (function () { throw new RuntimeError('Variable "accountViewGranted" does not exist.', 106, $this->source); })())) {
                    // line 107
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_account_view", ["id" => twig_get_attribute($this->env, $this->source, $context["account"], "id", [], "any", false, false, false, 107)]), "html", null, true);
                    echo "\">";
                    echo twig_call_macro($macros["ui"], "macro_renderEntityViewLabel", [$context["account"], "name", "oro.account.entity_label"], 107, $context, $this->getSourceContext());
                    echo "</a>";
                } else {
                    // line 109
                    echo twig_call_macro($macros["ui"], "macro_renderEntityViewLabel", [$context["account"], "name"], 109, $context, $this->getSourceContext());
                }
                // line 111
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 111)) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['account'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $context["accountsData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 116
        ob_start();
        // line 117
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 117, $this->source); })()), "assignedTo", [], "any", false, false, false, 117)) {
            // line 118
            echo twig_call_macro($macros["U"], "macro_render_user_name", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 118, $this->source); })()), "assignedTo", [], "any", false, false, false, 118)], 118, $context, $this->getSourceContext());
            echo "
                    ";
            // line 119
            echo twig_call_macro($macros["U"], "macro_user_business_unit_name", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 119, $this->source); })()), "assignedTo", [], "any", false, false, false, 119)], 119, $context, $this->getSourceContext());
        }
        $context["assignedToData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 123
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contact.job_title.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 123, $this->source); })()), "jobTitle", [], "any", false, false, false, 123)], 123, $context, $this->getSourceContext());
        echo "
            ";
        // line 124
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contact.accounts.label"), (isset($context["accountsData"]) || array_key_exists("accountsData", $context) ? $context["accountsData"] : (function () { throw new RuntimeError('Variable "accountsData" does not exist.', 124, $this->source); })())], 124, $context, $this->getSourceContext());
        echo "
            ";
        // line 125
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contact.birthday.label"), twig_call_macro($macros["ui"], "macro_render_birthday", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 125, $this->source); })()), "birthday", [], "any", false, false, false, 125)], 125, $context, $this->getSourceContext())], 125, $context, $this->getSourceContext());
        echo "
            ";
        // line 126
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contact.gender.label"), $this->extensions['Oro\Bundle\UserBundle\Twig\OroUserExtension']->getGenderLabel(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 126, $this->source); })()), "gender", [], "any", false, false, false, 126))], 126, $context, $this->getSourceContext());
        echo "
            ";
        // line 127
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contact.source.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 127, $this->source); })()), "source", [], "any", false, false, false, 127)], 127, $context, $this->getSourceContext());
        echo "
            ";
        // line 128
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contact.assigned_to.label"), (isset($context["assignedToData"]) || array_key_exists("assignedToData", $context) ? $context["assignedToData"] : (function () { throw new RuntimeError('Variable "assignedToData" does not exist.', 128, $this->source); })())], 128, $context, $this->getSourceContext());
        echo "
            ";
        // line 129
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contact.reports_to.label"), twig_call_macro($macros["ui"], "macro_entityViewLink", [twig_get_attribute($this->env, $this->source,         // line 131
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 131, $this->source); })()), "reportsTo", [], "any", false, false, false, 131), $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 131, $this->source); })()), "reportsTo", [], "any", false, false, false, 131)), "oro_contact_view"], 131, $context, $this->getSourceContext())], 129, $context, $this->getSourceContext());
        // line 132
        echo "
            ";
        // line 133
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contact.groups.label"), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 133, $this->source); })()), "groups", [], "any", false, false, false, 133), "count", [], "any", false, false, false, 133)) ? (twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 133, $this->source); })()), "groupLabels", [], "any", false, false, false, 133), ", ")) : (null))], 133, $context, $this->getSourceContext());
        echo "
        </div>
    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function macro_renderCollectionWithPrimaryElement($__collection__ = null, $__isEmail__ = null, $__entity__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collection" => $__collection__,
            "isEmail" => $__isEmail__,
            "entity" => $__entity__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderCollectionWithPrimaryElement"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderCollectionWithPrimaryElement"));

            // line 7
            echo "    ";
            $macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroContact/Contact/widget/info.html.twig", 7)->unwrap();
            // line 8
            echo "    ";
            $macros["email"] = $this->loadTemplate("@OroEmail/macros.html.twig", "@OroContact/Contact/widget/info.html.twig", 8)->unwrap();
            // line 9
            echo "
    ";
            // line 10
            $context["primaryElement"] = null;
            // line 11
            echo "    ";
            $context["elements"] = [];
            // line 12
            echo "
    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 14
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["element"], "primary", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "            ";
                    $context["primaryElement"] = $context["element"];
                    // line 16
                    echo "        ";
                } else {
                    // line 17
                    echo "            ";
                    $context["elements"] = twig_array_merge((isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new RuntimeError('Variable "elements" does not exist.', 17, $this->source); })()), [0 => $context["element"]]);
                    // line 18
                    echo "        ";
                }
                // line 19
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    ";
            if ((isset($context["primaryElement"]) || array_key_exists("primaryElement", $context) ? $context["primaryElement"] : (function () { throw new RuntimeError('Variable "primaryElement" does not exist.', 20, $this->source); })())) {
                // line 21
                echo "        ";
                $context["elements"] = twig_array_merge([0 => (isset($context["primaryElement"]) || array_key_exists("primaryElement", $context) ? $context["primaryElement"] : (function () { throw new RuntimeError('Variable "primaryElement" does not exist.', 21, $this->source); })())], (isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new RuntimeError('Variable "elements" does not exist.', 21, $this->source); })()));
                // line 22
                echo "    ";
            }
            // line 23
            echo "
    <ul class=\"extra-list\">";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new RuntimeError('Variable "elements" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 26
                echo "            <li class=\"contact-collection-element";
                if (twig_get_attribute($this->env, $this->source, $context["element"], "primary", [], "any", false, false, false, 26)) {
                    echo " primary";
                }
                echo "\">
                ";
                // line 27
                if ((isset($context["isEmail"]) || array_key_exists("isEmail", $context) ? $context["isEmail"] : (function () { throw new RuntimeError('Variable "isEmail" does not exist.', 27, $this->source); })())) {
                    // line 28
                    echo "                    ";
                    echo twig_call_macro($macros["email"], "macro_renderEmailWithActions", [$context["element"], (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 28, $this->source); })())], 28, $context, $this->getSourceContext());
                    echo "
                ";
                } else {
                    // line 30
                    echo "                    ";
                    echo twig_call_macro($macros["ui"], "macro_renderPhoneWithActions", [$context["element"], (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })())], 30, $context, $this->getSourceContext());
                    echo "
                ";
                }
                // line 32
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "</ul>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 37
    public function macro_getSocialUrl($__type__ = null, $__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "type" => $__type__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "getSocialUrl"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "getSocialUrl"));

            // line 38
            if (((twig_slice($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 38, $this->source); })()), 0, 5) == "http:") || (twig_slice($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 38, $this->source); })()), 0, 6) == "https:"))) {
                // line 39
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 39, $this->source); })()), "html", null, true);
            } else {
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\ContactBundle\Twig\ContactExtension']->getSocialUrl((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 41, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 41, $this->source); })())), "html", null, true);
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroContact/Contact/widget/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 41,  433 => 39,  431 => 38,  411 => 37,  395 => 34,  388 => 32,  382 => 30,  376 => 28,  374 => 27,  367 => 26,  363 => 25,  360 => 23,  357 => 22,  354 => 21,  351 => 20,  345 => 19,  342 => 18,  339 => 17,  336 => 16,  333 => 15,  330 => 14,  326 => 13,  323 => 12,  320 => 11,  318 => 10,  315 => 9,  312 => 8,  309 => 7,  288 => 6,  270 => 133,  267 => 132,  265 => 131,  264 => 129,  260 => 128,  256 => 127,  252 => 126,  248 => 125,  244 => 124,  240 => 123,  236 => 119,  232 => 118,  230 => 117,  228 => 116,  210 => 111,  207 => 109,  200 => 107,  198 => 106,  181 => 105,  179 => 104,  177 => 103,  175 => 102,  169 => 98,  164 => 96,  160 => 95,  156 => 94,  151 => 93,  149 => 92,  145 => 91,  141 => 90,  137 => 89,  133 => 85,  125 => 80,  122 => 79,  119 => 78,  111 => 73,  108 => 72,  105 => 71,  97 => 66,  94 => 65,  91 => 64,  83 => 59,  80 => 58,  78 => 57,  75 => 56,  73 => 55,  71 => 54,  65 => 50,  63 => 49,  61 => 48,  57 => 45,  54 => 5,  52 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as ui %}
{% import '@OroEntityConfig/macros.html.twig' as entityConfig %}
{% import '@OroUser/macros.html.twig' as U %}
{% import _self as contactInfo %}

{% macro renderCollectionWithPrimaryElement(collection, isEmail, entity) %}
    {% import '@OroUI/macros.html.twig' as ui %}
    {% import '@OroEmail/macros.html.twig' as email %}

    {% set primaryElement = null %}
    {% set elements = [] %}

    {% for element in collection %}
        {% if element.primary %}
            {% set primaryElement = element %}
        {% else %}
            {% set elements = elements|merge([element]) %}
        {% endif %}
    {% endfor %}
    {% if primaryElement %}
        {% set elements = [primaryElement]|merge(elements) %}
    {% endif %}

    <ul class=\"extra-list\">
        {%- for element in elements %}
            <li class=\"contact-collection-element{% if element.primary %} primary{% endif %}\">
                {% if isEmail %}
                    {{ email.renderEmailWithActions(element, entity) }}
                {% else %}
                    {{ ui.renderPhoneWithActions(element, entity) }}
                {% endif %}
            </li>
        {% endfor -%}
    </ul>
{% endmacro %}

{%- macro getSocialUrl(type, value) -%}
    {%- if value|slice(0, 5) == 'http:' or value|slice(0, 6) == 'https:' -%}
        {{- value -}}
    {%- else -%}
        {{- oro_social_url(type, value) -}}
    {%- endif -%}
{%- endmacro -%}

<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal contact-info\">
        <div class=\"responsive-block\">
            {%- set skypeData -%}
                {%- if entity.skype -%}
                    {{ entity.skype }} {{ skype_button(entity.skype) }}
                {%- endif -%}
            {%- endset -%}

            {%- set socialData -%}
                {%- if entity.twitter or entity.facebook or entity.googlePlus or entity.linkedIn -%}
                    <ul class=\"social-list extra-list\">
                        {% if entity.twitter %}
                            <li>
                                <a class=\"no-hash\" href=\"{{- contactInfo.getSocialUrl('twitter', entity.twitter) -}}\" target=\"_blank\" title=\"Twitter\">
                                    <i class=\"fa-twitter\"></i>
                                </a>
                            </li>
                        {% endif %}
                        {% if entity.facebook %}
                            <li>
                                <a class=\"no-hash\" href=\"{{- contactInfo.getSocialUrl('facebook', entity.facebook) -}}\" target=\"_blank\" title=\"Facebook\">
                                    <i class=\"fa-facebook\"></i>
                                </a>
                            </li>
                        {% endif %}
                        {% if entity.googlePlus %}
                            <li>
                                <a class=\"no-hash\" href=\"{{- contactInfo.getSocialUrl('google_plus', entity.googlePlus) -}}\" target=\"_blank\" title=\"Google+\">
                                    <i class=\"fa-google-plus\"></i>
                                </a>
                            </li>
                        {% endif %}
                        {% if entity.linkedIn %}
                            <li>
                                <a class=\"no-hash\" href=\"{{- contactInfo.getSocialUrl('linked_in', entity.linkedIn) -}}\" target=\"_blank\" title=\"LinkedIn\">
                                    <i class=\"fa-linkedin\"></i>
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                {%- endif -%}
            {%- endset -%}

            {{ ui.renderSwitchableHtmlProperty('oro.contact.description.label'|trans, entity.description) }}
            {{ ui.renderHtmlProperty('oro.contact.phones.label'|trans, entity.phones.count ? contactInfo.renderCollectionWithPrimaryElement(entity.phones, false, entity) : null) }}
            {{ ui.renderHtmlProperty('oro.contact.emails.label'|trans, entity.emails.count ? contactInfo.renderCollectionWithPrimaryElement(entity.emails, true, entity) : null) }}
            {% set faxPhone = entity.fax ? ui.renderPhone(entity.fax) : null %}
            {{ ui.renderHtmlProperty('oro.contact.fax.label'|trans, faxPhone, null, null, {'dir': faxPhone ? 'ltr' : null}) }}
            {{ ui.renderHtmlProperty('oro.contact.skype.label'|trans, skypeData) }}
            {{ ui.renderProperty('oro.contact.method.label'|trans, entity.method) }}
            {{ ui.renderHtmlProperty('oro.contact.social.label'|trans, socialData) }}

            {{ entityConfig.renderDynamicFields(entity) }}
        </div>

        <div class=\"responsive-block\">
            {%- set accountsData -%}
                {%- if entity.accounts.count -%}
                    {% set accountViewGranted = is_granted('oro_account_view') %}
                    {%- for account in entity.accounts -%}
                        {%- if accountViewGranted -%}
                            <a href=\"{{ path('oro_account_view', {'id': account.id}) }}\">{{ ui.renderEntityViewLabel(account, 'name', 'oro.account.entity_label') }}</a>
                        {%- else -%}
                            {{ ui.renderEntityViewLabel(account, 'name') }}
                        {%- endif -%}
                        {% if not loop.last %}, {% endif %}
                    {%- endfor -%}
                {%- endif -%}
            {%- endset -%}

            {%- set assignedToData -%}
                {%- if entity.assignedTo -%}
                    {{ U.render_user_name(entity.assignedTo) }}
                    {{ U.user_business_unit_name(entity.assignedTo) }}
                {%- endif -%}
            {%- endset -%}

            {{ ui.renderProperty('oro.contact.job_title.label'|trans, entity.jobTitle) }}
            {{ ui.renderHtmlProperty('oro.contact.accounts.label'|trans, accountsData) }}
            {{ ui.renderProperty('oro.contact.birthday.label'|trans, ui.render_birthday(entity.birthday)) }}
            {{ ui.renderProperty('oro.contact.gender.label'|trans, oro_gender(entity.gender)) }}
            {{ ui.renderProperty('oro.contact.source.label'|trans, entity.source) }}
            {{ ui.renderHtmlProperty('oro.contact.assigned_to.label'|trans, assignedToData) }}
            {{ ui.renderHtmlProperty(
                'oro.contact.reports_to.label'|trans,
                ui.entityViewLink(entity.reportsTo, entity.reportsTo|oro_format_name, 'oro_contact_view')
            ) }}
            {{ ui.renderProperty('oro.contact.groups.label'|trans, entity.groups.count ? entity.groupLabels|join(', ') : null) }}
        </div>
    </div>
</div>
", "@OroContact/Contact/widget/info.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/ContactBundle/Resources/views/Contact/widget/info.html.twig");
    }
}
