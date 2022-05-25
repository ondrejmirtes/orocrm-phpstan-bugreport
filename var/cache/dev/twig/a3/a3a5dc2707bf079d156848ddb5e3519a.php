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

/* @OroEntity/Collector/orm.html.twig */
class __TwigTemplate_2b879dab34945edf2b31e19d8ec98fc1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
            'stats' => [$this, 'block_stats'],
            'hydrations' => [$this, 'block_hydrations'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEntity/Collector/orm.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntity/Collector/orm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEntity/Collector/orm.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@OroEntity/Collector/orm.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("toolbar", $this->getTemplateName(), 3));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "    <img width=\"20\" height=\"28\" alt=\"Doctrine ORM\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOwgAADsIBFShKgAAAABh0RVh0U29mdHdhcmUAcGFpbnQubmV0IDQuMC41ZYUyZQAAAc1JREFUSEutlb9Lw0AUxzMJ4u/BxcG/QhxcStdSBEXc2kUUV91KxcFujiIUBAeXghV0Mv1BV9OmpTRpOnaIKXZowUUFB2n8vnAp1FzTxuTg0x4v731yeXdNBdM0A4Ub9AM36Adu0A9CoVC4jUQiMhEKhUwiFoul4vH4Jq+AoGuUY+fb9eQSaIKEvn2RcJPZUM6fmj65LCEF6I68wmmwV2sJo9GodYd6vb6tadpjs9l8BQYPXH8Cu9lsdkZgg4SDwWCBHOQaCvP5fC+Xy51JkrSP4ktVVZ9RLI7hvtVqHYF1tsolntAC0rdSqbSDGPX1fRJjhRA1IPwiqSzLyXA4/EHxcdBg3/xHxpZfQZYED4qiJCD8tIvdYMJZmo8IIfoBPXCt6/pWu92+MQxDcgM5dyQE8zzhN7D6WC6XTxGbuodY4SLmo0JRFA8gq5KwVqtdeOkh4O6yDg7RyxMcm2OPPXSukFbGULHCvXQ6/ZLJZAw3kNNgQuem4Nj0bWmlUkkg5qWHc5g7ergKWQpiDcfm3OM5dD4y+2kKxWJxrdvtbnjpIVihOVdIg3rS6XQUoE1AYcLloTDw1xd9BPqCDfwvgFfgB27QD9ygH7jB/2MKvwXZez+M9nkbAAAAAElFTkSuQmCC\"/>
    <span class=\"sf-toolbar-value\">";
        // line 6
        echo twig_escape_filter($this->env, twig_sprintf("%0.0f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "totalTime", [], "any", false, false, false, 6) * 1000)), "html", null, true);
        echo "</span>
    <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>Hydrations</b>
        <span class=\"sf-toolbar-status\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 12, $this->source); })()), "hydrationCount", [], "any", false, false, false, 12), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Hydration time</b>
        <span>";
        // line 16
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "hydrationTime", [], "any", false, false, false, 16) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Hydrated entities</b>
        <span class=\"sf-toolbar-status\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 20, $this->source); })()), "hydratedEntities", [], "any", false, false, false, 20), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b><abbr title=\"The number of calls. ClassMetadataFactory::getAllMetadata: ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 23, $this->source); })()), "stats", [], "any", false, false, false, 23), "getAllMetadata", [], "any", false, false, false, 23), "count", [], "any", false, false, false, 23), "html", null, true);
        echo ", ClassMetadataFactory::getMetadataFor: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 23, $this->source); })()), "stats", [], "any", false, false, false, 23), "getMetadataFor", [], "any", false, false, false, 23), "count", [], "any", false, false, false, 23), "html", null, true);
        echo ", ClassMetadataFactory::isTransient: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 23, $this->source); })()), "stats", [], "any", false, false, false, 23), "isTransient", [], "any", false, false, false, 23), "count", [], "any", false, false, false, 23), "html", null, true);
        echo "\">Metadata</abbr></b>
        <span class=\"sf-toolbar-status\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 24, $this->source); })()), "stats", [], "any", false, false, false, 24), "metadata", [], "any", false, false, false, 24), "count", [], "any", false, false, false, 24), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b><abbr title=\"ClassMetadataFactory::getAllMetadata: ";
        // line 27
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 27, $this->source); })()), "stats", [], "any", false, false, false, 27), "getAllMetadata", [], "any", false, false, false, 27), "time", [], "any", false, false, false, 27) * 1000)), "html", null, true);
        echo " ms, ClassMetadataFactory::getMetadataFor: ";
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 27, $this->source); })()), "stats", [], "any", false, false, false, 27), "getMetadataFor", [], "any", false, false, false, 27), "time", [], "any", false, false, false, 27) * 1000)), "html", null, true);
        echo " ms, ClassMetadataFactory::isTransient: ";
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 27, $this->source); })()), "stats", [], "any", false, false, false, 27), "isTransient", [], "any", false, false, false, 27), "time", [], "any", false, false, false, 27) * 1000)), "html", null, true);
        echo " ms\">Metadata time</abbr></b>
        <span>";
        // line 28
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 28, $this->source); })()), "stats", [], "any", false, false, false, 28), "metadata", [], "any", false, false, false, 28), "time", [], "any", false, false, false, 28) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Persists</b>
        <span class=\"sf-toolbar-status\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 32, $this->source); })()), "stats", [], "any", false, false, false, 32), "persist", [], "any", false, false, false, 32), "count", [], "any", false, false, false, 32), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Persist time</b>
        <span>";
        // line 36
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 36, $this->source); })()), "stats", [], "any", false, false, false, 36), "persist", [], "any", false, false, false, 36), "time", [], "any", false, false, false, 36) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Detaches</b>
        <span class=\"sf-toolbar-status\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 40, $this->source); })()), "stats", [], "any", false, false, false, 40), "detach", [], "any", false, false, false, 40), "count", [], "any", false, false, false, 40), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Detach time</b>
        <span>";
        // line 44
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 44, $this->source); })()), "stats", [], "any", false, false, false, 44), "detach", [], "any", false, false, false, 44), "time", [], "any", false, false, false, 44) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Merges</b>
        <span class=\"sf-toolbar-status\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 48, $this->source); })()), "stats", [], "any", false, false, false, 48), "merge", [], "any", false, false, false, 48), "count", [], "any", false, false, false, 48), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Merge time</b>
        <span>";
        // line 52
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 52, $this->source); })()), "stats", [], "any", false, false, false, 52), "merge", [], "any", false, false, false, 52), "time", [], "any", false, false, false, 52) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Removes</b>
        <span class=\"sf-toolbar-status\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 56, $this->source); })()), "stats", [], "any", false, false, false, 56), "remove", [], "any", false, false, false, 56), "count", [], "any", false, false, false, 56), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Remove time</b>
        <span>";
        // line 60
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 60, $this->source); })()), "stats", [], "any", false, false, false, 60), "remove", [], "any", false, false, false, 60), "time", [], "any", false, false, false, 60) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Refreshes</b>
        <span class=\"sf-toolbar-status\">";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 64, $this->source); })()), "stats", [], "any", false, false, false, 64), "refresh", [], "any", false, false, false, 64), "count", [], "any", false, false, false, 64), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Refresh time</b>
        <span>";
        // line 68
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 68, $this->source); })()), "stats", [], "any", false, false, false, 68), "refresh", [], "any", false, false, false, 68), "time", [], "any", false, false, false, 68) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Flushes</b>
        <span class=\"sf-toolbar-status\">";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 72, $this->source); })()), "stats", [], "any", false, false, false, 72), "flush", [], "any", false, false, false, 72), "count", [], "any", false, false, false, 72), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Flush time</b>
        <span>";
        // line 76
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 76, $this->source); })()), "stats", [], "any", false, false, false, 76), "flush", [], "any", false, false, false, 76), "time", [], "any", false, false, false, 76) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b><abbr title=\"The total time of all monitored ORM hydrations, operations and metadata retrieving. The time of hidrations and operations includes the time of metadata retrieving used there.\">Total time</abbr></b>
        <span>";
        // line 80
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 80, $this->source); })()), "totalTime", [], "any", false, false, false, 80) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@OroEntity/Collector/orm.html.twig", 83)->display(twig_array_merge($context, ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 83, $this->source); })())]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 86
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("menu", $this->getTemplateName(), 86));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 87
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOwQAADsEBuJFr7QAAABh0RVh0U29mdHdhcmUAcGFpbnQubmV0IDQuMC41ZYUyZQAAAqdJREFUSEu9lslvEmEYh7EHEpdWvXjy0n9CL4bVE+GkBwkR6EHDIglKDx7RUNIDSwynmtjELRo5GFMNS9jbGNIoskYCF+NBD5JIwKWHtjP+3glDEIelTOVLnvbLxzfv05f5deaTxGKxdY1Gs03I5XKWMBgMbqPReI5lWclBoGvoWr4OX5ccEppgQ5P/kJhGwkPXDtRqkoMT0QL9JUIXioHvjhPpdDrOPLjpsKDa5OiJJBj0QS6Xu1QqlZ5WKpU6aIM9wAqwA7aw91axWLwAFhuNxkK1WpWizhzVotETabXav0SRSOQ98GUymeV8Pr+KYm/K5XIeFIcBWRKsQXKjUCgoID3TLyLHP6JoNMpA9BN8jMfjKx6P57rdbneBlXFYrdY7er1+GTWvTSJiCYj2IYouLS29VCgU32Qy2Y9xqNVqDppTLSAdJdrtiphkMrlpNptTSqXyN+0ZB41AIMCqVCqaShiGmad1QREED8Ph8FfI9lOp1JbFYslMKiKJyWRisZ8TgZO0PqwjO7gCniAQrw8i6mcS0Rd09QhcRHrO45/u+bSikV8dRJS6XfAZ9+guYnu7Vqsl6vX6u0lBxJ91RUdHifjUMYlEIu50OsMiUndiZEe86BBSt0DrgiIIyuAX+L+pw7vjKjpaQ8S30+n0K5vNlhQRhuEdQfQW3XghcmWz2Ztut/u+CNHwMNC9QUdtUMJXtxoMBu95vd6yz+f75Pf7J8Llcn3oio4PFVEQuuzhWRdzOBwb06ZuXBh6qUNHmwjD1KkDp2l9WEc0vuMekUhs6k7RuqAIYViExISONiCKiHzWHaM5Jxp8lYMjoVBICtlZvGFleDI8FiGao7ngmaF/NJvN+Vardbndbj/odDov8Ds0IdyJikZPNLPjFv2YyQFyNkfi2Pofu0Bt+h/LrYUAAAAASUVORK5CYII=\" alt=\"\"/></span>
    <strong>Doctrine ORM</strong>
</span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 93
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("panel", $this->getTemplateName(), 93));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 94
        echo "    ";
        $this->displayBlock("stats", $context, $blocks);
        echo "
    ";
        // line 95
        $this->displayBlock("hydrations", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 98
    public function block_stats($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("stats", $this->getTemplateName(), 98));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stats"));

        // line 99
        echo "    <h2>ORM Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 103
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 103, $this->source); })()), "totalTime", [], "any", false, false, false, 103) * 1000)), "html", null, true);
        echo " ms</span>
            <span class=\"label\"><abbr title=\"The total time of all monitored ORM hydrations, operations and metadata retrieving. The time of hidrations and operations includes the time of metadata retrieving used there.\">Total time</abbr></span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 107, $this->source); })()), "hydrationCount", [], "any", false, false, false, 107), "html", null, true);
        echo "</span>
            <span class=\"label\">Hydrations</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 111
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 111, $this->source); })()), "hydrationTime", [], "any", false, false, false, 111) * 1000)), "html", null, true);
        echo " ms</span>
            <span class=\"label\"><abbr title=\"The total time of all monitored ORM hydrations. This time includes the time of metadata retrieving used inside hydrations.\">Hydration time</abbr></span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 115, $this->source); })()), "hydratedEntities", [], "any", false, false, false, 115), "html", null, true);
        echo "</span>
            <span class=\"label\">Hydrated entities</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 119, $this->source); })()), "stats", [], "any", false, false, false, 119), "metadata", [], "any", false, false, false, 119), "count", [], "any", false, false, false, 119), "html", null, true);
        echo "</span>
            <span class=\"label\">Metadata calls</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 123
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 123, $this->source); })()), "stats", [], "any", false, false, false, 123), "metadata", [], "any", false, false, false, 123), "time", [], "any", false, false, false, 123) * 1000)), "html", null, true);
        echo " ms</span>
            <span class=\"label\">Metadata time</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 127
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 127, $this->source); })()), "stats", [], "any", false, false, false, 127), "persist", [], "any", false, false, false, 127), "time", [], "any", false, false, false, 127) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 127, $this->source); })()), "stats", [], "any", false, false, false, 127), "detach", [], "any", false, false, false, 127), "time", [], "any", false, false, false, 127)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 127, $this->source); })()), "stats", [], "any", false, false, false, 127), "merge", [], "any", false, false, false, 127), "time", [], "any", false, false, false, 127)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 127, $this->source); })()), "stats", [], "any", false, false, false, 127), "remove", [], "any", false, false, false, 127), "time", [], "any", false, false, false, 127)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 127, $this->source); })()), "stats", [], "any", false, false, false, 127), "refresh", [], "any", false, false, false, 127), "time", [], "any", false, false, false, 127)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 127, $this->source); })()), "stats", [], "any", false, false, false, 127), "flush", [], "any", false, false, false, 127), "time", [], "any", false, false, false, 127)) * 1000)), "html", null, true);
        echo " ms</span>
            <span class=\"label\"><abbr title=\"The total time of all monitored ORM operations, such as persist, flush, detach, merge, remove and refresh. This time includes the time of metadata retrieving used inside operations.\">Operations time</abbr></span>
        </div>
    </div>

    <h3>Metadata</h3>

    <table>
        <thead>
            <tr>
                <th style=\"width: 100%;\">Operation</th>
                <th class=\"nowrap\" style=\"min-width: 7em;\">Calls</th>
                <th class=\"nowrap\" style=\"min-width: 7em;\">Time</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>GetAllMetadata</td>
                <td>";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 145, $this->source); })()), "stats", [], "any", false, false, false, 145), "getAllMetadata", [], "any", false, false, false, 145), "count", [], "any", false, false, false, 145), "html", null, true);
        echo "</td>
                <td>";
        // line 146
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 146, $this->source); })()), "stats", [], "any", false, false, false, 146), "getAllMetadata", [], "any", false, false, false, 146), "time", [], "any", false, false, false, 146) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <td>GetMetadataFor</td>
                <td>";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 150, $this->source); })()), "stats", [], "any", false, false, false, 150), "getMetadataFor", [], "any", false, false, false, 150), "count", [], "any", false, false, false, 150), "html", null, true);
        echo "</td>
                <td>";
        // line 151
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 151, $this->source); })()), "stats", [], "any", false, false, false, 151), "getMetadataFor", [], "any", false, false, false, 151), "time", [], "any", false, false, false, 151) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <td>IsTransient</td>
                <td>";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 155, $this->source); })()), "stats", [], "any", false, false, false, 155), "isTransient", [], "any", false, false, false, 155), "count", [], "any", false, false, false, 155), "html", null, true);
        echo "</td>
                <td>";
        // line 156
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 156, $this->source); })()), "stats", [], "any", false, false, false, 156), "isTransient", [], "any", false, false, false, 156), "time", [], "any", false, false, false, 156) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
        </tbody>
    </table>

    <h3>Operations</h3>

    <table>
        <thead>
            <tr>
                <th style=\"width: 100%;\">Operation</th>
                <th class=\"nowrap\" style=\"min-width: 7em;\">Calls</th>
                <th class=\"nowrap\" style=\"min-width: 7em;\">Time</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Persist</td>
                <td>";
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 174, $this->source); })()), "stats", [], "any", false, false, false, 174), "persist", [], "any", false, false, false, 174), "count", [], "any", false, false, false, 174), "html", null, true);
        echo "</td>
                <td>";
        // line 175
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 175, $this->source); })()), "stats", [], "any", false, false, false, 175), "persist", [], "any", false, false, false, 175), "time", [], "any", false, false, false, 175) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <td>Detach</td>
                <td>";
        // line 179
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 179, $this->source); })()), "stats", [], "any", false, false, false, 179), "detach", [], "any", false, false, false, 179), "count", [], "any", false, false, false, 179), "html", null, true);
        echo "</td>
                <td>";
        // line 180
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 180, $this->source); })()), "stats", [], "any", false, false, false, 180), "detach", [], "any", false, false, false, 180), "time", [], "any", false, false, false, 180) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <td>Merge</td>
                <td>";
        // line 184
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 184, $this->source); })()), "stats", [], "any", false, false, false, 184), "merge", [], "any", false, false, false, 184), "count", [], "any", false, false, false, 184), "html", null, true);
        echo "</td>
                <td>";
        // line 185
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 185, $this->source); })()), "stats", [], "any", false, false, false, 185), "merge", [], "any", false, false, false, 185), "time", [], "any", false, false, false, 185) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <td>Remove</td>
                <td>";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 189, $this->source); })()), "stats", [], "any", false, false, false, 189), "remove", [], "any", false, false, false, 189), "count", [], "any", false, false, false, 189), "html", null, true);
        echo "</td>
                <td>";
        // line 190
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 190, $this->source); })()), "stats", [], "any", false, false, false, 190), "remove", [], "any", false, false, false, 190), "time", [], "any", false, false, false, 190) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <td>Refresh</td>
                <td>";
        // line 194
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 194, $this->source); })()), "stats", [], "any", false, false, false, 194), "refresh", [], "any", false, false, false, 194), "count", [], "any", false, false, false, 194), "html", null, true);
        echo "</td>
                <td>";
        // line 195
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 195, $this->source); })()), "stats", [], "any", false, false, false, 195), "refresh", [], "any", false, false, false, 195), "time", [], "any", false, false, false, 195) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <td>Flush</td>
                <td>";
        // line 199
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 199, $this->source); })()), "stats", [], "any", false, false, false, 199), "flush", [], "any", false, false, false, 199), "count", [], "any", false, false, false, 199), "html", null, true);
        echo "</td>
                <td>";
        // line 200
        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 200, $this->source); })()), "stats", [], "any", false, false, false, 200), "flush", [], "any", false, false, false, 200), "time", [], "any", false, false, false, 200) * 1000)), "html", null, true);
        echo " ms</td>
            </tr>
        </tbody>
    </table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 207
    public function block_hydrations($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("hydrations", $this->getTemplateName(), 207));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hydrations"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hydrations"));

        // line 208
        echo "    <h2>Hydrations</h2>

    ";
        // line 210
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 210, $this->source); })()), "hydrations", [], "any", false, false, false, 210))) {
            // line 211
            echo "        <div class=\"empty\">
            <p>No hydrations.</p>
        </div>
    ";
        } else {
            // line 215
            echo "        <table class=\"alt\" id=\"hydrationsPlaceholder\">
            <thead>
            <tr>
                <th onclick=\"javascript:sortTable(this, 0, 'hydrations')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span>&#9650;</span></th>
                <th onclick=\"javascript:sortTable(this, 1, 'hydrations')\" style=\"cursor: pointer;\">Time<span></span></th>
                <th onclick=\"javascript:sortTable(this, 2, 'hydrations')\" style=\"cursor: pointer;\">Entities<span></span></th>
                <th>Type</th>
                <th>Alias Map</th>
            </tr>
            </thead>
            <tbody id=\"hydrations\">
            ";
            // line 226
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 226, $this->source); })()), "hydrations", [], "any", false, false, false, 226));
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
            foreach ($context['_seq'] as $context["i"] => $context["hydration"]) {
                // line 227
                echo "                <tr id=\"hydrationNo-";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, twig_cycle([0 => "odd", 1 => "even"], $context["i"]), "html", null, true);
                echo "\">
                    <td>";
                // line 228
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 228), "html", null, true);
                echo "</td>
                    <td>";
                // line 229
                if (twig_get_attribute($this->env, $this->source, $context["hydration"], "time", [], "any", true, true, false, 229)) {
                    // line 230
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["hydration"], "time", [], "any", false, false, false, 230) * 1000)), "html", null, true);
                    echo "&nbsp;ms
                        ";
                } else {
                    // line 232
                    echo "                            Unknown
                        ";
                }
                // line 234
                echo "                    </td>
                    <td>";
                // line 235
                if (twig_get_attribute($this->env, $this->source, $context["hydration"], "resultCount", [], "any", true, true, false, 235)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hydration"], "resultCount", [], "any", false, false, false, 235), "html", null, true);
                } else {
                    echo "Unknown";
                }
                echo "</td>
                    <td>";
                // line 236
                if (twig_get_attribute($this->env, $this->source, $context["hydration"], "type", [], "any", true, true, false, 236)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hydration"], "type", [], "any", false, false, false, 236), "html", null, true);
                    echo " ";
                } else {
                    echo "Unknown";
                }
                echo "</td>
                    <td>
                        ";
                // line 238
                if (twig_get_attribute($this->env, $this->source, $context["hydration"], "aliasMap", [], "any", true, true, false, 238)) {
                    // line 239
                    echo "                        <ul>
                            ";
                    // line 240
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["hydration"], "aliasMap", [], "any", false, false, false, 240));
                    foreach ($context['_seq'] as $context["alias"] => $context["class"]) {
                        // line 241
                        echo "                                <li>";
                        echo twig_escape_filter($this->env, $context["alias"], "html", null, true);
                        echo " => ";
                        echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                        echo "</li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['alias'], $context['class'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 243
                    echo "                        </ul>
                        ";
                } else {
                    // line 244
                    echo "Unknown";
                }
                // line 245
                echo "                    </td>
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
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['hydration'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            echo "            </tbody>
        </table>

        <style>
            table li {
                margin-bottom: 0px;
            }
        </style>

        <script>//<![CDATA[

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '&#9650;' : '&#9660;';

            items.sort(function(a, b) {
                return direction*(parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

    //]]></script>
    ";
        }
        // line 296
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroEntity/Collector/orm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  715 => 296,  665 => 248,  649 => 245,  646 => 244,  642 => 243,  631 => 241,  627 => 240,  624 => 239,  622 => 238,  612 => 236,  604 => 235,  601 => 234,  597 => 232,  591 => 230,  589 => 229,  585 => 228,  578 => 227,  561 => 226,  548 => 215,  542 => 211,  540 => 210,  536 => 208,  523 => 207,  504 => 200,  500 => 199,  493 => 195,  489 => 194,  482 => 190,  478 => 189,  471 => 185,  467 => 184,  460 => 180,  456 => 179,  449 => 175,  445 => 174,  424 => 156,  420 => 155,  413 => 151,  409 => 150,  402 => 146,  398 => 145,  377 => 127,  370 => 123,  363 => 119,  356 => 115,  349 => 111,  342 => 107,  335 => 103,  329 => 99,  316 => 98,  301 => 95,  296 => 94,  283 => 93,  266 => 87,  253 => 86,  239 => 83,  233 => 80,  226 => 76,  219 => 72,  212 => 68,  205 => 64,  198 => 60,  191 => 56,  184 => 52,  177 => 48,  170 => 44,  163 => 40,  156 => 36,  149 => 32,  142 => 28,  134 => 27,  128 => 24,  120 => 23,  114 => 20,  107 => 16,  100 => 12,  96 => 10,  93 => 9,  87 => 6,  84 => 5,  81 => 4,  68 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
    <img width=\"20\" height=\"28\" alt=\"Doctrine ORM\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOwgAADsIBFShKgAAAABh0RVh0U29mdHdhcmUAcGFpbnQubmV0IDQuMC41ZYUyZQAAAc1JREFUSEutlb9Lw0AUxzMJ4u/BxcG/QhxcStdSBEXc2kUUV91KxcFujiIUBAeXghV0Mv1BV9OmpTRpOnaIKXZowUUFB2n8vnAp1FzTxuTg0x4v731yeXdNBdM0A4Ub9AM36Adu0A9CoVC4jUQiMhEKhUwiFoul4vH4Jq+AoGuUY+fb9eQSaIKEvn2RcJPZUM6fmj65LCEF6I68wmmwV2sJo9GodYd6vb6tadpjs9l8BQYPXH8Cu9lsdkZgg4SDwWCBHOQaCvP5fC+Xy51JkrSP4ktVVZ9RLI7hvtVqHYF1tsolntAC0rdSqbSDGPX1fRJjhRA1IPwiqSzLyXA4/EHxcdBg3/xHxpZfQZYED4qiJCD8tIvdYMJZmo8IIfoBPXCt6/pWu92+MQxDcgM5dyQE8zzhN7D6WC6XTxGbuodY4SLmo0JRFA8gq5KwVqtdeOkh4O6yDg7RyxMcm2OPPXSukFbGULHCvXQ6/ZLJZAw3kNNgQuem4Nj0bWmlUkkg5qWHc5g7ergKWQpiDcfm3OM5dD4y+2kKxWJxrdvtbnjpIVihOVdIg3rS6XQUoE1AYcLloTDw1xd9BPqCDfwvgFfgB27QD9ygH7jB/2MKvwXZez+M9nkbAAAAAElFTkSuQmCC\"/>
    <span class=\"sf-toolbar-value\">{{ '%0.0f'|format(collector.totalTime * 1000) }}</span>
    <span class=\"sf-toolbar-label\">ms</span>
    {% endset %}
    {% set text %}
    <div class=\"sf-toolbar-info-piece\">
        <b>Hydrations</b>
        <span class=\"sf-toolbar-status\">{{ collector.hydrationCount }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Hydration time</b>
        <span>{{ '%0.2f'|format(collector.hydrationTime * 1000) }} ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Hydrated entities</b>
        <span class=\"sf-toolbar-status\">{{ collector.hydratedEntities }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b><abbr title=\"The number of calls. ClassMetadataFactory::getAllMetadata: {{ collector.stats.getAllMetadata.count }}, ClassMetadataFactory::getMetadataFor: {{ collector.stats.getMetadataFor.count }}, ClassMetadataFactory::isTransient: {{ collector.stats.isTransient.count }}\">Metadata</abbr></b>
        <span class=\"sf-toolbar-status\">{{ collector.stats.metadata.count }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b><abbr title=\"ClassMetadataFactory::getAllMetadata: {{ '%0.2f'|format(collector.stats.getAllMetadata.time * 1000) }} ms, ClassMetadataFactory::getMetadataFor: {{ '%0.2f'|format(collector.stats.getMetadataFor.time * 1000) }} ms, ClassMetadataFactory::isTransient: {{ '%0.2f'|format(collector.stats.isTransient.time * 1000) }} ms\">Metadata time</abbr></b>
        <span>{{ '%0.2f'|format(collector.stats.metadata.time * 1000) }} ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Persists</b>
        <span class=\"sf-toolbar-status\">{{ collector.stats.persist.count }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Persist time</b>
        <span>{{ '%0.2f'|format(collector.stats.persist.time * 1000) }} ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Detaches</b>
        <span class=\"sf-toolbar-status\">{{ collector.stats.detach.count }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Detach time</b>
        <span>{{ '%0.2f'|format(collector.stats.detach.time * 1000) }} ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Merges</b>
        <span class=\"sf-toolbar-status\">{{ collector.stats.merge.count }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Merge time</b>
        <span>{{ '%0.2f'|format(collector.stats.merge.time * 1000) }} ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Removes</b>
        <span class=\"sf-toolbar-status\">{{ collector.stats.remove.count }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Remove time</b>
        <span>{{ '%0.2f'|format(collector.stats.remove.time * 1000) }} ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Refreshes</b>
        <span class=\"sf-toolbar-status\">{{ collector.stats.refresh.count }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Refresh time</b>
        <span>{{ '%0.2f'|format(collector.stats.refresh.time * 1000) }} ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Flushes</b>
        <span class=\"sf-toolbar-status\">{{ collector.stats.flush.count }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Flush time</b>
        <span>{{ '%0.2f'|format(collector.stats.flush.time * 1000) }} ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b><abbr title=\"The total time of all monitored ORM hydrations, operations and metadata retrieving. The time of hidrations and operations includes the time of metadata retrieving used there.\">Total time</abbr></b>
        <span>{{ '%0.2f'|format(collector.totalTime * 1000) }} ms</span>
    </div>
    {% endset %}
    {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } %}
{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOwQAADsEBuJFr7QAAABh0RVh0U29mdHdhcmUAcGFpbnQubmV0IDQuMC41ZYUyZQAAAqdJREFUSEu9lslvEmEYh7EHEpdWvXjy0n9CL4bVE+GkBwkR6EHDIglKDx7RUNIDSwynmtjELRo5GFMNS9jbGNIoskYCF+NBD5JIwKWHtjP+3glDEIelTOVLnvbLxzfv05f5deaTxGKxdY1Gs03I5XKWMBgMbqPReI5lWclBoGvoWr4OX5ccEppgQ5P/kJhGwkPXDtRqkoMT0QL9JUIXioHvjhPpdDrOPLjpsKDa5OiJJBj0QS6Xu1QqlZ5WKpU6aIM9wAqwA7aw91axWLwAFhuNxkK1WpWizhzVotETabXav0SRSOQ98GUymeV8Pr+KYm/K5XIeFIcBWRKsQXKjUCgoID3TLyLHP6JoNMpA9BN8jMfjKx6P57rdbneBlXFYrdY7er1+GTWvTSJiCYj2IYouLS29VCgU32Qy2Y9xqNVqDppTLSAdJdrtiphkMrlpNptTSqXyN+0ZB41AIMCqVCqaShiGmad1QREED8Ph8FfI9lOp1JbFYslMKiKJyWRisZ8TgZO0PqwjO7gCniAQrw8i6mcS0Rd09QhcRHrO45/u+bSikV8dRJS6XfAZ9+guYnu7Vqsl6vX6u0lBxJ91RUdHifjUMYlEIu50OsMiUndiZEe86BBSt0DrgiIIyuAX+L+pw7vjKjpaQ8S30+n0K5vNlhQRhuEdQfQW3XghcmWz2Ztut/u+CNHwMNC9QUdtUMJXtxoMBu95vd6yz+f75Pf7J8Llcn3oio4PFVEQuuzhWRdzOBwb06ZuXBh6qUNHmwjD1KkDp2l9WEc0vuMekUhs6k7RuqAIYViExISONiCKiHzWHaM5Jxp8lYMjoVBICtlZvGFleDI8FiGao7ngmaF/NJvN+Vardbndbj/odDov8Ds0IdyJikZPNLPjFv2YyQFyNkfi2Pofu0Bt+h/LrYUAAAAASUVORK5CYII=\" alt=\"\"/></span>
    <strong>Doctrine ORM</strong>
</span>
{% endblock %}

{% block panel %}
    {{ block('stats') }}
    {{ block('hydrations') }}
{% endblock %}

{% block stats %}
    <h2>ORM Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ '%0.2f'|format(collector.totalTime * 1000) }} ms</span>
            <span class=\"label\"><abbr title=\"The total time of all monitored ORM hydrations, operations and metadata retrieving. The time of hidrations and operations includes the time of metadata retrieving used there.\">Total time</abbr></span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ collector.hydrationCount }}</span>
            <span class=\"label\">Hydrations</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ '%0.2f'|format(collector.hydrationTime * 1000) }} ms</span>
            <span class=\"label\"><abbr title=\"The total time of all monitored ORM hydrations. This time includes the time of metadata retrieving used inside hydrations.\">Hydration time</abbr></span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ collector.hydratedEntities }}</span>
            <span class=\"label\">Hydrated entities</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ collector.stats.metadata.count }}</span>
            <span class=\"label\">Metadata calls</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ '%0.2f'|format(collector.stats.metadata.time * 1000) }} ms</span>
            <span class=\"label\">Metadata time</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ '%0.2f'|format((collector.stats.persist.time + collector.stats.detach.time + collector.stats.merge.time + collector.stats.remove.time + collector.stats.refresh.time + collector.stats.flush.time) * 1000) }} ms</span>
            <span class=\"label\"><abbr title=\"The total time of all monitored ORM operations, such as persist, flush, detach, merge, remove and refresh. This time includes the time of metadata retrieving used inside operations.\">Operations time</abbr></span>
        </div>
    </div>

    <h3>Metadata</h3>

    <table>
        <thead>
            <tr>
                <th style=\"width: 100%;\">Operation</th>
                <th class=\"nowrap\" style=\"min-width: 7em;\">Calls</th>
                <th class=\"nowrap\" style=\"min-width: 7em;\">Time</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>GetAllMetadata</td>
                <td>{{ collector.stats.getAllMetadata.count }}</td>
                <td>{{ '%0.2f'|format(collector.stats.getAllMetadata.time * 1000) }} ms</td>
            </tr>
            <tr>
                <td>GetMetadataFor</td>
                <td>{{ collector.stats.getMetadataFor.count }}</td>
                <td>{{ '%0.2f'|format(collector.stats.getMetadataFor.time * 1000) }} ms</td>
            </tr>
            <tr>
                <td>IsTransient</td>
                <td>{{ collector.stats.isTransient.count }}</td>
                <td>{{ '%0.2f'|format(collector.stats.isTransient.time * 1000) }} ms</td>
            </tr>
        </tbody>
    </table>

    <h3>Operations</h3>

    <table>
        <thead>
            <tr>
                <th style=\"width: 100%;\">Operation</th>
                <th class=\"nowrap\" style=\"min-width: 7em;\">Calls</th>
                <th class=\"nowrap\" style=\"min-width: 7em;\">Time</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Persist</td>
                <td>{{ collector.stats.persist.count }}</td>
                <td>{{ '%0.2f'|format(collector.stats.persist.time * 1000) }} ms</td>
            </tr>
            <tr>
                <td>Detach</td>
                <td>{{ collector.stats.detach.count }}</td>
                <td>{{ '%0.2f'|format(collector.stats.detach.time * 1000) }} ms</td>
            </tr>
            <tr>
                <td>Merge</td>
                <td>{{ collector.stats.merge.count }}</td>
                <td>{{ '%0.2f'|format(collector.stats.merge.time * 1000) }} ms</td>
            </tr>
            <tr>
                <td>Remove</td>
                <td>{{ collector.stats.remove.count }}</td>
                <td>{{ '%0.2f'|format(collector.stats.remove.time * 1000) }} ms</td>
            </tr>
            <tr>
                <td>Refresh</td>
                <td>{{ collector.stats.refresh.count }}</td>
                <td>{{ '%0.2f'|format(collector.stats.refresh.time * 1000) }} ms</td>
            </tr>
            <tr>
                <td>Flush</td>
                <td>{{ collector.stats.flush.count }}</td>
                <td>{{ '%0.2f'|format(collector.stats.flush.time * 1000) }} ms</td>
            </tr>
        </tbody>
    </table>

{% endblock stats %}

{% block hydrations %}
    <h2>Hydrations</h2>

    {% if collector.hydrations is empty %}
        <div class=\"empty\">
            <p>No hydrations.</p>
        </div>
    {% else %}
        <table class=\"alt\" id=\"hydrationsPlaceholder\">
            <thead>
            <tr>
                <th onclick=\"javascript:sortTable(this, 0, 'hydrations')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span>&#9650;</span></th>
                <th onclick=\"javascript:sortTable(this, 1, 'hydrations')\" style=\"cursor: pointer;\">Time<span></span></th>
                <th onclick=\"javascript:sortTable(this, 2, 'hydrations')\" style=\"cursor: pointer;\">Entities<span></span></th>
                <th>Type</th>
                <th>Alias Map</th>
            </tr>
            </thead>
            <tbody id=\"hydrations\">
            {% for i, hydration in collector.hydrations %}
                <tr id=\"hydrationNo-{{ i }}\" class=\"{{ cycle(['odd', 'even'], i) }}\">
                    <td>{{ loop.index }}</td>
                    <td>{% if hydration.time is defined %}
                            {{ '%0.2f'|format(hydration.time * 1000) }}&nbsp;ms
                        {% else %}
                            Unknown
                        {% endif %}
                    </td>
                    <td>{% if hydration.resultCount is defined %}{{ hydration.resultCount }}{% else %}Unknown{% endif %}</td>
                    <td>{% if hydration.type is defined %}{{ hydration.type }} {% else %}Unknown{% endif %}</td>
                    <td>
                        {% if hydration.aliasMap is defined %}
                        <ul>
                            {% for alias, class in hydration.aliasMap %}
                                <li>{{ alias }} => {{ class }}</li>
                            {% endfor %}
                        </ul>
                        {% else %}Unknown{% endif %}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <style>
            table li {
                margin-bottom: 0px;
            }
        </style>

        <script>//<![CDATA[

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '&#9650;' : '&#9660;';

            items.sort(function(a, b) {
                return direction*(parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

    //]]></script>
    {% endif %}

{% endblock hydrations %}
", "@OroEntity/Collector/orm.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EntityBundle/Resources/views/Collector/orm.html.twig");
    }
}
