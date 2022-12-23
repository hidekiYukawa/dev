@props(['realEstateObject'])
<nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/properties">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="/properties">Properties</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            {{$realEstateObject->object_title}}
        </li>
    </ol>
</nav>
