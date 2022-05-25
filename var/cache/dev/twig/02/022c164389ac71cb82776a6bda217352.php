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

/* @OroCampaign/Chart/multiline.html.twig */
class __TwigTemplate_e10fa4689f9544b0e80760ce82cc07e9 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCampaign/Chart/multiline.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCampaign/Chart/multiline.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCampaign/Chart/multiline.html.twig"));

        // line 20
        if ((twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })())) > 0)) {
            // line 21
            echo "    ";
            $context["containerId"] = ("chart-container-" . twig_random($this->env));
            // line 22
            echo "    <div class=\"chart-container\">
        <div class=\"clearfix\">
            <div id=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["containerId"]) || array_key_exists("containerId", $context) ? $context["containerId"] : (function () { throw new RuntimeError('Variable "containerId" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "-chart\" class=\"multiline-chart chart pull-left\"></div>
        </div>
    </div>
    <script type=\"text/javascript\">
        loadModules(['jquery', 'oroui/js/layout', 'flotr2', 'orochart/js/data_formatter', 'oroui/js/mediator'],
            function (\$, layout, Flotr, dataFormatter, mediator) {
                \$(function () {
                    var \$chart = \$('#";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["containerId"]) || array_key_exists("containerId", $context) ? $context["containerId"] : (function () { throw new RuntimeError('Variable "containerId" does not exist.', 31, $this->source); })()), "html", null, true);
            echo "-chart');
                    var \$widgetContent = \$chart.parents('.chart-container').parent();
                    var setChartSize = function () {
                        var chartWidth = Math.round(\$widgetContent.width() * 0.75);
                        if (chartWidth != \$chart.width()) {
                            \$chart.width(chartWidth);
                            \$chart.height(Math.min(Math.round(chartWidth * 0.4), 450));
                            return true;
                        }
                        return false;
                    };
                    var setChartContainerSize = function () {
                        \$chart.closest('.clearfix').width(\$chart.width());
                    };
                    var drawChart = function () {
                        var xFormat = ";
            // line 46
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 46, $this->source); })()), "data_schema", [], "any", false, false, false, 46), "label", [], "any", false, false, false, 46), "type", [], "any", false, false, false, 46));
            echo ";
                        var yFormat = ";
            // line 47
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 47, $this->source); })()), "data_schema", [], "any", false, false, false, 47), "value", [], "any", false, false, false, 47), "type", [], "any", false, false, false, 47));
            echo ";
                        if (!\$chart.get(0).clientWidth) {
                            return;
                        }

                        var rawData = ";
            // line 52
            echo json_encode((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 52, $this->source); })()));
            echo ";
                        var length = _.size(rawData[_.first(_.keys(rawData))]);

                        if (dataFormatter.isValueNumerical(xFormat)) {
                            var sort = function (rawData) {
                                rawData.sort(function (first, second) {
                                    if (first.label == null) {
                                        return -1;
                                    }
                                    if (second.label == null) {
                                        return 1;
                                    }
                                    var firstLabel = dataFormatter.parseValue(first.label, xFormat);
                                    var secondLabel = dataFormatter.parseValue(second.label, xFormat);
                                    return firstLabel - secondLabel;
                                });
                            };

                            _.each(rawData, sort);
                        }

                        var getXLabel = function (data) {
                            var label = dataFormatter.formatValue(data, xFormat);
                            if (label === null) {
                                var number = parseInt(data);
                                if (rawData.length > number) {
                                    label = rawData[number]['label'] === null ? '";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
            echo "' : rawData[number]['label'];
                                } else {
                                    label = '';
                                }
                            }
                            return label;
                        };

                        var getYLabel = function (data) {
                            var label = dataFormatter.formatValue(data, yFormat);
                            if (label === null) {
                                var number = parseInt(data);
                                if (rawData.length > number) {
                                    label = rawData[data]['value'] === null ? '";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
            echo "' : rawData[data]['value'];
                                } else {
                                    label = '';
                                }
                            }
                            return label;
                        };

                        var connectDots = ";
            // line 99
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 99, $this->source); })()), "settings", [], "any", false, false, false, 99), "connect_dots_with_line", [], "any", false, false, false, 99));
            echo ";
                        var colors = ";
            // line 100
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 100, $this->source); })()), "default_settings", [], "any", false, false, false, 100), "chartColors", [], "any", false, false, false, 100));
            echo ";

                        var makeChart = function (rawData, count, key) {
                            var chartData = [];
                            var prevYValue = 0;

                            for (var i in rawData) {
                                var yValue = dataFormatter.parseValue(rawData[i]['value'], yFormat);
                                yValue = yValue === null ? parseInt(i) : yValue;
                                yValue = yValue + prevYValue;
                                var xValue = dataFormatter.parseValue(rawData[i]['label'], xFormat);
                                xValue = xValue === null ? parseInt(i) : xValue;

                                var item = [xValue, yValue];
                                chartData.push(item);
                                prevYValue = yValue;
                            }

                            return {
                                label: key,
                                data: chartData,
                                color: colors[Math.ceil(colors.length/count)],
                                markers: { show: false },
                                points: { show: true }
                            };
                        };

                        var charts = [];
                        var count = 0;

                        _.each(rawData, function (rawData, key) {
                            var result = makeChart(rawData, count, key);
                            count++;

                            charts.push(result);
                        });

                        Flotr.draw(
                                \$chart.get(0),
                                charts,
                                {
                                    colors: colors,
                                    fontColor: ";
            // line 142
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 142, $this->source); })()), "settings", [], "any", false, false, false, 142), "chartFontColor", [], "any", false, false, false, 142));
            echo ",
                                    fontSize: ";
            // line 143
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 143, $this->source); })()), "settings", [], "any", false, false, false, 143), "chartFontSize", [], "any", false, false, false, 143));
            echo ",
                                    lines: {
                                        show: connectDots
                                    },
                                    mouse: {
                                        track: true,
                                        relative: true,
                                        trackFormatter: function (pointData) {
                                            return ";
            // line 151
            echo json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 151, $this->source); })()), "data_schema", [], "any", false, false, false, 151), "label", [], "any", false, false, false, 151), "label", [], "any", false, false, false, 151)));
            echo "
                                                + ': ' + getXLabel(pointData.x)
                                                + ';</br>' + ";
            // line 153
            echo json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 153, $this->source); })()), "data_schema", [], "any", false, false, false, 153), "value", [], "any", false, false, false, 153), "label", [], "any", false, false, false, 153)));
            echo "
                                                + ': ' + getYLabel(pointData.y);
                                        }
                                    },
                                    yaxis: {
                                        autoscale: true,
                                        autoscaleMargin: 1,
                                        tickFormatter: function (y) {
                                            return getYLabel(y);
                                        },
                                        title: ";
            // line 163
            echo json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 163, $this->source); })()), "data_schema", [], "any", false, false, false, 163), "value", [], "any", false, false, false, 163), "label", [], "any", false, false, false, 163)));
            echo "
                                    },
                                    xaxis: {
                                        autoscale: true,
                                        autoscaleMargin: 0,
                                        labelsAngle: 45,
                                        mode: 'time',
                                        noTicks: length * 2,
                                        tickFormatter: function (x) {
                                            return getXLabel(x);
                                        },
                                        title: ";
            // line 174
            echo json_encode($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 174, $this->source); })()), "data_schema", [], "any", false, false, false, 174), "label", [], "any", false, false, false, 174), "label", [], "any", false, false, false, 174)));
            echo "
                                    },
                                    HtmlText: false,
                                    grid: {
                                        verticalLines: false,
                                        labelMargin: 10
                                    },
                                    legend: {
                                        show: true,
                                        noColumns: 1,
                                        position: 'nw'
                                    }
                                }
                        );
                    };

                    mediator.on('page:afterChange', function(){
                        setChartSize();
                        drawChart();
                        setChartContainerSize();
                    });

                    \$(window).resize(function () {
                        if (setChartSize()) {
                            drawChart();
                            setChartContainerSize();
                        }
                    });
                });
            });
    </script>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroCampaign/Chart/multiline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 174,  233 => 163,  220 => 153,  215 => 151,  204 => 143,  200 => 142,  155 => 100,  151 => 99,  140 => 91,  124 => 78,  95 => 52,  87 => 47,  83 => 46,  65 => 31,  55 => 24,  51 => 22,  48 => 21,  46 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{# Chart variables format:

    \"options\":
        \"name\": \"chart_name\",
        \"data_schema\" => array(
            \"label\" => array(\"field_name\" => \"name\", \"label\" => \"First Name\", \"type\" => \"string\"),
            \"value\" => array(\"field_name\" => \"salary\", \"label\" => \"Salary\", \"type\" => \"money\"),
        ),
        \"settings\" => array(
            \"foo\" => \"bar\"
        ),
    \"config\": { /** Chart config from in format of oro/charts.yml */ }
    \"data\": [
        {\"label\": \"In progress\", \"value\": 1000},
        {\"label\": \"Lost\", \"value\": 500},
        {\"label\": \"Won\", \"value\": 10000},
    ]

#}
{% if data|length > 0 %}
    {% set containerId = \"chart-container-\" ~ random() %}
    <div class=\"chart-container\">
        <div class=\"clearfix\">
            <div id=\"{{ containerId }}-chart\" class=\"multiline-chart chart pull-left\"></div>
        </div>
    </div>
    <script type=\"text/javascript\">
        loadModules(['jquery', 'oroui/js/layout', 'flotr2', 'orochart/js/data_formatter', 'oroui/js/mediator'],
            function (\$, layout, Flotr, dataFormatter, mediator) {
                \$(function () {
                    var \$chart = \$('#{{ containerId }}-chart');
                    var \$widgetContent = \$chart.parents('.chart-container').parent();
                    var setChartSize = function () {
                        var chartWidth = Math.round(\$widgetContent.width() * 0.75);
                        if (chartWidth != \$chart.width()) {
                            \$chart.width(chartWidth);
                            \$chart.height(Math.min(Math.round(chartWidth * 0.4), 450));
                            return true;
                        }
                        return false;
                    };
                    var setChartContainerSize = function () {
                        \$chart.closest('.clearfix').width(\$chart.width());
                    };
                    var drawChart = function () {
                        var xFormat = {{ options.data_schema.label.type|json_encode|raw }};
                        var yFormat = {{ options.data_schema.value.type|json_encode|raw }};
                        if (!\$chart.get(0).clientWidth) {
                            return;
                        }

                        var rawData = {{ data|json_encode|raw }};
                        var length = _.size(rawData[_.first(_.keys(rawData))]);

                        if (dataFormatter.isValueNumerical(xFormat)) {
                            var sort = function (rawData) {
                                rawData.sort(function (first, second) {
                                    if (first.label == null) {
                                        return -1;
                                    }
                                    if (second.label == null) {
                                        return 1;
                                    }
                                    var firstLabel = dataFormatter.parseValue(first.label, xFormat);
                                    var secondLabel = dataFormatter.parseValue(second.label, xFormat);
                                    return firstLabel - secondLabel;
                                });
                            };

                            _.each(rawData, sort);
                        }

                        var getXLabel = function (data) {
                            var label = dataFormatter.formatValue(data, xFormat);
                            if (label === null) {
                                var number = parseInt(data);
                                if (rawData.length > number) {
                                    label = rawData[number]['label'] === null ? '{{ 'N/A'|trans }}' : rawData[number]['label'];
                                } else {
                                    label = '';
                                }
                            }
                            return label;
                        };

                        var getYLabel = function (data) {
                            var label = dataFormatter.formatValue(data, yFormat);
                            if (label === null) {
                                var number = parseInt(data);
                                if (rawData.length > number) {
                                    label = rawData[data]['value'] === null ? '{{ 'N/A'|trans }}' : rawData[data]['value'];
                                } else {
                                    label = '';
                                }
                            }
                            return label;
                        };

                        var connectDots = {{ options.settings.connect_dots_with_line|json_encode|raw }};
                        var colors = {{ config.default_settings.chartColors|json_encode|raw }};

                        var makeChart = function (rawData, count, key) {
                            var chartData = [];
                            var prevYValue = 0;

                            for (var i in rawData) {
                                var yValue = dataFormatter.parseValue(rawData[i]['value'], yFormat);
                                yValue = yValue === null ? parseInt(i) : yValue;
                                yValue = yValue + prevYValue;
                                var xValue = dataFormatter.parseValue(rawData[i]['label'], xFormat);
                                xValue = xValue === null ? parseInt(i) : xValue;

                                var item = [xValue, yValue];
                                chartData.push(item);
                                prevYValue = yValue;
                            }

                            return {
                                label: key,
                                data: chartData,
                                color: colors[Math.ceil(colors.length/count)],
                                markers: { show: false },
                                points: { show: true }
                            };
                        };

                        var charts = [];
                        var count = 0;

                        _.each(rawData, function (rawData, key) {
                            var result = makeChart(rawData, count, key);
                            count++;

                            charts.push(result);
                        });

                        Flotr.draw(
                                \$chart.get(0),
                                charts,
                                {
                                    colors: colors,
                                    fontColor: {{ options.settings.chartFontColor|json_encode|raw }},
                                    fontSize: {{ options.settings.chartFontSize|json_encode|raw }},
                                    lines: {
                                        show: connectDots
                                    },
                                    mouse: {
                                        track: true,
                                        relative: true,
                                        trackFormatter: function (pointData) {
                                            return {{ options.data_schema.label.label|trans|json_encode|raw }}
                                                + ': ' + getXLabel(pointData.x)
                                                + ';</br>' + {{ options.data_schema.value.label|trans|json_encode|raw }}
                                                + ': ' + getYLabel(pointData.y);
                                        }
                                    },
                                    yaxis: {
                                        autoscale: true,
                                        autoscaleMargin: 1,
                                        tickFormatter: function (y) {
                                            return getYLabel(y);
                                        },
                                        title: {{ options.data_schema.value.label|trans|json_encode|raw }}
                                    },
                                    xaxis: {
                                        autoscale: true,
                                        autoscaleMargin: 0,
                                        labelsAngle: 45,
                                        mode: 'time',
                                        noTicks: length * 2,
                                        tickFormatter: function (x) {
                                            return getXLabel(x);
                                        },
                                        title: {{ options.data_schema.label.label|trans|json_encode|raw }}
                                    },
                                    HtmlText: false,
                                    grid: {
                                        verticalLines: false,
                                        labelMargin: 10
                                    },
                                    legend: {
                                        show: true,
                                        noColumns: 1,
                                        position: 'nw'
                                    }
                                }
                        );
                    };

                    mediator.on('page:afterChange', function(){
                        setChartSize();
                        drawChart();
                        setChartContainerSize();
                    });

                    \$(window).resize(function () {
                        if (setChartSize()) {
                            drawChart();
                            setChartContainerSize();
                        }
                    });
                });
            });
    </script>
{% endif %}
", "@OroCampaign/Chart/multiline.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/marketing/src/Oro/Bundle/CampaignBundle/Resources/views/Chart/multiline.html.twig");
    }
}
