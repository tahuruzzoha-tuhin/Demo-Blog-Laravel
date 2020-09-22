<aside class="main-sidebar">
    <section class="sidebar" style="height: auto;">
        <ul class="sidebar-menu tree" data-widget="tree">
            <li>
                <a href="{{ route("admin.home") }}">
                    <i class="fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('user_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-users">

                        </i>
                        <span>{{ trans('cruds.userManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('permission_access')
                            <li class="{{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                <a href="{{ route("admin.permissions.index") }}">
                                    <i class="fa-fw fas fa-unlock-alt">

                                    </i>
                                    <span>{{ trans('cruds.permission.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="{{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                <a href="{{ route("admin.roles.index") }}">
                                    <i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('cruds.role.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                <a href="{{ route("admin.users.index") }}">
                                    <i class="fa-fw fas fa-user">

                                    </i>
                                    <span>{{ trans('cruds.user.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('basic_c_r_m_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-briefcase">

                        </i>
                        <span>{{ trans('cruds.basicCRM.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('crm_status_access')
                            <li class="{{ request()->is("admin/crm-statuses") || request()->is("admin/crm-statuses/*") ? "active" : "" }}">
                                <a href="{{ route("admin.crm-statuses.index") }}">
                                    <i class="fa-fw fas fa-folder">

                                    </i>
                                    <span>{{ trans('cruds.crmStatus.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('crm_customer_access')
                            <li class="{{ request()->is("admin/crm-customers") || request()->is("admin/crm-customers/*") ? "active" : "" }}">
                                <a href="{{ route("admin.crm-customers.index") }}">
                                    <i class="fa-fw fas fa-user-plus">

                                    </i>
                                    <span>{{ trans('cruds.crmCustomer.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('crm_note_access')
                            <li class="{{ request()->is("admin/crm-notes") || request()->is("admin/crm-notes/*") ? "active" : "" }}">
                                <a href="{{ route("admin.crm-notes.index") }}">
                                    <i class="fa-fw fas fa-sticky-note">

                                    </i>
                                    <span>{{ trans('cruds.crmNote.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('crm_document_access')
                            <li class="{{ request()->is("admin/crm-documents") || request()->is("admin/crm-documents/*") ? "active" : "" }}">
                                <a href="{{ route("admin.crm-documents.index") }}">
                                    <i class="fa-fw fas fa-folder">

                                    </i>
                                    <span>{{ trans('cruds.crmDocument.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('course_access')
                <li class="{{ request()->is("admin/courses") || request()->is("admin/courses/*") ? "active" : "" }}">
                    <a href="{{ route("admin.courses.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.course.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('lesson_access')
                <li class="{{ request()->is("admin/lessons") || request()->is("admin/lessons/*") ? "active" : "" }}">
                    <a href="{{ route("admin.lessons.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.lesson.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('test_access')
                <li class="{{ request()->is("admin/tests") || request()->is("admin/tests/*") ? "active" : "" }}">
                    <a href="{{ route("admin.tests.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.test.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('question_access')
                <li class="{{ request()->is("admin/questions") || request()->is("admin/questions/*") ? "active" : "" }}">
                    <a href="{{ route("admin.questions.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.question.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('question_option_access')
                <li class="{{ request()->is("admin/question-options") || request()->is("admin/question-options/*") ? "active" : "" }}">
                    <a href="{{ route("admin.question-options.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.questionOption.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('test_result_access')
                <li class="{{ request()->is("admin/test-results") || request()->is("admin/test-results/*") ? "active" : "" }}">
                    <a href="{{ route("admin.test-results.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.testResult.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('test_answer_access')
                <li class="{{ request()->is("admin/test-answers") || request()->is("admin/test-answers/*") ? "active" : "" }}">
                    <a href="{{ route("admin.test-answers.index") }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.testAnswer.title') }}</span>

                    </a>
                </li>
            @endcan
            @php($unread = \App\Models\QaTopic::unreadCount())
                <li class="{{ request()->is("admin/messenger") || request()->is("admin/messenger/*") ? "active" : "" }}">
                    <a href="{{ route("admin.messenger.index") }}">
                        <i class="fa-fw fa fa-envelope">

                        </i>
                        <span>{{ trans('global.messages') }}</span>
                        @if($unread > 0)
                            <strong>( {{ $unread }} )</strong>
                        @endif

                    </a>
                </li>
                @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                    @can('profile_password_edit')
                        <li class="{{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}">
                            <a href="{{ route('profile.password.edit') }}">
                                <i class="fa-fw fas fa-key">
                                </i>
                                {{ trans('global.change_password') }}
                            </a>
                        </li>
                    @endcan
                @endif
                <li>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <i class="fas fa-fw fa-sign-out-alt">

                        </i>
                        {{ trans('global.logout') }}
                    </a>
                </li>
        </ul>
    </section>
</aside>