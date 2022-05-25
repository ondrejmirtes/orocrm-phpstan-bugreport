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

/* @OroSales/Lead/widget/info.html.twig */
class __TwigTemplate_40063f7a0c3ffe3891268cbda5f7f979 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSales/Lead/widget/info.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSales/Lead/widget/info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSales/Lead/widget/info.html.twig"));

        // line 1
        $macros["ui"] = $this->macros["ui"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroSales/Lead/widget/info.html.twig", 1)->unwrap();
        // line 2
        $macros["email"] = $this->macros["email"] = $this->loadTemplate("@OroEmail/macros.html.twig", "@OroSales/Lead/widget/info.html.twig", 2)->unwrap();
        // line 3
        $macros["entityConfig"] = $this->macros["entityConfig"] = $this->loadTemplate("@OroEntityConfig/macros.html.twig", "@OroSales/Lead/widget/info.html.twig", 3)->unwrap();
        // line 4
        $macros["channel"] = $this->macros["channel"] = $this->loadTemplate("@OroChannel/macros.html.twig", "@OroSales/Lead/widget/info.html.twig", 4)->unwrap();
        // line 5
        $macros["sales"] = $this->macros["sales"] = $this->loadTemplate("@OroSales/macros.html.twig", "@OroSales/Lead/widget/info.html.twig", 5)->unwrap();
        // line 6
        $macros["Tag"] = $this->macros["Tag"] = $this->loadTemplate("@OroTag/macros.html.twig", "@OroSales/Lead/widget/info.html.twig", 6)->unwrap();
        // line 7
        $macros["salesLeadInfo"] = $this->macros["salesLeadInfo"] = $this;
        // line 17
        echo "<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            ";
        // line 20
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.lead.first_name.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "firstName", [], "any", false, false, false, 20)], 20, $context, $this->getSourceContext());
        echo "
            ";
        // line 21
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.lead.last_name.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 21, $this->source); })()), "lastName", [], "any", false, false, false, 21)], 21, $context, $this->getSourceContext());
        echo "

            ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "dataChannel", [], "array", true, true, false, 23)) {
            // line 24
            echo "                ";
            echo twig_call_macro($macros["channel"], "macro_renderChannelProperty", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 24, $this->source); })()), "oro.sales.lead.data_channel.label"], 24, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 26
        echo "
            ";
        // line 27
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.lead.contact.label"), twig_call_macro($macros["ui"], "macro_entityViewLink", [twig_get_attribute($this->env, $this->source,         // line 29
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 29, $this->source); })()), "contact", [], "any", false, false, false, 29), ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 29, $this->source); })()), "contact", [], "any", false, false, false, 29)) ? ($this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 29, $this->source); })()), "contact", [], "any", false, false, false, 29))) : ("")), "oro_contact_view"], 29, $context, $this->getSourceContext())], 27, $context, $this->getSourceContext());
        // line 30
        echo "
            ";
        // line 31
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.lead.job_title.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 31, $this->source); })()), "jobTitle", [], "any", false, false, false, 31)], 31, $context, $this->getSourceContext());
        // line 33
        ob_start();
        // line 34
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 34, $this->source); })()), "opportunities", [], "any", false, false, false, 34), "count", [], "any", false, false, false, 34)) {
            // line 35
            $context["opportunityViewGranted"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_sales_opportunity_view");
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 36, $this->source); })()), "opportunities", [], "any", false, false, false, 36));
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
            foreach ($context['_seq'] as $context["_key"] => $context["opportunity"]) {
                // line 37
                if ((isset($context["opportunityViewGranted"]) || array_key_exists("opportunityViewGranted", $context) ? $context["opportunityViewGranted"] : (function () { throw new RuntimeError('Variable "opportunityViewGranted" does not exist.', 37, $this->source); })())) {
                    // line 38
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_sales_opportunity_view", ["id" => twig_get_attribute($this->env, $this->source, $context["opportunity"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                    echo "\">";
                    echo twig_call_macro($macros["ui"], "macro_renderEntityViewLabel", [$context["opportunity"], "name", "oro.sales.oportunity.entity_label"], 38, $context, $this->getSourceContext());
                    echo "</a>";
                } else {
                    // line 40
                    echo twig_call_macro($macros["ui"], "macro_renderEntityViewLabel", [$context["opportunity"], "name"], 40, $context, $this->getSourceContext());
                }
                // line 42
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 42)) {
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opportunity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $context["opportunitiesData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        echo twig_call_macro($macros["sales"], "macro_render_customer_info", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 47, $this->source); })())], 47, $context, $this->getSourceContext());
        echo "
            ";
        // line 48
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.lead.company_name.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 48, $this->source); })()), "companyName", [], "any", false, false, false, 48)], 48, $context, $this->getSourceContext());
        echo "
            ";
        // line 49
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.lead.industry.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 49, $this->source); })()), "industry", [], "any", false, false, false, 49)], 49, $context, $this->getSourceContext());
        echo "
            ";
        // line 50
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.lead.number_of_employees.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 50, $this->source); })()), "numberOfEmployees", [], "any", false, false, false, 50)], 50, $context, $this->getSourceContext());
        echo "
            ";
        // line 51
        echo twig_call_macro($macros["ui"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.lead.source.label"), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 51, $this->source); })()), "source", [], "any", false, false, false, 51)], 51, $context, $this->getSourceContext());
        echo "

            ";
        // line 53
        echo twig_call_macro($macros["entityConfig"], "macro_renderDynamicFields", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 53, $this->source); })())], 53, $context, $this->getSourceContext());
        echo "

            ";
        // line 55
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.tag.entity_plural_label"), twig_call_macro($macros["Tag"], "macro_renderView", [(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 55, $this->source); })())], 55, $context, $this->getSourceContext())], 55, $context, $this->getSourceContext());
        echo "
        </div>";
        // line 58
        ob_start();
        // line 59
        if ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 59, $this->source); })()), "twitter", [], "any", false, false, false, 59) || twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 59, $this->source); })()), "linkedIn", [], "any", false, false, false, 59))) {
            // line 60
            echo "<ul class=\"social-list extra-list\">
                    ";
            // line 61
            if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 61, $this->source); })()), "twitter", [], "any", false, false, false, 61)) {
                // line 62
                echo "                        <li>
                            <a class=\"no-hash\" href=\"";
                // line 63
                echo twig_call_macro($macros["salesLeadInfo"], "macro_getSocialUrl", ["twitter", twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 63, $this->source); })()), "twitter", [], "any", false, false, false, 63)], 63, $context, $this->getSourceContext());
                echo "\" target=\"_blank\" title=\"Twitter\">
                                <i class=\"fa-twitter\"></i>
                            </a>
                        </li>
                    ";
            }
            // line 68
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 68, $this->source); })()), "linkedIn", [], "any", false, false, false, 68)) {
                // line 69
                echo "                        <li>
                            <a class=\"no-hash\" href=\"";
                // line 70
                echo twig_call_macro($macros["salesLeadInfo"], "macro_getSocialUrl", ["linked_in", twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 70, $this->source); })()), "linkedIn", [], "any", false, false, false, 70)], 70, $context, $this->getSourceContext());
                echo "\" target=\"_blank\" title=\"LinkedIn\">
                                <i class=\"fa-linkedin\"></i>
                            </a>
                        </li>
                    ";
            }
            // line 75
            echo "                </ul>";
        }
        $context["socialData"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        echo "<div class=\"responsive-block\">
            ";
        // line 80
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.lead.emails.label"), twig_call_macro($macros["sales"], "macro_renderCollectionWithPrimaryElement", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 80, $this->source); })()), "emails", [], "any", false, false, false, 80), true, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 80, $this->source); })())], 80, $context, $this->getSourceContext())], 80, $context, $this->getSourceContext());
        echo "
            ";
        // line 81
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.lead.phones.label"), twig_call_macro($macros["sales"], "macro_renderCollectionWithPrimaryElement", [twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 81, $this->source); })()), "phones", [], "any", false, false, false, 81), false, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 81, $this->source); })())], 81, $context, $this->getSourceContext())], 81, $context, $this->getSourceContext());
        // line 82
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 82, $this->source); })()), "website", [], "any", false, false, false, 82)) {
            // line 83
            $context["website"] = $this->extensions['Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension']->stripDangerousProtocols(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 83, $this->source); })()), "website", [], "any", false, false, false, 83));
        }
        // line 85
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.lead.website.label"), ((array_key_exists("website", $context)) ? (twig_call_macro($macros["ui"], "macro_renderUrl", [(isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 85, $this->source); })()), (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 85, $this->source); })()), "no-hash"], 85, $context, $this->getSourceContext())) : (null))], 85, $context, $this->getSourceContext());
        echo "
            ";
        // line 86
        echo twig_call_macro($macros["ui"], "macro_renderCollapsibleHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.lead.notes.label"), $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlStripTags(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 86, $this->source); })()), "notes", [], "any", false, false, false, 86)), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 86, $this->source); })()), "notes"], 86, $context, $this->getSourceContext());
        echo "
            ";
        // line 87
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.contact.social.label"), (isset($context["socialData"]) || array_key_exists("socialData", $context) ? $context["socialData"] : (function () { throw new RuntimeError('Variable "socialData" does not exist.', 87, $this->source); })())], 87, $context, $this->getSourceContext());
        echo "
            ";
        // line 88
        echo twig_call_macro($macros["ui"], "macro_renderHtmlProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.sales.opportunity.entity_label"), (isset($context["opportunitiesData"]) || array_key_exists("opportunitiesData", $context) ? $context["opportunitiesData"] : (function () { throw new RuntimeError('Variable "opportunitiesData" does not exist.', 88, $this->source); })())], 88, $context, $this->getSourceContext());
        echo "
        </div>
    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
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

            // line 10
            if (((twig_slice($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 10, $this->source); })()), 0, 5) == "http:") || (twig_slice($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 10, $this->source); })()), 0, 6) == "https:"))) {
                // line 11
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 11, $this->source); })()), "html", null, true);
            } else {
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\ContactBundle\Twig\ContactExtension']->getSocialUrl((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 13, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 13, $this->source); })())), "html", null, true);
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
        return "@OroSales/Lead/widget/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 13,  280 => 11,  278 => 10,  258 => 9,  240 => 88,  236 => 87,  232 => 86,  228 => 85,  225 => 83,  223 => 82,  221 => 81,  217 => 80,  214 => 79,  210 => 75,  202 => 70,  199 => 69,  196 => 68,  188 => 63,  185 => 62,  183 => 61,  180 => 60,  178 => 59,  176 => 58,  172 => 55,  167 => 53,  162 => 51,  158 => 50,  154 => 49,  150 => 48,  146 => 47,  128 => 42,  125 => 40,  118 => 38,  116 => 37,  99 => 36,  97 => 35,  95 => 34,  93 => 33,  91 => 31,  88 => 30,  86 => 29,  85 => 27,  82 => 26,  76 => 24,  74 => 23,  69 => 21,  65 => 20,  60 => 17,  58 => 7,  56 => 6,  54 => 5,  52 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as ui %}
{% import '@OroEmail/macros.html.twig' as email %}
{% import '@OroEntityConfig/macros.html.twig' as entityConfig %}
{% import '@OroChannel/macros.html.twig' as channel %}
{% import '@OroSales/macros.html.twig' as sales %}
{% import '@OroTag/macros.html.twig' as Tag %}
{% import _self as salesLeadInfo %}

{%- macro getSocialUrl(type, value) -%}
    {%- if value|slice(0, 5) == 'http:' or value|slice(0, 6) == 'https:' -%}
        {{- value -}}
    {%- else -%}
        {{- oro_social_url(type, value) -}}
    {%- endif -%}
{%- endmacro -%}

<div class=\"widget-content\">
    <div class=\"row-fluid form-horizontal\">
        <div class=\"responsive-block\">
            {{ ui.renderProperty('oro.sales.lead.first_name.label'|trans, entity.firstName) }}
            {{ ui.renderProperty('oro.sales.lead.last_name.label'|trans, entity.lastName) }}

            {% if entity['dataChannel'] is defined %}
                {{ channel.renderChannelProperty(entity, 'oro.sales.lead.data_channel.label') }}
            {% endif %}

            {{ ui.renderHtmlProperty(
                'oro.sales.lead.contact.label'|trans,
                ui.entityViewLink(entity.contact, entity.contact ? entity.contact|oro_format_name : '', 'oro_contact_view')
            ) }}
            {{ ui.renderProperty('oro.sales.lead.job_title.label'|trans, entity.jobTitle) }}

            {%- set opportunitiesData -%}
                {%- if entity.opportunities.count -%}
                    {% set opportunityViewGranted = is_granted('oro_sales_opportunity_view') %}
                    {%- for opportunity in entity.opportunities -%}
                        {%- if opportunityViewGranted -%}
                            <a href=\"{{ path('oro_sales_opportunity_view', {'id': opportunity.id}) }}\">{{ ui.renderEntityViewLabel(opportunity, 'name', 'oro.sales.oportunity.entity_label') }}</a>
                        {%- else -%}
                            {{ ui.renderEntityViewLabel(opportunity, 'name') }}
                        {%- endif -%}
                        {% if not loop.last %}, {% endif %}
                    {%- endfor -%}
                {%- endif -%}
            {%- endset -%}

            {{ sales.render_customer_info(entity) }}
            {{ ui.renderProperty('oro.sales.lead.company_name.label'|trans, entity.companyName) }}
            {{ ui.renderProperty('oro.sales.lead.industry.label'|trans, entity.industry) }}
            {{ ui.renderProperty('oro.sales.lead.number_of_employees.label'|trans, entity.numberOfEmployees) }}
            {{ ui.renderProperty('oro.sales.lead.source.label'|trans, entity.source) }}

            {{ entityConfig.renderDynamicFields(entity) }}

            {{ ui.renderHtmlProperty('oro.tag.entity_plural_label'|trans, Tag.renderView(entity)) }}
        </div>

        {%- set socialData -%}
            {%- if entity.twitter or entity.linkedIn -%}
                <ul class=\"social-list extra-list\">
                    {% if entity.twitter %}
                        <li>
                            <a class=\"no-hash\" href=\"{{- salesLeadInfo.getSocialUrl('twitter', entity.twitter) -}}\" target=\"_blank\" title=\"Twitter\">
                                <i class=\"fa-twitter\"></i>
                            </a>
                        </li>
                    {% endif %}
                    {% if entity.linkedIn %}
                        <li>
                            <a class=\"no-hash\" href=\"{{- salesLeadInfo.getSocialUrl('linked_in', entity.linkedIn) -}}\" target=\"_blank\" title=\"LinkedIn\">
                                <i class=\"fa-linkedin\"></i>
                            </a>
                        </li>
                    {% endif %}
                </ul>
            {%- endif -%}
        {%- endset -%}

        <div class=\"responsive-block\">
            {{ ui.renderHtmlProperty('oro.sales.lead.emails.label'|trans, sales.renderCollectionWithPrimaryElement(entity.emails, true, entity)) }}
            {{ ui.renderHtmlProperty('oro.sales.lead.phones.label'|trans, sales.renderCollectionWithPrimaryElement(entity.phones, false, entity)) }}
            {%- if entity.website -%}
                {%- set website = entity.website|strip_dangerous_protocols -%}
            {%- endif -%}
            {{ ui.renderHtmlProperty('oro.sales.lead.website.label'|trans, website is defined ? ui.renderUrl(website, website, 'no-hash') : null) }}
            {{ ui.renderCollapsibleHtmlProperty('oro.sales.lead.notes.label'|trans, entity.notes|oro_html_strip_tags, entity, 'notes') }}
            {{ ui.renderHtmlProperty('oro.contact.social.label'|trans, socialData) }}
            {{ ui.renderHtmlProperty('oro.sales.opportunity.entity_label'|trans, opportunitiesData) }}
        </div>
    </div>
</div>
", "@OroSales/Lead/widget/info.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/SalesBundle/Resources/views/Lead/widget/info.html.twig");
    }
}
