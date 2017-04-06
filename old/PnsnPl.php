<?php
include("navbar.html");
?>
<html>

<head>
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    
    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    
    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>
<body>
    <style>
    .container {
        width: 80%;
    }
    </style>
    <div class="container">
        
        <table>
            <tr>
                <td>目前年齡</td>
                <td>
                    <select name="currentAge" id="currentAge">
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25" selected>25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                        <option value="46">46</option>
                        <option value="47">47</option>
                        <option value="48">48</option>
                        <option value="49">49</option>
                        <option value="50">50</option>
                        <option value="51">51</option>
                        <option value="52">52</option>
                        <option value="53">53</option>
                        <option value="54">54</option>
                        <option value="55">55</option>
                        <option value="56">56</option>
                        <option value="57">57</option>
                        <option value="58">58</option>
                        <option value="59">59</option>
                        <option value="60">60</option>
                    </select>
                    歲</td>
            </tr>
            <tr>
                <td>性別</td>
                <td>
                    <input type="radio" name="sexual" value="male" checked onchange="genderFunc('male')"> 男
                    <input type="radio" name="sexual" value="female" onchange="genderFunc('female')"> 女
                    <input type="hidden" name="gender" id="gender" value="male">
                </td>
            </tr>
            <tr>
                <td>職業別</td>
                <td>
                    <input type="radio" name="sexual" value="male" checked onchange="genderFunc('male')">勞工
                    <input type="radio" name="sexual" value="female" onchange="genderFunc('female')"> 公務員
                    <input type="radio" name="sexual" value="male" checked onchange="genderFunc('male')"> 公立教職
                    <input type="radio" name="sexual" value="female" onchange="genderFunc('female')"> 私立教職
                    <input type="radio" name="sexual" value="male" checked onchange="genderFunc('male')"> 軍人
                    <input type="radio" name="sexual" value="female" onchange="genderFunc('female')"> 農民
                    <input type="radio" name="sexual" value="female" onchange="genderFunc('female')"> 一般民眾
                </td>
            </tr>
            <tr>
                <td>理財目標</td>
                <td>
                    <input type="radio" name="sexual" value="male" checked onchange="genderFunc('male')"> 短期投資
                    <input type="radio" name="sexual" value="female" onchange="genderFunc('female')"> 長期規劃
                    <input type="hidden" name="gender" id="gender" value="male">
                </td>
            </tr>
        </table>
        <button type="button" onclick="caculate()">
			確定送出</button>
</body>
