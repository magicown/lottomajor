<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$skin_url.'/style.css" media="screen">', 0);

if($header_skin)
	include_once('./header.php');

?>

<link rel="stylesheet" type="text/css" href="/css/skin/default.css">
<link rel="stylesheet" type="text/css" href="/css/skin/contents.css">
<link rel="stylesheet" type="text/css" href="/css/skin/common.css">
<style>
    th,td { text-align: center;}
</style>


<div class="panel" style="margin-top:20px;">
    <div class="table-responsive">
        <div class="heading-title heading-line-single">
            <h4>로또메이저 <span class="text-info">번호갯수별 완전조합수</span></h4>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>

            </tr>
            <tr class="success">
                <th>갯수</th>
                <th>조합수</th>
                <th>갯수</th>
                <th>조합수</th>
                <th>갯수</th>
                <th>조합수</th>
                <th>갯수</th>
                <th>조합수</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="td_col_1">6</td>
                <td>1</td>
                <td class="td_col_1">16</td>
                <td>8,008</td>
                <td class="td_col_1">26</td>
                <td>230,230</td>
                <td class="td_col_1">36</td>
                <td>1,947,792</td>
            </tr>
            <tr>
                <td class="td_col_1">7</td>
                <td>7</td>
                <td class="td_col_1">17</td>
                <td>12,376</td>
                <td class="td_col_1">27</td>
                <td>296,010</td>
                <td class="td_col_1">37</td>
                <td>2,324,784</td>
            </tr>
            <tr>
                <td class="td_col_1">8</td>
                <td>28</td>
                <td class="td_col_1">18</td>
                <td>18,564</td>
                <td class="td_col_1">28</td>
                <td>376,740</td>
                <td class="td_col_1">38</td>
                <td>2,760,681</td>
            </tr>
            <tr>
                <td class="td_col_1">9</td>
                <td>84</td>
                <td class="td_col_1">19</td>
                <td>27,132</td>
                <td class="td_col_1">29</td>
                <td>475,020</td>
                <td class="td_col_1">39</td>
                <td>3,262,623</td>
            </tr>
            <tr>
                <td class="td_col_1">10</td>
                <td>210</td>
                <td class="td_col_1">20</td>
                <td>38,760</td>
                <td class="td_col_1">30</td>
                <td>593,775</td>
                <td class="td_col_1">40</td>
                <td>3,838,380</td>
            </tr>
            <tr>
                <td class="td_col_1">11</td>
                <td>462</td>
                <td class="td_col_1">21</td>
                <td>54,264</td>
                <td class="td_col_1">31</td>
                <td>736,281</td>
                <td class="td_col_1">41</td>
                <td>4,496,388</td>
            </tr>
            <tr>
                <td class="td_col_1">12</td>
                <td>924</td>
                <td class="td_col_1">22</td>
                <td>74,613</td>
                <td class="td_col_1">32</td>
                <td>906,192</td>
                <td class="td_col_1">42</td>
                <td>5,245,786</td>
            </tr>
            <tr>
                <td class="td_col_1">13</td>
                <td>1,716</td>
                <td class="td_col_1">23</td>
                <td>100,947</td>
                <td class="td_col_1">33</td>
                <td>1,107,568</td>
                <td class="td_col_1">43</td>
                <td>6,096,454</td>
            </tr>
            <tr>
                <td class="td_col_1">14</td>
                <td>3,003</td>
                <td class="td_col_1">24</td>
                <td>134,596</td>
                <td class="td_col_1">34</td>
                <td>1,344,904</td>
                <td class="td_col_1">44</td>
                <td>7,059,052</td>
            </tr>
            <tr>
                <td class="td_col_1">15</td>
                <td>5,005</td>
                <td class="td_col_1">25</td>
                <td>177,100</td>
                <td class="td_col_1">35</td>
                <td>1,623,160</td>
                <td class="td_col_1">45</td>
                <td>8,145,060</td>
            </tr>
            </tbody>
        </table>
        <div class="heading-title heading-line-single margin-top-30">
            <h4>로또메이저 <span class="text-info">등수별 당첨확률</span></h4>
        </div>
        <table class="table table-bordered table-striped">
            <tbody><tr class="warning">
                <th>등수</th>
                <th>당첨 갯수</th>
                <th>경우의 수</th>
                <th>당첨확률</th>
            </tr>
            <tr>
                <td>1등</td>
                <td class="td_col_3">당첨볼 6개</td>
                <td>1</td>
                <td>8,145,060:1</td>
            </tr>
            <tr>
                <td>2등</td>
                <td class="td_col_3">당첨볼 5개+보너스번호</td>
                <td>6</td>
                <td>1,357,510:1</td>
            </tr>
            <tr>
                <td>3등</td>
                <td class="td_col_3">당첨볼 5개</td>
                <td>228</td>
                <td>35,724:1</td>
            </tr>
            <tr>
                <td>4등</td>
                <td class="td_col_3">당첨볼 4개</td>
                <td>11,109</td>
                <td>733:1</td>
            </tr>
            <tr>
                <td>5등</td>
                <td class="td_col_3">당첨볼 3개</td>
                <td>182,774</td>
                <td>45:1</td>
            </tr>
            <tr>
                <td>-</td>
                <td class="td_col_3">당첨볼 2개</td>
                <td>1,233,759</td>
                <td>6.6:1</td>
            </tr>
            <tr>
                <td>-</td>
                <td class="td_col_3">당첨볼 1개</td>
                <td>3,454,536</td>
                <td>2.4:1</td>
            </tr>
            <tr>
                <td>-</td>
                <td class="td_col_3">당첨볼 0개</td>
                <td>3,262,623</td>
                <td>2.5:1</td>
            </tr>
            </tbody></table>
        <div class="heading-title heading-line-single margin-top-30">
            <h4>로또메이저 <span class="text-info">총합별 조합수</span></h4>
        </div>

        <table class="table table-bordered table-striped">
            <tbody><tr class="danger">
                <th>조합의 합</th>
                <th>해당 조합수</th>
            </tr>
            <tr>
                <td>21(최소)</td>
                <td>1</td>
            </tr>
            <tr>
                <td>100</td>
                <td>50,236</td>
            </tr>
            <tr>
                <td>106</td>
                <td>62,621</td>
            </tr>
            <tr>
                <td>138(평균)</td>
                <td>105.690</td>
            </tr>
            <tr>
                <td>170</td>
                <td>62,621</td>
            </tr>
            <tr>
                <td>178</td>
                <td>50,236</td>
            </tr>
            <tr>
                <td>255(최대)</td>
                <td>1</td>
            </tr>
            <tr>
                <td class="td_col_2">합계</td>
                <td class="td_col_2">8,145,060</td>
            </tr>
            </tbody></table>

       

        <div class="heading-title heading-line-single margin-top-30">
            <h4>로또메이저 <span class="text-info">저고별 조합수</span></h4>
        </div>
        <table class="table table-bordered table-striped">
            <tbody><tr class="success">
                <th>낮은 수(저)</th>
                <th>높은 수(고)</th>
                <th>조합수</th>
                <th>비율(%)</th>
            </tr>
            <tr>
                <td>0</td>
                <td>6</td>
                <td>100,947</td>
                <td>1.24%</td>
            </tr>
            <tr>
                <td>1</td>
                <td>5</td>
                <td>740,278</td>
                <td>9.09%</td>
            </tr>
            <tr>
                <td>2</td>
                <td>4</td>
                <td>2,045,505</td>
                <td>25.11%</td>
            </tr>
            <tr>
                <td>3</td><td>3</td>
                <td>2,727,340</td>
                <td>33.48%</td>
            </tr>
            <tr>
                <td>4</td>
                <td>2</td>
                <td>1,850,695</td>
                <td>22.72%</td>
            </tr>
            <tr>
                <td>5</td>
                <td>1</td>
                <td>605,682</td>
                <td>7.44%</td>
            </tr>
            <tr>
                <td>6</td>
                <td>0</td>
                <td>74,613</td>
                <td>0.92%</td>
            </tr>
            <tr>
                <td colspan="2" class="td_col_2">합계</td>
                <td class="td_col_2">8,145,060개</td>
                <td class="td_col_2">100%</td>
            </tr>
            </tbody></table>

        <div class="heading-title heading-line-single margin-top-30">
            <h4>로또메이저 <span class="text-info">끝수별 조합수</span></h4>
        </div>
        <table class="table table-bordered table-striped">
            <tbody><tr class="warning">
                <th>끝수 형태</th>
                <th>조합수</th>
                <th>비율(%)</th>
            </tr>
            <tr>
                <td class="td_col_3">끝수가 모두 다른 경우</td>
                <td>1,708,100</td>
                <td>20.9%</td>
            </tr>
            <tr>
                <td class="td_col_3">2개의 끝수가 같은 경우</td>
                <td>5,708,120</td>
                <td>70.0%</td>
            </tr>
            <tr>
                <td class="td_col_3">3개의 끝수가 같은 경우</td>
                <td>705,040</td>
                <td>8.6%</td>
            </tr>
            <tr>
                <td class="td_col_3">4개의 끝수가 같은 경우</td>
                <td>23,600</td>
                <td>0.3%</td>
            </tr>
            <tr>
                <td class="td_col_3">5개의 끝수가 같은 경우</td>
                <td>200</td>
                <td>-</td>
            </tr>
            <tr>
                <td class="td_col_3">6개의 끝수가 같은 경우</td>
                <td>0</td>
                <td>0%</td>
            </tr>
            </tbody></table>
    </div>
</div>