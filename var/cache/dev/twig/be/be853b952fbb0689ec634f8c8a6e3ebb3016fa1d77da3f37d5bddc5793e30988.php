<?php

/* skill/index.html.twig */
class __TwigTemplate_804e1a8a3e6135cc4865b37712e37e988e79d43de56c57962e21b3f897f4db55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "skill/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "skill/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Skills list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Symfony</th>
                <th>Java</th>
                <th>Angular</th>
                <th>Php</th>
                <th>Html</th>
                <th>C</th>
                <th>Ajax</th>
                <th>Css</th>
                <th>Linux</th>
                <th>J2ee</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["skills"]) ? $context["skills"] : $this->getContext($context, "skills")));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 25
            echo "            <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("skill_show", array("id" => $this->getAttribute($context["skill"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["skill"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            if ($this->getAttribute($context["skill"], "symfony", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["skill"], "java", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 29
            if ($this->getAttribute($context["skill"], "angular", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 30
            if ($this->getAttribute($context["skill"], "pHP", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 31
            if ($this->getAttribute($context["skill"], "html", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["skill"], "c", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute($context["skill"], "ajax", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["skill"], "css", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 35
            if ($this->getAttribute($context["skill"], "linux", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 36
            if ($this->getAttribute($context["skill"], "j2EE", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("skill_show", array("id" => $this->getAttribute($context["skill"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("skill_edit", array("id" => $this->getAttribute($context["skill"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("skill_redirect");
        echo "\">Create a new skill</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "skill/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 54,  176 => 49,  164 => 43,  158 => 40,  147 => 36,  139 => 35,  131 => 34,  123 => 33,  115 => 32,  107 => 31,  99 => 30,  91 => 29,  83 => 28,  75 => 27,  69 => 26,  66 => 25,  62 => 24,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Skills list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Symfony</th>
                <th>Java</th>
                <th>Angular</th>
                <th>Php</th>
                <th>Html</th>
                <th>C</th>
                <th>Ajax</th>
                <th>Css</th>
                <th>Linux</th>
                <th>J2ee</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for skill in skills %}
            <tr>
                <td><a href=\"{{ path('skill_show', { 'id': skill.id }) }}\">{{ skill.id }}</a></td>
                <td>{% if skill.symfony %}Yes{% else %}No{% endif %}</td>
                <td>{% if skill.java %}Yes{% else %}No{% endif %}</td>
                <td>{% if skill.angular %}Yes{% else %}No{% endif %}</td>
                <td>{% if skill.pHP %}Yes{% else %}No{% endif %}</td>
                <td>{% if skill.html %}Yes{% else %}No{% endif %}</td>
                <td>{% if skill.c %}Yes{% else %}No{% endif %}</td>
                <td>{% if skill.ajax %}Yes{% else %}No{% endif %}</td>
                <td>{% if skill.css %}Yes{% else %}No{% endif %}</td>
                <td>{% if skill.linux %}Yes{% else %}No{% endif %}</td>
                <td>{% if skill.j2EE %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('skill_show', { 'id': skill.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('skill_edit', { 'id': skill.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('skill_redirect') }}\">Create a new skill</a>
        </li>
    </ul>
{% endblock %}
", "skill/index.html.twig", "C:\\wamp\\www\\khairi_pfe\\app\\Resources\\views\\skill\\index.html.twig");
    }
}
