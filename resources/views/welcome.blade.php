@extends('layouts.head')

@section('main')

<main>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
      <div class="col-md-6 p-lg-5 mx-auto my-5">
        <h1 class="display-3 fw-bold">Dashboard for Voter</h1>
        <h3 class="fw-normal text-muted mb-3">Chosse what you like!</h3>
        <div class="d-flex gap-3 justify-content-center lead fw-normal">
          <a class="icon-link" href="#slot-1">
            Vote now!
            <svg class="bi"><use xlink:href="#chevron-right"/></svg>
          </a>
          <a class="icon-link" href="#message">
            Contact
            <svg class="bi"><use xlink:href="#chevron-right"/></svg>
          </a>
        </div>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>


    <div class="row">
        <div class="col-md-6 m-auto">
            @if (session('error_voter'))
            <div class="alert alert-danger">{{ session('error_voter') }}</div>
            @endif
            @if (session('success_voter'))
            <div class="alert alert-success">{{ session('success_voter') }}</div>
            @endif
            @error('voter_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    {{-- Slot 1,2 start --}}

    <div id="slot-1" class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    @foreach ($votes as $vote)
    @if ($vote->slot == 1)
    <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 py-3">
        <h3 class="display-6">Voting slot {{ $vote->slot }}</h3>
        <h2 class="display-5">{{ $vote->title }}</h2>
        <p class="lead">{{ $vote->description }}</p>
      </div>
      <div class="bg-body-tertiary shadow-sm mx-auto text-info" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
        <form action="{{ route('add_vote') }}" method="POST">
            @csrf
            <input type="hidden" name="vote_id" value="{{ $vote->id }}">
            <div class="mb-3 p-2">
                <label class="form-label">Enter voter id:</label>
                <input type="number" name="voter_id" class="form-control">
            </div>
            <div class="mb-3 p-2">
                <label class="form-label">Chosse option:</label>
                <select name="option" class="form-control" id="">
                    <option value="1">{{ $vote->option1 }}</option>
                    <option value="2">{{ $vote->option2 }}</option>
                    <option value="3">{{ $vote->option3 }}</option>
                    <option value="4">{{ $vote->option4 }}</option>
                </select>
            </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-primary">Give Vote</button>
            </div>
        </form>
      </div>
    </div>
      @break
    @endif
    @endforeach
    @foreach ($votes as $vote)
    @if ($vote->slot == 2)
    <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 py-3">
          <h3 class="display-6">Voting slot {{ $vote->slot }}</h3>
          <h2 class="display-5">{{ $vote->title }}</h2>
          <p class="lead">{{ $vote->description }}</p>
        </div>
        <div class="bg-body-tertiary shadow-sm mx-auto text-info" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <form action="{{ route('add_vote') }}" method="POST">
              @csrf
              <input type="hidden" name="vote_id" value="{{ $vote->id }}">
              <div class="mb-3 p-2">
                  <label class="form-label">Enter voter id:</label>
                  <input type="number" name="voter_id" class="form-control">
              </div>
              <div class="mb-3 p-2">
                  <label class="form-label">Chosse option:</label>
                  <select name="option" class="form-control" id="">
                      <option value="1">{{ $vote->option1 }}</option>
                      <option value="2">{{ $vote->option2 }}</option>
                      <option value="3">{{ $vote->option3 }}</option>
                      <option value="4">{{ $vote->option4 }}</option>
                  </select>
              </div>
              <div class="mt-2">
                  <button type="submit" class="btn btn-primary">Give Vote</button>
              </div>
          </form>
        </div>
      </div>
    @break
    @endif
    @endforeach
    </div>

    {{-- slot 1,2 end --}}

    {{-- slot 2,3 start --}}

    <div id="slot-1" class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    @foreach ($votes as $vote)
    @if ($vote->slot == 3)
    <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 py-3">
          <h3 class="display-6">Voting slot {{ $vote->slot }}</h3>
          <h2 class="display-5">{{ $vote->title }}</h2>
          <p class="lead">{{ $vote->description }}</p>
        </div>
        <div class="bg-body-tertiary shadow-sm mx-auto text-info" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <form action="{{ route('add_vote') }}" method="POST">
              @csrf
              <input type="hidden" name="vote_id" value="{{ $vote->id }}">
              <div class="mb-3 p-2">
                  <label class="form-label">Enter voter id:</label>
                  <input type="number" name="voter_id" class="form-control">
              </div>
              <div class="mb-3 p-2">
                  <label class="form-label">Chosse option:</label>
                  <select name="option" class="form-control" id="">
                      <option value="1">{{ $vote->option1 }}</option>
                      <option value="2">{{ $vote->option2 }}</option>
                      <option value="3">{{ $vote->option3 }}</option>
                      <option value="4">{{ $vote->option4 }}</option>
                  </select>
              </div>
              <div class="mt-2">
                  <button type="submit" class="btn btn-primary">Give Vote</button>
              </div>
          </form>
        </div>
    </div>
    @break
    @endif
    @endforeach
    @foreach ($votes as $vote)
    @if ($vote->slot == 4)
    <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 py-3">
          <h3 class="display-6">Voting slot {{ $vote->slot }}</h3>
          <h2 class="display-5">{{ $vote->title }}</h2>
          <p class="lead">{{ $vote->description }}</p>
        </div>
        <div class="bg-body-tertiary shadow-sm mx-auto text-info" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <form action="{{ route('add_vote') }}" method="POST">
              @csrf
              <input type="hidden" name="vote_id" value="{{ $vote->id }}">
              <div class="mb-3 p-2">
                  <label class="form-label">Enter voter id:</label>
                  <input type="number" name="voter_id" class="form-control">
              </div>
              <div class="mb-3 p-2">
                  <label class="form-label">Chosse option:</label>
                  <select name="option" class="form-control" id="">
                      <option value="1">{{ $vote->option1 }}</option>
                      <option value="2">{{ $vote->option2 }}</option>
                      <option value="3">{{ $vote->option3 }}</option>
                      <option value="4">{{ $vote->option4 }}</option>
                  </select>
              </div>
              <div class="mt-2">
                  <button type="submit" class="btn btn-primary">Give Vote</button>
              </div>
          </form>
        </div>
    </div>
    @break
    @endif
    @endforeach
    </div>


    {{-- slot 2,3 end --}}

    {{-- Message Section --}}
    <div id="message" class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
        <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 py-3">
            <h2 class="display-5">Give your feedback</h2>
            <p class="lead">Please give us feedback to improve voting system.</p>
          </div>
          <div class="bg-body-tertiary shadow-sm mx-auto text-info" style="width: 50%; height: 300px; border-radius: 21px 21px 0 0;">
            <form action="" method="POST">
                <div class="mb-2 p-2">
                    <label class="form-label">Enter name:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3 p-2">
                    <label class="form-label">Type your message</label>
                    <textarea name="message" class="form-control" rows="3"></textarea>
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-primary">Send message</button>
                </div>
            </form>
          </div>
        </div>

      </div>


  </main>

@endsection
