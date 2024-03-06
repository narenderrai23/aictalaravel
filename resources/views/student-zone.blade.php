@extends('layouts.app')


@section('main')
    <!-- Teachers Area section -->
    <section class="login-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <form id="filterData" class="learnpro-register-form text-center">
                        @csrf
                        <div><img src="{{ asset('images/students-zone.png') }}" /></div>
                        <p style="color: #000000; font-size: 18px">
                            Know Your Admission/Registration Details
                        </p>
                        <div class="form-group">
                            <input autocomplete="off" class="required form-control" placeholder="Enter Enrollment No. *"
                                name="enrollment" type="text" />
                        </div>

                        <div class="form-group register-btn">
                            <button type="submit" class="btn btn-primary btn-lg">
                                SUBMIT
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- ./ End Teachers Area section -->


    <section>
        <div id="message"></div>
        <div class="container" id="enrollment">
            <div class="row">
                <div class="col-sm-2 Welcome-area-text"> </div>
                <div class="col-sm-8 Welcome-area-text">

                    <table width="100%">
                        <tr>
                            <td align="center">
                                <table width="600" cellspacing="0" style="border:solid 1px; color:#CCCCCC;">
                                    <tr>
                                        <td>
                                            <table width="600" cellspacing="0">
                                                <tr>
                                                    <td height="10" colspan="3"></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="padding-left:20px;"><img
                                                            src="images/logo-print.png" width="57" height="57" />
                                                    </td>
                                                    <td width="233"
                                                        style="text-align:center; color:#000000; font-size:18px; font-weight:800; font-family:Arial, Helvetica, sans-serif;">
                                                        ENROLLMENT DETAILS</td>
                                                    <td align="right" style="padding-right:20px;"><img
                                                            src="images/print.png" width="40" height="40" /></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="10"></td>
                                    </tr>

                                    <tr>
                                        <td height="10" align="center"></td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <table width="500" cellspacing="0">
                                                <tr>
                                                    <td width="200" align="center" valign="top">
                                                        <table width="120" cellspacing="0"
                                                            style="border:solid 1px; color:#CCCCCC;">
                                                            <tr>
                                                                <td id="profile_td">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td valign="top">
                                                        <table width="300" cellspacing="0">
                                                            <tr>
                                                                <td
                                                                    style="font-family:Arial, Helvetica, sans-serif; color:#FF0000; font-size:16px; font-weight:bold;">
                                                                    &nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td id="name"
                                                                    style="font-family:Arial, Helvetica, sans-serif; color:#FF0000; font-size:16px; font-weight:bold;">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    style="font-family:Arial, Helvetica, sans-serif; color:#000000; font-size:13px; font-weight:bold; padding-top:10px;">
                                                                    Father's Name</td>
                                                            </tr>
                                                            <tr>
                                                                <td id="fname"
                                                                    style="font-family:Arial, Helvetica, sans-serif; color:#000000; font-size:15px; font-weight:bold; padding-top:10px;">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="600" cellspacing="0" class="zone">
                                                <tr>
                                                    <td width="150" align="center" valign="top">
                                                        <table width="100" cellspacing="0">
                                                            <tr>
                                                                <td>Enrollment No</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Branch Name</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Branch Code</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td width="5" align="left" valign="top"><img
                                                            src="images/line_zone.jpg" width="1" height="100" /></td>
                                                    <td width="130" valign="top">
                                                        <table width="130" cellspacing="0">
                                                            <tr>
                                                                <td style="color:#FF0000; font-weight:bold;"
                                                                    id="EnrollmentNo"></td>
                                                            </tr>
                                                            <tr>
                                                                <td id="BrancName"></td>
                                                            </tr>
                                                            <tr>
                                                                <td id="BranchCode"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                            </tr>

                                                        </table>
                                                    </td>
                                                    <td width="10" align="left" valign="top"><img
                                                            src="images/line_zone.jpg" width="1" height="100" /></td>
                                                    <td width="100" valign="top">
                                                        <table width="80" cellspacing="0">
                                                            <tr>
                                                                <td align="center">Course</td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center">Status</td>
                                                            </tr>

                                                        </table>
                                                    </td>
                                                    <td width="10" align="left" valign="top">
                                                        <img src="images/line_zone.jpg" width="1" height="100" />
                                                    </td>
                                                    <td valign="top">
                                                        <table width="235" cellspacing="0">
                                                            <tr>
                                                                <td><strong id="Course"></strong></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="color:#FF0000; font-weight:bold;"
                                                                    id="student_status"></td>
                                                            </tr>

                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td
                                            style="font-family:Arial, Helvetica, sans-serif; font-size:11px; color:#000000; line-height:20px; padding:10px; text-align:justify;">
                                            * The displayed information is on basis of IACTA database, in case of any
                                            discrepancy please mail
                                            to <strong>aictaindia@gmail.com</strong> or inform to your center head.The
                                            moment this Enrollment
                                            Number is issued to the student, he/she becomes a certified student of IACTA.
                                            Based on your
                                            corresponding Enrollment Details, All India Computer Trainer Association will
                                            issue you an
                                            Identity Card which will be your proof of identity and you will be suppose to
                                            wear it during the
                                            training period.</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-2 Welcome-area-text"> </div>
            </div>
        </div>
    </section>
@endsection


@push('scripts')
    <script>
        $("#enrollment").hide();
        $("#filterData").on("submit", function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            formData.append("action", "detailStudent");

            $.ajax({
                url: '/get-student-details',
                type: "POST",
                data: formData,
                dataType: "json",
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);
                    if (response) {
                        $("#enrollment").show();
                        $("#message").hide();
                        $("<img>", {
                            src: "assets/upload/" + response.profile_image,
                            width: 120,
                            height: 154,
                            load: function() {
                                $(this).appendTo("#profile_td").show();
                            },
                            error: function() {
                                console.log("Image does not exist");
                                $(this).attr("src", "placeholder-image.svg");
                            }
                        }).appendTo("#profile_td").show(); // Append and show the image immediately

                        $("#EnrollmentNo").text(response.enrollment);
                        $("#BrancName").text(response.branch_name);
                        $("#BranchCode").text(response.code);
                        $("#Course").text(response.course_name);
                        $("#name").text(response.name);
                        $("#fname").text(response.father_name);
                        $("#student_status").text(response.student_status.charAt(0).toUpperCase() +
                            response.student_status.slice(1));
                    } else {
                        $("#enrollment").hide();
                        $("#message").show().text("Invalid Enrollment").addClass(
                            'text-center bg-danger text-uppercase popover-content').css({
                            color: "#fff",
                            "font-weight": "600"
                        });
                    }
                },
                error: function(xhr, status, err) {
                    console.error(
                        "Error occurred during the operation:",
                        xhr.responseText
                    );
                }
            });
        });
    </script>
@endpush
