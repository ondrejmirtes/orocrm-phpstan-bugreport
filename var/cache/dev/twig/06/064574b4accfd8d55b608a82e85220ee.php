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

/* @OroAnalytics/RFMCategory/channelView.html.twig */
class __TwigTemplate_612110b99e2d4886c1d37ba2e89ec8fa extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroAnalytics/RFMCategory/channelView.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAnalytics/RFMCategory/channelView.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAnalytics/RFMCategory/channelView.html.twig"));

        // line 1
        echo "<div class=\"responsive-cell clearfix\">
    <div class=\"span6\">
        <h4>";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.form.rfm_setting.title"), "html", null, true);
        echo "</h4>
        <div class=\"rfm-settings rfm-enabled\">
            <div class=\"rfm-settings-data\">
                ";
        // line 6
        if (((isset($context["rfmCategoriesCount"]) || array_key_exists("rfmCategoriesCount", $context) ? $context["rfmCategoriesCount"] : (function () { throw new RuntimeError('Variable "rfmCategoriesCount" does not exist.', 6, $this->source); })()) > 1)) {
            // line 7
            echo "                <table class=\"grid table-hover table table-bordered table-condensed\">
                    <thead>
                    <tr>
                        <th><label>";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.form.score.title"), "html", null, true);
            echo "</label></th>
                        <th>
                            <label>";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.form.recency.label"), "html", null, true);
            echo "</label>
                            ";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.form.hint.recency"), "html", null, true);
            echo "
                        </th>
                        <th>
                            <label>";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.form.frequency.label"), "html", null, true);
            echo "</label>
                            ";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.form.hint.frequency"), "html", null, true);
            echo "
                        </th>
                        <th>
                            <label>";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.form.monetary.label"), "html", null, true);
            echo "</label>
                            ";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.form.hint.monetary"), "html", null, true);
            echo "
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class=\"rfm-cell-index\">1
                                <br><small>";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.best"), "html", null, true);
            echo "</small>
                            </td>
                            <td class=\"rfm-cell-recency\">
                                <span>";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.less"), "html", null, true);
            echo " </span>
                                <strong>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rfmCategories"]) || array_key_exists("rfmCategories", $context) ? $context["rfmCategories"] : (function () { throw new RuntimeError('Variable "rfmCategories" does not exist.', 32, $this->source); })()), "recency", [], "any", false, false, false, 32), 0, [], "array", false, false, false, 32), "maxValue", [], "any", false, false, false, 32), "html", null, true);
            echo "</strong>
                            </td>
                            <td class=\"rfm-cell-frequency\">
                                <span>";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.more"), "html", null, true);
            echo " </span>
                                <strong>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rfmCategories"]) || array_key_exists("rfmCategories", $context) ? $context["rfmCategories"] : (function () { throw new RuntimeError('Variable "rfmCategories" does not exist.', 36, $this->source); })()), "frequency", [], "any", false, false, false, 36), 0, [], "array", false, false, false, 36), "minValue", [], "any", false, false, false, 36), "html", null, true);
            echo "</strong>
                            <td class=\"rfm-cell-monetary\">
                                <span>";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.more"), "html", null, true);
            echo " </span>
                                <strong>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rfmCategories"]) || array_key_exists("rfmCategories", $context) ? $context["rfmCategories"] : (function () { throw new RuntimeError('Variable "rfmCategories" does not exist.', 39, $this->source); })()), "monetary", [], "any", false, false, false, 39), 0, [], "array", false, false, false, 39), "minValue", [], "any", false, false, false, 39), "html", null, true);
            echo "</strong>
                            </td>
                        </tr>

                        ";
            // line 43
            if (((isset($context["rfmCategoriesCount"]) || array_key_exists("rfmCategoriesCount", $context) ? $context["rfmCategoriesCount"] : (function () { throw new RuntimeError('Variable "rfmCategoriesCount" does not exist.', 43, $this->source); })()) > 2)) {
                // line 44
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rfmCategories"]) || array_key_exists("rfmCategories", $context) ? $context["rfmCategories"] : (function () { throw new RuntimeError('Variable "rfmCategories" does not exist.', 44, $this->source); })()), "recency", [], "any", false, false, false, 44), 1,  -1));
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
                foreach ($context['_seq'] as $context["_key"] => $context["rfmCategory"]) {
                    // line 45
                    echo "                                <tr>
                                    <td class=\"rfm-cell-index\">";
                    // line 46
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 46) + 1), "html", null, true);
                    echo "</td>
                                    <td class=\"rfm-cell-recency\">
                                        <span>";
                    // line 48
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.from"), "html", null, true);
                    echo "</span>
                                        <strong>";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rfmCategories"]) || array_key_exists("rfmCategories", $context) ? $context["rfmCategories"] : (function () { throw new RuntimeError('Variable "rfmCategories" does not exist.', 49, $this->source); })()), "recency", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 49), [], "array", false, false, false, 49), "minValue", [], "any", false, false, false, 49), "html", null, true);
                    echo "</strong>
                                        <br><span>";
                    // line 50
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.to"), "html", null, true);
                    echo "</span>
                                        <strong>";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rfmCategories"]) || array_key_exists("rfmCategories", $context) ? $context["rfmCategories"] : (function () { throw new RuntimeError('Variable "rfmCategories" does not exist.', 51, $this->source); })()), "recency", [], "any", false, false, false, 51), twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 51), [], "array", false, false, false, 51), "maxValue", [], "any", false, false, false, 51), "html", null, true);
                    echo "</strong>
                                    </td>
                                    <td class=\"rfm-cell-frequency\">
                                        <span>";
                    // line 54
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.from"), "html", null, true);
                    echo "</span>
                                        <strong>";
                    // line 55
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rfmCategories"]) || array_key_exists("rfmCategories", $context) ? $context["rfmCategories"] : (function () { throw new RuntimeError('Variable "rfmCategories" does not exist.', 55, $this->source); })()), "frequency", [], "any", false, false, false, 55), twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 55), [], "array", false, false, false, 55), "minValue", [], "any", false, false, false, 55), "html", null, true);
                    echo "</strong>
                                        <br><span>";
                    // line 56
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.to"), "html", null, true);
                    echo "</span>
                                        <strong>";
                    // line 57
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rfmCategories"]) || array_key_exists("rfmCategories", $context) ? $context["rfmCategories"] : (function () { throw new RuntimeError('Variable "rfmCategories" does not exist.', 57, $this->source); })()), "frequency", [], "any", false, false, false, 57), twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 57), [], "array", false, false, false, 57), "maxValue", [], "any", false, false, false, 57), "html", null, true);
                    echo "</strong>
                                    <td class=\"rfm-cell-monetary\">
                                        <span>";
                    // line 59
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.from"), "html", null, true);
                    echo "</span>
                                        <strong>";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rfmCategories"]) || array_key_exists("rfmCategories", $context) ? $context["rfmCategories"] : (function () { throw new RuntimeError('Variable "rfmCategories" does not exist.', 60, $this->source); })()), "monetary", [], "any", false, false, false, 60), twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 60), [], "array", false, false, false, 60), "minValue", [], "any", false, false, false, 60), "html", null, true);
                    echo "</strong>
                                        <br><span>";
                    // line 61
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.to"), "html", null, true);
                    echo "</span>
                                        <strong>";
                    // line 62
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rfmCategories"]) || array_key_exists("rfmCategories", $context) ? $context["rfmCategories"] : (function () { throw new RuntimeError('Variable "rfmCategories" does not exist.', 62, $this->source); })()), "monetary", [], "any", false, false, false, 62), twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 62), [], "array", false, false, false, 62), "maxValue", [], "any", false, false, false, 62), "html", null, true);
                    echo "</strong>
                                    </td>
                                </tr>
                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rfmCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "                        ";
            }
            // line 67
            echo "
                        <tr>
                            <td class=\"rfm-cell-index\">";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["rfmCategoriesCount"]) || array_key_exists("rfmCategoriesCount", $context) ? $context["rfmCategoriesCount"] : (function () { throw new RuntimeError('Variable "rfmCategoriesCount" does not exist.', 69, $this->source); })()), "html", null, true);
            echo "
                                <br><small>";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.worst"), "html", null, true);
            echo "</small>
                            </td>
                            <td class=\"rfm-cell-recency\">
                                <span>";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.more"), "html", null, true);
            echo " </span>
                                <strong>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rfmCategories"]) || array_key_exists("rfmCategories", $context) ? $context["rfmCategories"] : (function () { throw new RuntimeError('Variable "rfmCategories" does not exist.', 74, $this->source); })()), "recency", [], "any", false, false, false, 74), ((isset($context["rfmCategoriesCount"]) || array_key_exists("rfmCategoriesCount", $context) ? $context["rfmCategoriesCount"] : (function () { throw new RuntimeError('Variable "rfmCategoriesCount" does not exist.', 74, $this->source); })()) - 1), [], "array", false, false, false, 74), "minValue", [], "any", false, false, false, 74), "html", null, true);
            echo "</strong>
                            </td>
                            <td class=\"rfm-cell-frequency\">
                                <span>";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.less"), "html", null, true);
            echo " </span>
                                <strong>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rfmCategories"]) || array_key_exists("rfmCategories", $context) ? $context["rfmCategories"] : (function () { throw new RuntimeError('Variable "rfmCategories" does not exist.', 78, $this->source); })()), "frequency", [], "any", false, false, false, 78), ((isset($context["rfmCategoriesCount"]) || array_key_exists("rfmCategoriesCount", $context) ? $context["rfmCategoriesCount"] : (function () { throw new RuntimeError('Variable "rfmCategoriesCount" does not exist.', 78, $this->source); })()) - 1), [], "array", false, false, false, 78), "maxValue", [], "any", false, false, false, 78), "html", null, true);
            echo "</strong>
                            <td class=\"rfm-cell-monetary\">
                                <span>";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.analytics.less"), "html", null, true);
            echo " </span>
                                <strong>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rfmCategories"]) || array_key_exists("rfmCategories", $context) ? $context["rfmCategories"] : (function () { throw new RuntimeError('Variable "rfmCategories" does not exist.', 81, $this->source); })()), "monetary", [], "any", false, false, false, 81), ((isset($context["rfmCategoriesCount"]) || array_key_exists("rfmCategoriesCount", $context) ? $context["rfmCategoriesCount"] : (function () { throw new RuntimeError('Variable "rfmCategoriesCount" does not exist.', 81, $this->source); })()) - 1), [], "array", false, false, false, 81), "maxValue", [], "any", false, false, false, 81), "html", null, true);
            echo "</strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ";
        }
        // line 87
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroAnalytics/RFMCategory/channelView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 87,  271 => 81,  267 => 80,  262 => 78,  258 => 77,  252 => 74,  248 => 73,  242 => 70,  238 => 69,  234 => 67,  231 => 66,  213 => 62,  209 => 61,  205 => 60,  201 => 59,  196 => 57,  192 => 56,  188 => 55,  184 => 54,  178 => 51,  174 => 50,  170 => 49,  166 => 48,  161 => 46,  158 => 45,  140 => 44,  138 => 43,  131 => 39,  127 => 38,  122 => 36,  118 => 35,  112 => 32,  108 => 31,  102 => 28,  92 => 21,  88 => 20,  82 => 17,  78 => 16,  72 => 13,  68 => 12,  63 => 10,  58 => 7,  56 => 6,  50 => 3,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"responsive-cell clearfix\">
    <div class=\"span6\">
        <h4>{{ 'oro.analytics.form.rfm_setting.title'|trans }}</h4>
        <div class=\"rfm-settings rfm-enabled\">
            <div class=\"rfm-settings-data\">
                {% if rfmCategoriesCount > 1 %}
                <table class=\"grid table-hover table table-bordered table-condensed\">
                    <thead>
                    <tr>
                        <th><label>{{ 'oro.analytics.form.score.title'|trans }}</label></th>
                        <th>
                            <label>{{ 'oro.analytics.form.recency.label'|trans }}</label>
                            {{ 'oro.analytics.form.hint.recency'|trans }}
                        </th>
                        <th>
                            <label>{{ 'oro.analytics.form.frequency.label'|trans }}</label>
                            {{ 'oro.analytics.form.hint.frequency'|trans }}
                        </th>
                        <th>
                            <label>{{ 'oro.analytics.form.monetary.label'|trans }}</label>
                            {{ 'oro.analytics.form.hint.monetary'|trans }}
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class=\"rfm-cell-index\">1
                                <br><small>{{ 'oro.analytics.best'|trans }}</small>
                            </td>
                            <td class=\"rfm-cell-recency\">
                                <span>{{ 'oro.analytics.less'|trans }} </span>
                                <strong>{{ rfmCategories.recency[0].maxValue }}</strong>
                            </td>
                            <td class=\"rfm-cell-frequency\">
                                <span>{{ 'oro.analytics.more'|trans }} </span>
                                <strong>{{ rfmCategories.frequency[0].minValue }}</strong>
                            <td class=\"rfm-cell-monetary\">
                                <span>{{ 'oro.analytics.more'|trans }} </span>
                                <strong>{{ rfmCategories.monetary[0].minValue }}</strong>
                            </td>
                        </tr>

                        {% if rfmCategoriesCount > 2 %}
                            {% for rfmCategory in rfmCategories.recency|slice(1, -1) %}
                                <tr>
                                    <td class=\"rfm-cell-index\">{{ loop.index + 1 }}</td>
                                    <td class=\"rfm-cell-recency\">
                                        <span>{{ 'oro.analytics.from'|trans }}</span>
                                        <strong>{{ rfmCategories.recency[loop.index].minValue }}</strong>
                                        <br><span>{{ 'oro.analytics.to'|trans }}</span>
                                        <strong>{{ rfmCategories.recency[loop.index].maxValue }}</strong>
                                    </td>
                                    <td class=\"rfm-cell-frequency\">
                                        <span>{{ 'oro.analytics.from'|trans }}</span>
                                        <strong>{{ rfmCategories.frequency[loop.index].minValue }}</strong>
                                        <br><span>{{ 'oro.analytics.to'|trans }}</span>
                                        <strong>{{ rfmCategories.frequency[loop.index].maxValue }}</strong>
                                    <td class=\"rfm-cell-monetary\">
                                        <span>{{ 'oro.analytics.from'|trans }}</span>
                                        <strong>{{ rfmCategories.monetary[loop.index].minValue }}</strong>
                                        <br><span>{{ 'oro.analytics.to'|trans }}</span>
                                        <strong>{{ rfmCategories.monetary[loop.index].maxValue }}</strong>
                                    </td>
                                </tr>
                            {% endfor %}
                        {% endif %}

                        <tr>
                            <td class=\"rfm-cell-index\">{{ rfmCategoriesCount }}
                                <br><small>{{ 'oro.analytics.worst'|trans }}</small>
                            </td>
                            <td class=\"rfm-cell-recency\">
                                <span>{{ 'oro.analytics.more'|trans }} </span>
                                <strong>{{ rfmCategories.recency[rfmCategoriesCount - 1].minValue }}</strong>
                            </td>
                            <td class=\"rfm-cell-frequency\">
                                <span>{{ 'oro.analytics.less'|trans }} </span>
                                <strong>{{ rfmCategories.frequency[rfmCategoriesCount - 1].maxValue }}</strong>
                            <td class=\"rfm-cell-monetary\">
                                <span>{{ 'oro.analytics.less'|trans }} </span>
                                <strong>{{ rfmCategories.monetary[rfmCategoriesCount - 1].maxValue }}</strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
                {% endif %}
            </div>
        </div>
    </div>
</div>
", "@OroAnalytics/RFMCategory/channelView.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm/src/Oro/Bundle/AnalyticsBundle/Resources/views/RFMCategory/channelView.html.twig");
    }
}
