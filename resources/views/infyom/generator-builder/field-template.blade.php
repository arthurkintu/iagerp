<td style="vertical-align: middle">
    <input type="text" style="width: 100%" required class="form-control txtFieldName" />
    <input type="text" class="form-control foreignTable txtForeignTable" style="display: none"
        placeholder="Foreign table,Primary key" />
    <div class="invalid-feedback"></div>
</td>
<td style="vertical-align: middle">
    <select class="form-control txtdbType" style="width: 100%">
        <option value="integer">Integer</option>
        <option value="smallInteger">SmallInteger</option>
        <option value="longText">LongText</option>
        <option value="bigInteger">BigInteger</option>
        <option value="double">Double</option>
        <option value="float">Float</option>
        <option value="decimal">Decimal</option>
        <option value="boolean">Boolean</option>
        <option value="string" selected>String</option>
        <option value="char">Char</option>
        <option value="text">Text</option>
        <option value="mediumText">MediumText</option>
        <option value="longText">LongText</option>
        <option value="enum">Enum</option>
        <option value="binary">Binary</option>
        <option value="dateTime">DateTime</option>
        <option value="date">Date</option>
        <option value="timestamp">Timestamp</option>
    </select>

    <input type="text" class="form-control dbValue txtDbValue" style="display: none" placeholder="" />
</td>
<td style="vertical-align: middle">
    <input type="text" class="form-control txtValidation" />
</td>
<td style="vertical-align: middle">
    <select class="form-control drdHtmlType" style="width: 100%">
        <option value="text">Text</option>
        <option value="email">Email</option>
        <option value="number">Number</option>
        <option value="date">Date</option>
        <option value="file">File</option>
        <option value="password">Password</option>
        <option value="select">Select</option>
        <option value="radio">Radio</option>
        <option value="checkbox">Checkbox</option>
        <option value="textarea">TextArea</option>
        <option value="toggle-switch">Toggle</option>
    </select>
    <input type="text" class="form-control htmlValue txtHtmlValue" style="display: none" placeholder="" />
</td>
<td style="vertical-align: middle">
    <div class="checkbox">
        <label>
            <input type="checkbox" class="flat-red chkPrimary" />
            Primary
        </label>
    </div>

    <div class="checkbox">
        <label>
            <input type="checkbox" class="flat-red chkForeign" />
            Is Foreign
        </label>
    </div>

    <div class="checkbox">
        <label>
            <input type="checkbox" class="flat-red chkSearchable" checked />
            Searchable
        </label>
    </div>

    <div class="checkbox">
        <label>
            <input type="checkbox" class="flat-red chkFillable" checked />
            Fillable
        </label>
    </div>

    <div class="checkbox">
        <label>
            <input type="checkbox" class="flat-red chkInForm" checked />
            In Form
        </label>
    </div>

    <div class="checkbox">
        <label>
            <input type="checkbox" class="flat-red chkInIndex" checked />
            In Index
        </label>
    </div>
</td>
<td style="text-align: center;vertical-align: middle">
    <i onclick="removeItem(this)" class="remove far fa-trash-alt text-danger btn"></i>
</td>
