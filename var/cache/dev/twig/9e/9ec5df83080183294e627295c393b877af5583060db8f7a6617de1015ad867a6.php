<?php

/* skill/show.html.twig */
class __TwigTemplate_3e58d029ad098975dfac6f6853fe2d36e3bc320e72e84e015b7cf9dd3ac991b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "skill/show.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "skill/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Skill</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Symfony</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "symfony", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Java</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "java", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Angular</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "angular", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Php</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "pHP", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Html</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "html", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>C</th>
                <td>";
        // line 34
        if ($this->getAttribute((isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "c", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Ajax</th>
                <td>";
        // line 38
        if ($this->getAttribute((isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "ajax", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Css</th>
                <td>";
        // line 42
        if ($this->getAttribute((isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "css", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Linux</th>
                <td>";
        // line 46
        if ($this->getAttribute((isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "linux", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>J2ee</th>
                <td>";
        // line 50
        if ($this->getAttribute((isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "j2EE", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("skill_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("skill_edit", array("id" => $this->getAttribute((isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 63
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 65
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "skill/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 65,  180 => 63,  174 => 60,  168 => 57,  154 => 50,  143 => 46,  132 => 42,  121 => 38,  110 => 34,  99 => 30,  88 => 26,  77 => 22,  66 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Skill</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ skill.id }}</td>
            </tr>
            <tr>
                <th>Symfony</th>
                <td>{% if skill.symfony %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Java</th>
                <td>{% if skill.java %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Angular</th>
                <td>{% if skill.angular %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Php</th>
                <td>{% if skill.pHP %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Html</th>
                <td>{% if skill.html %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>C</th>
                <td>{% if skill.c %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Ajax</th>
                <td>{% if skill.ajax %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Css</th>
                <td>{% if skill.css %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Linux</th>
                <td>{% if skill.linux %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>J2ee</th>
                <td>{% if skill.j2EE %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('skill_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('skill_edit', { 'id': skill.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "skill/show.html.twig", "C:\\wamp\\www\\khairi_pfe\\app\\Resources\\views\\skill\\show.html.twig");
    }
}
