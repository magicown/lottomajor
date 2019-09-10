<?php
$sub_menu = "200150";
include_once('./_common.php');
include_once('./admin.head.php');
include_once(G5_PLUGIN_PATH.'/jquery-ui/datepicker.php');
auth_check($auth[$sub_menu], 'r');

$sql_common = " from g5_member_memo ";

$sql_search = " where (1) ";

if ($stx) {
    $sql_search .= " and ( ";
    switch ($sfl) {
        case 'mb_id' :
            $sql_search .= " ({$sfl} = '{$stx}') ";
            break;
        default :
            $sql_search .= " ({$sfl} like '%{$stx}%') ";
            break;
    }
    $sql_search .= " ) ";
}

if (!$sst) {
    $sst  = "memo_regdate";
    $sod = "desc";
}
$sql_order = " order by {$sst} {$sod} ";

$sql = " select count(*) as cnt
            {$sql_common}
            {$sql_search}
            {$sql_order} ";
$row = sql_fetch($sql);
$total_count = $row['cnt'];

$rows = $config['cf_page_rows'];
$total_page  = ceil($total_count / $rows);  // 전체 페이지 계산
if ($page < 1) $page = 1; // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $rows; // 시작 열을 구함

$sql = " select *
            {$sql_common}
            {$sql_search}
            {$sql_order}
            limit {$from_record}, {$rows} ";

$result = sql_query($sql);

$sql = " select count(*) as cnt {$sql_common} {$sql_search} {$sql_order} ";

$row = sql_fetch($sql);
$total_count = $row['cnt'];

$rows = $config['cf_page_rows'];
$total_page  = ceil($total_count / $rows);  // 전체 페이지 계산
if ($page < 1) $page = 1; // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $rows; // 시작 열을 구함



$listall = '<a href="'.$_SERVER['SCRIPT_NAME'].'" class="ov_listall">전체목록</a>';

$mb = array();
if ($sfl == 'mb_id' && $stx)
    $mb = get_member($stx);

$g5['title'] = '회원메모관리';
include_once ('./admin.head.php');

$colspan = 9;

$po_expire_term = '';
if($config['cf_point_term'] > 0) {
    $po_expire_term = $config['cf_point_term'];
}

if (strstr($sfl, "mb_id"))
    $mb_id = $stx;
else
    $mb_id = "";
?>

<section id="anc_bo_design">
    <h2 class="h2_frm"><?php echo $_REQUEST['mb_name']; ?>(<?php echo $_REQUEST['mb_id']; ?>)님에 대한 메모 남기기</h2>
    <?php echo $pg_anchor ?>

    <div class="tbl_frm01 tbl_wrap">
        <table>
            <caption>게시판 디자인/양식</caption>
            <colgroup>
                <col class="grid_4">
                <col>
                <col class="grid_3">
            </colgroup>
            <tbody>
            <tr>
                <th scope="row"><label for="bo_skin">메모내용<strong class="sound_only">필수</strong></label></th>
                <td>
                    <textarea name="memo" id="message-text" rows="20"></textarea>
                </td>
            </tr>
            <tr>
                <th scope="row"><label for="bo_mobile_skin">입금예정일<strong class="sound_only">필수</strong></label></th>
                <td>
                    <input type="text" name="pay_date" id="pay_date" value="">
                </td>
            </tr>
            <tr>
                <th scope="row"><label for="bo_mobile_skin">관리<strong class="sound_only">필수</strong></label></th>
                <td>
                    <input type="button" name="act_button" value="회원정보로 이동" onclick="location.href='./member_list.php';" class="btn btn_02">
                    <input type="button" value="메모저장" class="btn_submit btn save-memo" data-mb_id="<?php echo $_REQUEST['mb_id']; ?>">
                </td>
            </tr>
        </table>
    </div>
    <?php if(USE_G5_THEME) { ?>
        <button type="button" class="get_theme_galc btn btn_02" >테마 이미지설정 가져오기</button>
    <?php } ?>
</section>

<div class="local_ov01 local_ov">
    <?php echo $listall ?>
    <span class="btn_ov01"><span class="ov_txt">전체 </span><span class="ov_num"> <?php echo number_format($total_count) ?> 건 </span></span>

</div>

<form name="fsearch" id="fsearch" class="local_sch01 local_sch" method="get">
<label for="sfl" class="sound_only">검색대상</label>
<select name="sfl" id="sfl">
    <option value="mb_id"<?php echo get_selected($_GET['sfl'], "mb_id"); ?>>회원아이디</option>
    <option value="po_content"<?php echo get_selected($_GET['sfl'], "po_content"); ?>>내용</option>
</select>
<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
<input type="text" name="stx" value="<?php echo $stx ?>" id="stx" required class="required frm_input">
<input type="submit" class="btn_submit" value="검색">
</form>

<form name="fpointlist" id="fpointlist" method="post" action="./point_list_delete.php" onsubmit="return fpointlist_submit(this);">
<input type="hidden" name="sst" value="<?php echo $sst ?>">
<input type="hidden" name="sod" value="<?php echo $sod ?>">
<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
<input type="hidden" name="stx" value="<?php echo $stx ?>">
<input type="hidden" name="page" value="<?php echo $page ?>">
<input type="hidden" name="token" value="">

<div class="tbl_head01 tbl_wrap">
    <table>
    <caption><?php echo $g5['title']; ?> 목록</caption>
    <thead>
    <tr>
        <th scope="col" style="width:3%;">
            <label for="chkall" class="sound_only">회원 전체</label>
            <input type="checkbox" name="chkall" value="1" id="chkall" onclick="check_all(this.form)">
        </th>
        <th scope="col">번호</a></th>
        <th scope="col">작성자</th>
        <th scope="col" style="width:15%;">고객정보</th>
        <th scope="col">메모내용</a></th>
        <th scope="col" style="width:12%;">알림설정</a></th>
        <th scope="col" style="width:12%;">기록일시</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for ($i=0; $row=sql_fetch_array($result); $i++) {

        if ($i==0 || ($row2['mb_id'] != $row['mb_id'])) {
            $sql2 = " select mb_id, mb_name, mb_nick, mb_email, mb_homepage, mb_point from {$g5['member_table']} where mb_id = '{$row['mb_id']}' ";
            $row2 = sql_fetch($sql2);
        }

        //$mb_nick = get_sideview($row['mb_id'], $row2['mb_nick'], $row2['mb_email'], $row2['mb_homepage']);
        $mb = getMemberInfo($row['writer_id']);
        $link1 = $link2 = '';
        if (!preg_match("/^\@/", $row['po_rel_table']) && $row['po_rel_table']) {
            $link1 = '<a href="'.G5_BBS_URL.'/board.php?bo_table='.$row['po_rel_table'].'&amp;wr_id='.$row['po_rel_id'].'" target="_blank">';
            $link2 = '</a>';
        }

        $expr = '';
        if($row['po_expired'] == 1)
            $expr = ' txt_expired';

        $bg = 'bg'.($i%2);
    ?>

    <tr class="<?php echo $bg; ?>">
        <td class="td_center">
            <input type="checkbox" name="chk[]" value="<?php echo $row[memo_idx] ?>" id="chk_<?php echo $i ?>">
        </td>
        <td class="td_center"><?php echo $total_count-$i;  ?></td>
        <td class="td_center"><?php echo $mb['mb_name']; ?></td>
        <td class="td_center"><a href="/adm/member_form.php?sst=&sod=&sfl=&stx=&page=&w=u&mb_id=<?php echo $row['mb_id'];?>"><?php echo $row['mb_id']." (".get_text($row2['mb_name']).")"; ?></a></td>
        <td class="td_left"><?php echo nl2br($row['memo_content']); ?></td>
        <td class="td_datetime2"><?php echo ($row['memo_pay_date']!='0000-00-00')?$row['memo_pay_date']:''; ?></td>
        <td class="td_datetime2"><?php echo $row['memo_regdate'] ?></td>
    </tr>

    <?php

    }

    if ($i == 0)
        echo '<tr><td colspan="'.$colspan.'" class="empty_table">자료가 없습니다.</td></tr>';
    ?>
    </tbody>
    </table>
</div>
    <div class="btn_confirm01 btn_confirm">
        <input type="button" value="선택삭제" class="btn_submit btn" id="del_select">
    </div>
</form>

<?php echo get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, "{$_SERVER['SCRIPT_NAME']}?$qstr&amp;page="); ?>



<script>
    $(document).ready(function(){
        $("#del_select").on("click", function() {
            var idx = new Array();

            var cnt = 0;
            $("input[type='checkbox']").each(function(){
               if($(this).is(':checked')==true){
                   idx[cnt] = $(this).val();
                   cnt++;
               }
            });

            $.ajax({
                type: "POST",
                url: "./member_proc.php",
                cache: false,
                async: false,
                data: { mode : 'memberMemoDel', idx : idx },
                dataType: "json",
                success: function(data) {
                    alert(data.result);
                    location.reload(true);
                    return false;
                }
            });
        });


        $('.save-memo').on('click',function(){
            var mb_id = $(this).data("mb_id"),
                mb_memo = $('#message-text').val(),
                pay_date = $('#pay_date').val(),
                jsonurl =  "./member_proc.php";

            if(mb_id && mb_memo) {
                $.ajax({
                    type: "POST",
                    url: jsonurl,
                    dataType: "JSON",
                    data: {"mode": "writeMemo", "mb_id": mb_id, "mb_memo": mb_memo, "pay_date" : pay_date},
                    success: function (data) {
                        if (data.flag) {
                            $('.btn-default').trigger('click');
                            $('#message-text').val('');
                            location.reload(true);
                            alert('메모가 정상적으로 입력되었습니다.');
                        } else {
                        }
                    },
                    complete: function (data) {
                    },
                    error: function (xhr, status, error) {
                        var err = status + ' \r\n' + error;
                    }
                });
            } else {
                alert('회원 아이디 또는 내용이 입력되지 않았습니다.');
                return false;
            }
        })




    });
    $("#pay_date").datepicker({ changeMonth: true, changeYear: true, dateFormat: "yy-mm-dd", yearRange: "c-99:c+99" });

</script>

<?php
include_once ('./admin.tail.php');
?>
