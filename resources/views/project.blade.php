<x-layout>
    <x-slot:layoutTitle>{{ $pageTitle }}</x-slot:layoutTitle>
    
    <div class="flex flex-col ml-8 mb-8 w-1/2">
        <span>FOR LOOP AND IF STATEMENT</span>
        <table class="mb-8">
            <tr>
                <td>PROJECT</td>
                <td>SEMESTER</td>
                <td>DESCRIPTION</td>
            </tr>
            @for ($i = 0; $i<10; $i++)
                @if ($i%2===0)
                    @php ($semester = "ODD")
                @else
                    @php ($semester = "EVEN")
                @endif

            <tr>
                <td>Project {{ $i+1 }}</td>
                <td>{{ $semester }}</td>
                <td>Description of project {{ $i+1 }}</td>
            </tr>
            @endfor
        </table>

        <span>ARRAY AND FOREACH</span>

        <table>
            <tr>
                <th>NO</th>
                <th>CODE</th>
                <th>PROJECT</th>
                <th>SEMESTER</th>
                <th>PROJECT</th>
                <th>DESCRIPTION</th>
                <th>LINK by CODE</th>
                <th>LINK by ID</th>
            </tr>
                {{-- @php ($i = 0) --}}
                {{-- $projects akan diberi dari Route --}}
                @foreach ($projects as $project)
                {{-- @php ($i++) --}}

                    @if ($loop->even)
                        @php ($semester = "EVEN")
                    @else
                        @php ($semester = "ODD")
                    @endif

                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $project['code'] }}</td>
                        <td>{{ $project['title'] }}</td>
                        <td>{{ $semester }}</td>
                        <td>{{ $project['course'] }}</td>
                        <td>
                            @if ($loop->first)
                                My very FIRST project
                            @elseif ($loop->last)
                                My LAST project
                            @else
                                Lorem ipsum dolor sit amet.
                            @endif
                        </td>
                        <td>
                            <a href="project/{{$project['code']}}">
                                <x-project-button>
                                    {{ $project->client['name'] }}
                                </x-project-button>
                            </a>
                        </td>
                        <td>
                            <a href="project/{{ $project['id'] }}">
                                <x-project-button>
                                    {{-- $project['nama_function_yang_untuk_relationship']['nama_atribut_di_tabel_satunya'] --}}
                                    {{ $project['client']['id'] }}
                                </x-project-button>
                            </a>
                        </td>
                    </tr>
                @endforeach
        </table>

        {{-- @foreach ($projects as $project)

            @if ($loop->even)
                @php ($semester = "EVEN")
            @else
                @php ($semester = "ODD")
            @endif

            <article></article>

            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $project['code'] }}</td>
                <td>{{ $project['title'] }}</td>
                <td>{{ $semester }}</td>
                <td>{{ $project['course'] }}</td>
                <td>
                    @if ($loop->first)
                        My very FIRST project
                    @elseif ($loop->last)
                        My LAST project
                    @else
                        Lorem ipsum dolor sit amet.
                    @endif
                </td>
            </tr>
        @endforeach --}}
    </div>
</x-layout>