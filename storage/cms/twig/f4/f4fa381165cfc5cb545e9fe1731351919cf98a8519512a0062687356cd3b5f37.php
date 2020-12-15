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

/* C:\xampp\htdocs\tdh/plugins/indikator/news/components/posts/default.htm */
class __TwigTemplate_7abc6bbebc34496e3d2c27dfee7445498090bb624d4d164ad06d48aa376c3c59 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("set" => 1, "for" => 4, "if" => 6);
        $filters = array("escape" => 6, "media" => 6, "date" => 9, "page" => 13, "raw" => 19);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'media', 'date', 'page', 'raw'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- ";
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", [], "any", false, false, true, 1);
        // line 2
        echo "
<div class=\"post-list\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "    <div class=\"post-item\">
        ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, true, 6)) {
                echo "<div class=\"post-image\"><a href=\"/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["postPage"] ?? null), 6, $this->source), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
                echo "\"><img src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, true, 6), 6, $this->source));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
                echo "\"></a></div>";
            }
            // line 7
            echo "
        <h2 class=\"post-title\"><a href=\"/";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["postPage"] ?? null), 8, $this->source), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "</a></h2>
        <p class=\"post-date\">";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 9), 9, $this->source), "Y-m-d"), "html", null, true);
            echo "</p>
        ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, $context["post"], "tags", [], "any", false, false, true, 10)) {
                // line 11
                echo "        <p class=\"post-tags\">Tags:
            ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "tags", [], "any", false, false, true, 12));
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
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 13
                    echo "            <a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
                    echo "/tag/";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["tag"], 13, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["tag"], 13, $this->source), "html", null, true);
                    echo "</a>";
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 13)) {
                        echo ",";
                    }
                    // line 14
                    echo "            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "        </p>
        ";
            }
            // line 17
            echo "
        ";
            // line 18
            if (twig_get_attribute($this->env, $this->source, $context["post"], "introductory", [], "any", false, false, true, 18)) {
                // line 19
                echo "        <div class=\"post-introductory\">";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "introductory", [], "any", false, false, true, 19), 19, $this->source);
                echo "</div>
        ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 20
$context["post"], "content", [], "any", false, false, true, 20)) {
                // line 21
                echo "        <div class=\"post-content\">";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, true, 21), 21, $this->source);
                echo "</div>
        ";
            }
            // line 23
            echo "    </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "    <span class=\"post-nodata\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noPostsMessage"] ?? null), 25, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</div>

";
        // line 29
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "render", [], "any", false, false, true, 29), 29, $this->source);
        echo " -->
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/plugins/indikator/news/components/posts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 29,  188 => 27,  179 => 25,  173 => 23,  167 => 21,  165 => 20,  160 => 19,  158 => 18,  155 => 17,  151 => 15,  137 => 14,  126 => 13,  109 => 12,  106 => 11,  104 => 10,  100 => 9,  92 => 8,  89 => 7,  77 => 6,  74 => 5,  69 => 4,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- {% set posts = __SELF__.posts %}

<div class=\"post-list\">
    {% for post in posts %}
    <div class=\"post-item\">
        {% if post.image %}<div class=\"post-image\"><a href=\"/{{ postPage }}/{{ post.slug }}\"><img src=\"{{ post.image|media }}\" alt=\"{{ post.title }}\"></a></div>{% endif %}

        <h2 class=\"post-title\"><a href=\"/{{ postPage }}/{{ post.slug }}\">{{ post.title }}</a></h2>
        <p class=\"post-date\">{{ post.published_at|date('Y-m-d') }}</p>
        {% if post.tags %}
        <p class=\"post-tags\">Tags:
            {% for tag in post.tags %}
            <a href=\"{{ 'blog'|page }}/tag/{{ tag }}\">{{ tag }}</a>{% if not loop.last %},{% endif %}
            {% endfor %}
        </p>
        {% endif %}

        {% if post.introductory %}
        <div class=\"post-introductory\">{{ post.introductory|raw }}</div>
        {% elseif post.content %}
        <div class=\"post-content\">{{ post.content|raw }}</div>
        {% endif %}
    </div>
    {% else %}
    <span class=\"post-nodata\">{{ noPostsMessage }}</span>
    {% endfor %}
</div>

{{ posts.render|raw }} -->
", "C:\\xampp\\htdocs\\tdh/plugins/indikator/news/components/posts/default.htm", "");
    }
}
