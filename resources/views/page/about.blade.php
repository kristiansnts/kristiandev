@extends('layout.main')

@section('title', 'KristianDev - About')

@section('content')
    <section class="main-section container mt-20">
        <section class="profile">
            <h1 class="text-3xl text-white font-bold">I’m Kristian. Hi 👋🏼</h1>
            <p class="mt-2">I am NoDev (Not Only Developer).</p>
        </section>

        <section class="mt-10 max-w-3xl">
            <p>What is NoDev? This is slang word, that describe me so much, cause my work is not only about <a class="link"
                    href="#">coding</a>, i am a
                <a class="link" href="#">teacher</a> too,
                <a class="link" href="#">manager</a>, and i am a <a class="link" href="#">spiritual
                    leader</a> too 😄.
            </p>
            <p class="mt-4">I’m a physics graduated, really like about how this world work, i like Renewable energy,
                quantum, and any other physics thing, but don’t stop about that, I really like to code, why?</p>
            <p class="mt-4">i think code is how we can implement idea to real world, not only implement but, we can make
                money from it. so i learn to code.</p>
            <p class="mt-4">it was 3 years i learn code, from html, css to current tech that i learn, NextJs. i think
                learning code is way to infinite learn, cause nothing can stop world development.</p>
            <p class="mt-8">if you are interested to discuss with me about, physics, code, teaching, spiritual, even
                everything feel free to contact me. 😄</p>
        </section>

        <section class="contact mt-10">
            <a class="link" href="#">Contact me here ...</a>
        </section>

        <section class="social mt-4">
            <ul class="flex gap-8">
                <li class="flex gap-2">
                    <img class="w-5" src="/img/linkedin.svg" alt="linkedin logo">
                    <a href="https://www.linkedin.com/in/kristian-santoso">LinkedIn</a>
                </li>
                <li class="flex gap-2">
                    <img class="w-5" src="/img/github.svg" alt="github logo">
                    <a href="https://github.com/kristiansnts">Github</a>
                </li>
                <li class="flex gap-2">
                    <img class="w-5" src="/img/instagram.svg" alt="instagram logo">
                    <a href="https://www.instagram.com/kristiansnts/">Instagram</a>
                </li>
            </ul>
        </section>
    </section>
@endsection
