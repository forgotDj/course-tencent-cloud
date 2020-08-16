{% extends 'templates/error.volt' %}

{% block content %}
    <div class="layui-fluid">
        <div class="kg-tips">
            <i class="layui-icon layui-icon-face-surprised"></i>
            <div class="message">{{ message }}</div>
            <div class="layui-text">
                <h1>
                    <span class="layui-anim layui-anim-loop">5</span>
                    <span class="layui-anim layui-anim-loop layui-anim-rotate">0</span>
                    <span class="layui-anim layui-anim-loop">3</span>
                </h1>
            </div>
        </div>
    </div>
{% endblock %}