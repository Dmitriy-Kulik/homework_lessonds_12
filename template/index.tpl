{extends file="layout.tpl"}
{block name=table}
    <table border="3">
        <thead>
            {foreach $arrGall as $key=>$row}
                <th>{$key}</th>
            {/foreach}
        </thead>
        <tbody>
            <tr>
                {foreach $arrGall as $row}
                    <td><img src='{$row}' width='200px'>
                    </td>
                {/foreach}
            </tr>
        </tbody>
    </table>
    <div class="fileInDir">
        <h4>Список файлов в папке Jpg:</h4>
        {foreach $arrNameFileInDirJpg as $key=>$row}
            {if count($arrNameFileInDirJpg) < 3}
                <span>В этой папке нет файлов</span>
                {break}
            {else}
                {if $row != '.' && $row != '..'}
                    <span>{$key-1}. {$row}</span><br>
                {/if}
            {/if}
        {/foreach}

    </div>
    <div class="fileInDir">
        <h4>Список файлов в папке Pdf:</h4>
        {foreach $arrNameFileInDirPdf as $key=>$row}
            {if count($arrNameFileInDirPdf) < 3}
                <span>В этой папке нет файлов</span>
                {break}
            {else}
                {if $row != '.' && $row != '..'}
                    <span>{$key-1}. {$row}</span><br>
                {/if}
            {/if}
        {/foreach}

    </div>
    <div class="fileInDir">
        <h4>Список файлов в папке Doc:</h4>
        {foreach $arrNameFileInDirDoc as $key=>$row}
            {if count($arrNameFileInDirDoc) < 3}
                <span>В этой папке нет файлов</span>
                {break}
            {else}
                {if $row != '.' && $row != '..'}
                    <span>{$key-1}. {$row}</span><br>
                {/if}
            {/if}
        {/foreach}

    </div>
{/block}
